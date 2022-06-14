<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\Utils;
use core\RoleUtils;
use app\forms\LoginForm;
use app\transfer\UserTransfer;

class LoginControl {

    private $form;
    private $accounts;
    private $role_id;
    private $role_name;

    public function __construct() {
        
        $this -> form = new LoginForm();
    }

    public function validate() {

        // Pobieram parametry z formularza
        $this -> form -> login = ParamUtils::getFromRequest('login');
        $this -> form -> pass = base64_encode(ParamUtils::getFromRequest('pass'));

        if (! (isset ($this -> form -> login) && isset ($this -> form -> pass))) {
            return false;
        }
        
        // Sprawdzam czy nie są puste
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu.');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła.');
        }

        if (App::getMessages()->isError()) {
            return false;
        }
        
        // Sprawdzam czy w bazie znajduje się konto o takim samym loginie i haśle
        try {
            $this -> accounts = App::getDB() -> get("uzytkownicy", "idUzytkownicy",[ 
                "AND" => [
                    "Login" => $this -> form -> login,
                    "Haslo" => $this -> form -> pass
                    ]
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd odczytu z tabeli 1.');
            if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        if(! isset($this -> accounts)) {
            Utils::addErrorMessage('Błędne hasło lub login.');
            return false;
        }

        // Jezeli dane się zgadzają sprawdzam rolę użytkownika
        try {
            $role_id = App::GetDB() -> get("uzytkownicy_has_role", "idRoli", [
                "idUzytkownika" => $this -> accounts
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd odczytu z tabeli 2..');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }

        if(! isset($role_id)) {
            Utils::addErrorMessage('Nie masz jeszce przypisanej roli! Poczekaj aż zrobi to administrator.');
            return false;
        }
        
        // Pobieram nazwę roli z tabeli jeżeli wszystko wyżej ok
        try {
            $role_name = App::GetDB() -> get("role", "Nazwa_Roli", [
                "idRole" => $role_id
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd odczytu z tabeli 3.');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }

        if (App::getMessages()->isError()) {
            return false;
        }

        $user = new UserTransfer($this -> form -> login, $this -> accounts);
        $_SESSION['user'] = serialize($user);

        // Wpisuję rolę programu (loguję użytkownika)
        RoleUtils::addRole($role_name);

        return !App::getMessages() -> isError();
    }

    public function action_login() {

        if ($this -> validate()) {
            App::getRouter() -> redirectTo("menu");
        } else {
            $this -> generate_view();
        }
    }

    public function action_logout() {
        
        session_destroy();

        App::getRouter()->redirectTo('menu');
    }

    public function generate_view() {

        App::getSmarty() -> assign('form', $this->form);
        
        App::getSmarty() -> display('login_view.tpl');
    }
}