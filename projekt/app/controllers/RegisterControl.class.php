<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\Utils;
use app\forms\LoginForm;
use app\transfer\UserTransfer;
use app\transfer\CharacterTransfer;

class RegisterControl {

    private $form;
    private $check;
    private $user_id;

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

        try {
            $this -> check = App::getDB() -> get("uzytkownicy", "Login", [
                "Login" => $this -> form -> login
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Bląd przy sprawdzaniu unikalności loginu');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }

        if (!empty($this -> check)) {
            Utils::addErrorMessage("Użytkownik o tym imieniu już istienieje.");
        }

        if (App::getMessages()->isError()) {
            return false;
        }

        try {
            App::getDB()->insert("uzytkownicy", [
                "Login" => $this -> form -> login,
                "Haslo" => $this -> form -> pass
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Bląd przy dodawaniu użytkownika');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }

        if (App::getMessages()->isError()) {
            return false;
        }

        try {
            $this -> user_id = App::getDB()->get("uzytkownicy", "idUzytkownicy", [
                "AND" => [
                "Login" => $this -> form -> login,
                "Haslo" => $this -> form -> pass
                ]
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Bląd przy dodawaniu postaci');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }

        if (App::getMessages()->isError()) {
            return false;
        }

        // Przypisanie roli użytkownika nowemu użytkownikowi
        try {
            App::getDB()->insert("uzytkownicy_has_role", [
               "idUzytkownika" => $this -> user_id,
               "idRoli" => 3,
               "Data_Przypisania" => date("Y-m-d H:i:s")
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Bląd przy przypisuwaniu roli');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }

        return !App::getMessages() -> isError();
    }

    public function action_register() {
        if ($this -> validate()) {
            Utils::addInfoMessage("Zarejestrowano Pomyślnie");
            App::getRouter()->redirectTo('login');
        } else {
            $this -> generate_view();
        }

    }

    public function action_showRegister() {

        $this -> generate_view();
    }

    public function generate_view() {

        App::getSmarty() -> display('registerUser_view.tpl');
    }

}
    