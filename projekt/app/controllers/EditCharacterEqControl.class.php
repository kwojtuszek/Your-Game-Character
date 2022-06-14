<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\Utils;
use app\forms\EquipmentForm;
use app\transfer\CharacterTransfer;
use app\transfer\EquipmentTransfer;
use app\transfer\EditEquipmentTransfer;

class EditCharacterEqControl {

    private $form;
    private $character_id;
    private $records;
    private $condition;
    private $edit;

    public function __construct() {

        $this -> form = new EquipmentForm();
    }

    public function getEqTypeId() {

        try {
            
            $this -> form -> head_id = App::getDB() -> get("typ_ekwipunku", "idTyp_Ekwipunku", [
                "Typ" => "Helm"
            ]);

            $this -> form -> shoulders_id = App::getDB() -> get("typ_ekwipunku", "idTyp_Ekwipunku", [
                "Typ" => "Naramienniki"
            ]);

            $this -> form -> hands_id = App::getDB() -> get("typ_ekwipunku", "idTyp_Ekwipunku", [
                "Typ" => "Rekawice"
            ]);

            $this -> form -> chest_id = App::getDB() -> get("typ_ekwipunku", "idTyp_Ekwipunku", [
                "Typ" => "Napiersnik"
            ]);

            $this -> form -> legs_id = App::getDB() -> get("typ_ekwipunku", "idTyp_Ekwipunku", [
                "Typ" => "Spodnie"
            ]);

            $this -> form -> feet_id = App::getDB() -> get("typ_ekwipunku", "idTyp_Ekwipunku", [
                "Typ" => "Buty"
            ]);

            $this -> form -> weapon_id = App::getDB() -> get("typ_ekwipunku", "idTyp_Ekwipunku", [
                "Typ" => "Bron"
            ]);

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd odczytu Typu Ekwipunku.');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }
    }

    public function getCharacterParams() {

        $this -> character_id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');

        return !App::getMessages() -> isError();
    }

    public function getEditParams() {

        $this -> condition = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        $this -> character_id = ParamUtils::getFromCleanURL(2, true, 'Błędne wywołanie aplikacji');

        return !App::getMessages() -> isError();
    }

    public function getItemId() {

        $this -> form -> chosen_id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');

        return !App::getMessages() -> isError();
    }

    public function action_showCharacterEquipment() {

        if ($this -> getCharacterParams()) {
        
        try {
            $this -> records = App::getDB() -> select("zapisane_postacie_has_ekwipunek", [
                "[>]ekwipunek" => ["idEkwipunku" => "idEkwipunek"],
                "[>]zapisane_postacie" => ["idPostaci" => "idZapisane_Postacie"],
                "[>]typ_ekwipunku" => ["ekwipunek.idTypu" => "idTyp_Ekwipunku"]
            ], [
                "zapisane_postacie.idZapisane_Postacie",
                "zapisane_postacie.Imie_Postaci",
                "ekwipunek.idEkwipunek",
                "ekwipunek.Nazwa",
                "ekwipunek.Material",
                "ekwipunek.Potega",
                "typ_ekwipunku.idTyp_Ekwipunku",
                "typ_ekwipunku.Typ",
                "zapisane_postacie_has_ekwipunek.idZalozenia",
                "zapisane_postacie_has_ekwipunek.Data_Zalozenia"
            ], [
                "zapisane_postacie_has_ekwipunek.idPostaci" => $this -> character_id
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd odczytu ekwipunku postaci.');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }
        $this -> generateCharacterEq_view();
        }
    }

    public function action_showEditHead() {

        if ($this -> getEditParams()) {

            $edit_eq = new EditEquipmentTransfer($this -> condition, $this -> character_id);
            $_SESSION['edition'] = serialize($edit_eq);

            $this -> getEqTypeID();

            try {
                    $this -> records = App::getDB() -> select("ekwipunek", [
                        "idEkwipunek",
                        "Material",
                        "Nazwa",
                        "Potega",
                        "idTypu"
                    ], [
                        "idTypu" => $this -> form -> head_id,

                        'ORDER' => "Potega"
                    ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Błąd odczytu Typu Ekwipunku (Hełm).');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
            $this -> generateEdit_view();
        }
        App::getRouter() -> forwardTo('showCharacters');
    }
    
    public function action_showEditShoulders() {

        if ($this -> getEditParams()) {

            $edit_eq = new EditEquipmentTransfer($this -> condition, $this -> character_id);
            $_SESSION['edition'] = serialize($edit_eq);

            $this -> getEqTypeID();

            try {
                    $this -> records = App::getDB() -> select("ekwipunek", [
                        "idEkwipunek",
                        "Material",
                        "Nazwa",
                        "Potega",
                        "idTypu"
                    ], [
                        "idTypu" => $this -> form -> shoulders_id,

                        'ORDER' => "Potega"
                    ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Błąd odczytu Typu Ekwipunku (Hełm).');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
            $this -> generateEdit_view();
        }
        App::getRouter() -> forwardTo('showCharacters');
    }
    
    public function action_showEditHands() {

        if ($this -> getEditParams()) {

            $edit_eq = new EditEquipmentTransfer($this -> condition, $this -> character_id);
            $_SESSION['edition'] = serialize($edit_eq);

            $this -> getEqTypeID();

            try {
                    $this -> records = App::getDB() -> select("ekwipunek", [
                        "idEkwipunek",
                        "Material",
                        "Nazwa",
                        "Potega",
                        "idTypu"
                    ], [
                        "idTypu" => $this -> form -> hands_id,

                        'ORDER' => "Potega"
                    ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Błąd odczytu Typu Ekwipunku (Hełm).');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
            $this -> generateEdit_view();
        }
        App::getRouter() -> forwardTo('showCharacters');
    }
    
    public function action_showEditChest() {

        if ($this -> getEditParams()) {

            $edit_eq = new EditEquipmentTransfer($this -> condition, $this -> character_id);
            $_SESSION['edition'] = serialize($edit_eq);

            $this -> getEqTypeID();

            try {
                    $this -> records = App::getDB() -> select("ekwipunek", [
                        "idEkwipunek",
                        "Material",
                        "Nazwa",
                        "Potega",
                        "idTypu"
                    ], [
                        "idTypu" => $this -> form -> chest_id,

                        'ORDER' => "Potega"
                    ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Błąd odczytu Typu Ekwipunku (Hełm).');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
            $this -> generateEdit_view();
        }
        App::getRouter() -> forwardTo('showCharacters');
    }
    
    public function action_showEditLegs() {

        if ($this -> getEditParams()) {

            $edit_eq = new EditEquipmentTransfer($this -> condition, $this -> character_id);
            $_SESSION['edition'] = serialize($edit_eq);

            $this -> getEqTypeID();

            try {
                    $this -> records = App::getDB() -> select("ekwipunek", [
                        "idEkwipunek",
                        "Material",
                        "Nazwa",
                        "Potega",
                        "idTypu"
                    ], [
                        "idTypu" => $this -> form -> legs_id,

                        'ORDER' => "Potega"
                    ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Błąd odczytu Typu Ekwipunku (Hełm).');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
            $this -> generateEdit_view();
        }
        App::getRouter() -> forwardTo('showCharacters');
    }
    
    public function action_showEditFeet() {

        if ($this -> getEditParams()) {

            $edit_eq = new EditEquipmentTransfer($this -> condition, $this -> character_id);
            $_SESSION['edition'] = serialize($edit_eq);

            $this -> getEqTypeID();

            try {
                    $this -> records = App::getDB() -> select("ekwipunek", [
                        "idEkwipunek",
                        "Material",
                        "Nazwa",
                        "Potega",
                        "idTypu"
                    ], [
                        "idTypu" => $this -> form -> feet_id,

                        'ORDER' => "Potega"
                    ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Błąd odczytu Typu Ekwipunku (Hełm).');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
            $this -> generateEdit_view();
        }
        App::getRouter() -> forwardTo('showCharacters');
    }
    
    public function action_showEditWeapon() {

        if ($this -> getEditParams()) {

            $edit_eq = new EditEquipmentTransfer($this -> condition, $this -> character_id);
            $_SESSION['edition'] = serialize($edit_eq);

            $this -> getEqTypeID();

            try {
                    $this -> records = App::getDB() -> select("ekwipunek", [
                        "idEkwipunek",
                        "Material",
                        "Nazwa",
                        "Potega",
                        "idTypu"
                    ], [
                        "idTypu" => $this -> form -> weapon_id,

                        'ORDER' => "Potega"
                    ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Błąd odczytu Typu Ekwipunku (Hełm).');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
            $this -> generateEdit_view();
        }
        App::getRouter() -> forwardTo('showCharacters');
    }
    
    public function action_assignNew() {

        $this -> edit = unserialize($_SESSION['edition']);

        if ($this -> getItemId()) {

            try {
                App::getDB() -> update("zapisane_postacie_has_ekwipunek", [
                    "idEkwipunku" => $this -> form -> chosen_id,
                    "Data_Zalozenia" => date("Y-m-d H:i:s")
                ], [
                    "idZalozenia" => $this -> edit -> condition
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Błąd przypisania nowego ekwipunku.');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
            App::getRouter() -> forwardTo('calcMight');
        } else {
            App::getRouter() -> forwardTo('showCharacters');
        }
    }

    public function generateCharacterEq_view() {

        App::getSmarty() -> assign('records', $this -> records);

        App::getSmarty() -> display('characterEq_view.tpl');
    }

    public function generateEdit_view() {

        App::getSmarty() -> assign('records', $this -> records);
        App::getSmarty() -> display('editCharacterEq_view.tpl');
    }
}