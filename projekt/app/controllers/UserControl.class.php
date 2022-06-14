<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\Utils;
use app\forms\LoginForm;
use app\transfer\UserTransfer;
use app\transfer\CharacterTransfer;

class UserControl {

    private $role;
    private $role_id;
    private $admin;
    private $user_id;
    private $user_login;
    private $user_edit;
    private $change;
    private $records;

    public function getAdmin() {

        $this -> admin = unserialize($_SESSION['user']);
    }

    public function validate() {

        $this -> role = ParamUtils::getFromRequest('role');

        if (! (isset($this -> role))) {
            return false;
        }

        if ($this -> role == "Brak") {
            Utils::addErrorMessage('Nie wybrano roli.');
        }

        if (App::getMessages()->isError()) {
            return false;
        }

        return !App::getMessages() -> isError();        
    }
    
    public function getUserParams() {

        $this -> user_id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        $this -> user_login = ParamUtils::getFromCleanURL(2, true, 'Błędne wywołanie aplikacji');

        return !App::getMessages() -> isError();
    }

    public function action_showUsers() {

        try {
            $this -> records = App::getDB() -> select("uzytkownicy", [
                "[>]uzytkownicy_has_role" => ["idUzytkownicy" => "idUzytkownika"],
                "[>]role" => ["uzytkownicy_has_role.idRoli" => "idRole"]
            ], [
                "uzytkownicy.idUzytkownicy",
                "uzytkownicy.Login",
                "role.Nazwa_Roli",
                "uzytkownicy_has_role.Data_Przypisania",
                "uzytkownicy_has_role.Przypisal"
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd odczytu Uzytkownikow.');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }
        $this -> generateUsers_view();
    }

    public function action_showChangeRole() {

        if ($this -> getUserParams()) {
            $user_edit = new UserTransfer($this -> user_login, $this -> user_id);
            $_SESSION['change'] = serialize($user_edit);
            App::getRouter()->forwardTo('changeRole');
        } else {
            App::getRouter() -> redirectTo('menu');
        }
    }

    public function action_changeRole() {
        
        $this -> change = unserialize($_SESSION['change']);
        $this -> getAdmin();
        
        if ($this -> validate()) {

            try {
                $this -> role_id = App::getDB() -> get("role", "idRole", [
                    "Nazwa_Roli" => $this -> role
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Bląd przy pobieraniu id roli');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }

            try {
                App::getDB() -> update("uzytkownicy_has_role", [
                    "idRoli" => $this -> role_id,
                    "Przypisal" => $this -> admin -> login,
                    "Data_Przypisania" => date("Y-m-d H:i:s")
                ], [
                    "idUzytkownika" => $this -> change -> id
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Bląd przy nadawaniu roli');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
            Utils::addInfoMessage("Zmieniono role użytkownika");
            App::getRouter()->forwardTo('showUsers');
        }
        $this -> generateChangeRole_view();
    }

    public function generateUsers_view() {
        
        App::getSmarty() -> assign('records', $this -> records);
        App::getSmarty() -> display('users_view.tpl');
    }

    public function generateChangeRole_view() {

        App::getSmarty() -> display('changeRole_view.tpl');
    }
}