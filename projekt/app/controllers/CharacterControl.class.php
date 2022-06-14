<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\Utils;
use app\forms\CharacterForm;
use app\transfer\UserTransfer;
use app\transfer\CharacterTransfer;

class CharacterControl {
    
    private $form;
    private $user;
    private $character_id;
    private $character_name;
    private $edit;
    private $check;
    private $records;

    public function __construct() {

        $this -> form = new CharacterForm();
    }
    
    public function getUser() {

        $this -> user = unserialize($_SESSION['user']);
    }

    public function validate() {

        $this -> form -> name = ParamUtils::getFromRequest('name');
        $this -> form -> class = ParamUtils::getFromRequest('class');

        if (! (isset ($this -> form -> name) && isset ($this -> form -> class))) {
            return false;
        }

        if (empty($this->form->name)) {
            Utils::addErrorMessage('Nie podano imienia postaci.');
        }

        if ($this->form->class == "Brak") {
            Utils::addErrorMessage('Nie wybrano klasy postaci.');
        }

        if (App::getMessages()->isError()) {
            return false;
        }

        try {
            $this -> check = App::getDB() -> get("zapisane_postacie", "Imie_Postaci", [
                "Imie_Postaci" => $this -> form -> name
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Bląd przy dodawaniu postaci');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }

        if (!empty($this -> check)) {
            Utils::addErrorMessage("Postać o takim imieniu już istnieje.");
        }

        if (App::getMessages()->isError()) {
            return false;
        }

        $this -> getUser();
        $this -> getCharacter();

        return !App::getMessages() -> isError();
    }

    public function getCharacterParams() {

        $this -> character_id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        $this -> character_name = ParamUtils::getFromCleanURL(2, true, 'Błędne wywołanie aplikacji');

        return !App::getMessages() -> isError();
    }

    public function getCharacter() {

            try {
                $this -> character_id = App::getDB() -> get("zapisane_postacie", "idZapisane_Postacie", [
                    "AND" => [
                        "Imie_Postaci" => $this -> form -> name,
                        "Klasa" => $this -> form -> class,
                        "idUzytkownika" => $this -> user -> id
                    ]
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Bląd przy dodawaniu postaci');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
            $character = new CharacterTransfer($this -> character_id, $this -> form -> name);
            $_SESSION['character'] = serialize($character);
    }

    public function action_addCharacter() {
        
        if ($this -> validate()) {
            
            try {
                App::getDB()->insert("zapisane_postacie", [
                    "Imie_Postaci" => $this -> form -> name,
                    "Klasa" => $this -> form -> class,
                    "idUzytkownika" => $this -> user -> id
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Bląd przy dodawaniu postaci');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
            $this -> getCharacter();
            App::getRouter() -> redirectTo("showHead");
        } else {
            $this -> generateAdd_view();
        }
    }

    public function action_showCharacters() {

            $this -> getUser();

            try {
                $this -> records = App::getDB() -> select("zapisane_postacie", [
                    "idZapisane_Postacie",
                    "Imie_Postaci",
                    "Klasa",
                    "Potega"
                ], [
                    "idUzytkownika" => $this -> user -> id
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Bląd przy wyświetlaniu Postaci.');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
            $this -> generateCharacters_view();
    }

    public function action_showEditCharacter() {

        if ($this -> getCharacterParams()) {
            $character_edit = new CharacterTransfer($this->character_id, $this->character_name);
            $_SESSION['edit'] = serialize($character_edit);
            App::getRouter()->forwardTo('editCharacter');
        } else {
            App::getRouter() -> redirectTo('menu');
        }
    }
              
    public function action_editCharacter() {

        $this -> edit = unserialize($_SESSION['edit']);

        if ($this -> validate()) {

        
            try {
                App::getDB()->update("zapisane_postacie", [
                    "Imie_Postaci" => $this -> form -> name,
                    "Klasa" => $this -> form -> class
                ], [
                    "idZapisane_Postacie" => $this -> edit -> id
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Bląd przy edytowaniu postaci');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
            Utils::addInfoMessage("Edytowano postać ".$this->form->name);
            App::getRouter() -> forwardTo("showCharacters");
        } else {
            $this -> generateChange_view();
        }
    }

    public function action_deleteCharacter() {

        if ($this -> getCharacterParams()) {

            try {
                App::getDB()->delete("zapisane_postacie_has_ekwipunek", [
                    "idPostaci" => $this -> character_id
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Bląd przy edytowaniu postaci');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }

            try {
                App::getDB()->delete("zapisane_postacie", [
                    "idZapisane_postacie" => $this -> character_id
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Bląd przy edytowaniu postaci');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
        }
        App::getRouter()->redirectTo('showCharacters');
    }

    public function generateAdd_view() { 

        App::getSmarty() -> display('addCharacter_view.tpl');
    }

    public function generateChange_view() { 

        App::getSmarty() -> display('changeCharacter_view.tpl');
        
    }

    public function generateCharacters_view() {

        App::getSmarty() -> assign('records', $this -> records);

        App::getSmarty() -> display('characters_view.tpl');
    }
}