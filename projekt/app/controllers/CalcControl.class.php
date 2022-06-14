<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\Utils;
use app\forms\EquipmentForm;
use app\transfer\CharacterTransfer;
use app\transfer\EquipmentTransfer;
use app\transfer\EditEquipmentTransfer;

class CalcControl {

    private $result;
    private $mights;
    private $character_id;
    private $calc_eq;
    private $test;
    private $item_id;

    public function action_calcMight() {

        $this -> calc_eq = unserialize($_SESSION['edition']);

        try {
            $this -> character_id = App::getDB() -> get("zapisane_postacie_has_ekwipunek", "idPostaci", [
                "idZalozenia" => $this -> calc_eq -> condition
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd pobierania użytkownika.');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }

        if (empty($this->character_id)) {
            Utils::addInfoMessage("Nie wiem jaka postać");
            $this -> generate_view();
        }

        try {
            $this -> mights = App::getDB() -> select("zapisane_postacie_has_ekwipunek", [
                "[>]ekwipunek" => ["idEkwipunku" => "idEkwipunek"]
            ], [
                "ekwipunek.Potega"
            ], [
                "zapisane_postacie_has_ekwipunek.idPostaci" => $this -> character_id
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd pobierania potęgi przedmiotów.');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }

        if (empty($this->mights)) {
            Utils::addInfoMessage("Nie pobrano potęgi przedmiotów");
            $this -> generate_view();
        }


        foreach ($this -> mights as $might => $numbers) {
            foreach ($numbers as $number => $value) {
                $this -> result += $value;
            }
        }

        $this -> result = $this -> result/7;

        try {
            App::getDB() -> update("zapisane_postacie", [
                "Potega" => $this -> result 
            ], [
                "idZapisane_Postacie" => $this -> character_id
            ]); 
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd wpisywania obliczonej potęgi.');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter() -> redirectTo("showCharacters");
    }

    public function action_calcEditMight() {

        $this -> item_id = unserialize($_SESSION['item']);

        try {
            $this -> character_id = App::getDB() -> select("zapisane_postacie_has_ekwipunek", "idPostaci", [
                "idEkwipunku" => $this -> item_id
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd pobierania postaci z tym ekwipunkiem.');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }

        foreach ($this -> character_id as $characters => $columns) {
                
            try {
                $this -> mights = App::getDB() -> select("zapisane_postacie_has_ekwipunek", [
                    "[>]ekwipunek" => ["idEkwipunku" => "idEkwipunek"]
                ], [
                    "ekwipunek.Potega"
                ], [
                    "zapisane_postacie_has_ekwipunek.idPostaci" => $columns
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Błąd pobierania potęgi przedmiotów.');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }

            if (empty($this->mights)) {
                Utils::addInfoMessage("Nie pobrano potęgi przedmiotów");
                $this -> generate_view();
            }
            
            foreach ($this -> mights as $might => $numbers) {
                foreach ($numbers as $number => $value) {
                    $this -> result += $value;
                }
            }
    
            $this -> result = $this -> result/7;
    
            try {
                App::getDB() -> update("zapisane_postacie", [
                    "Potega" => $this -> result 
                ], [
                    "idZapisane_Postacie" => $columns
                ]); 
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Błąd wpisywania obliczonej potęgi.');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
            $this -> result = 0;
        }
        App::getRouter() -> forwardTo("showItems");
    }
}



