<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\Utils;
use app\forms\EquipmentForm;
use app\forms\ItemForm;
use app\transfer\CharacterTransfer;
use app\transfer\EquipmentTransfer;
use app\transfer\EditEquipmentTransfer;
use app\transfer\ItemTransfer;

class EditItemsControl {

    private $form;
    private $check;
    private $item_id;

    public function __construct() {

        $this -> form = new ItemForm();
    }

    public function getItemParam() {

        $this -> item_id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');

        return !App::getMessages() -> isError();
    }

    public function validate() {

        $this -> form -> name = ParamUtils::getFromRequest('name');
        $this -> form -> might = ParamUtils::getFromRequest('might');
        $this -> form -> material = ParamUtils::getFromRequest('material');
        $this -> form -> type = ParamUtils::getFromRequest('type');

        if (! (isset ($this -> form -> name) && isset ($this -> form -> might) && isset ($this -> form -> material) && isset($this -> form -> type))) {
            return false;
        }

        if (empty($this->form->name)) {
            Utils::addErrorMessage('Nie podano nazwy przedmiotu.');
        }
        if (empty($this->form->might)) {
            Utils::addErrorMessage('Nie podano potęgi przedmiotu.');
        }
        if (empty($this->form->material)) {
            Utils::addErrorMessage('Nie określono materiału.');
        }
        if (empty($this->form->type)) {
            Utils::addErrorMessage('Nie określono typu.');
        }

        if (App::getMessages()->isError()) {
            return false;
        }

        if ($this -> form -> might > 226) {
            Utils::addErrorMessage('Zbyt duża potęga! Maksymalna wartość to 226.');
        }

        if (App::getMessages()->isError()) {
            return false;
        }

        if ($this -> form -> type == 3 && $this -> form -> material != "Brak dla Broni") {
            Utils::addErrorMessage('Broń może posiadać tylko swój materiał (Brak dla Broni)');
        }

        if (App::getMessages()->isError()) {
            return false;
        }

        if ($this -> form -> type != 3 && $this -> form -> material == "Brak dla Broni") {
            Utils::addErrorMessage('Ten materiał jest przeznaczony tylko dla broni! (Brak dla Broni)');
        }

        if (App::getMessages()->isError()) {
            return false;
        }

        try {
            $this -> check = App::getDB() -> get("ekwipunek", "Nazwa", [
                "Nazwa" => $this -> form -> name
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Bląd przy sprawdzaniu dostępności nazwy');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }

        if (!empty($this -> check)) {
            Utils::addErrorMessage("Przedmiot o takiej nazwie już istnieje.");
        }

        if (App::getMessages()->isError()) {
            return false;
        }

        return !App::getMessages() -> isError();
    }

    public function action_showAddItem() {

       $this -> generateAdd_view(); 
    }

    public function action_addItem() {

        if ($this -> validate()) {
            try {
                App::getDB() -> insert("ekwipunek", [
                    "Nazwa" => $this -> form -> name,
                    "Potega" => $this -> form -> might,
                    "Material" => $this -> form -> material,
                    "idTypu" => $this -> form -> type
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Bląd przy dodawaniu przedmiotu');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
            Utils::addInfoMessage("Dodano przedmiot.");
            App::getRouter() -> forwardTo('showItems'); 
        }
        $this -> generateAdd_view();
    }

    public function action_showEditItem() {
        
        if ($this -> getItemParam()) {

            $item = $this -> item_id;
            $_SESSION['item'] = serialize($item);

            App::getRouter() -> redirectTo('editItem');
        }
        App::getRouter() -> forwardTo('showItems');
    }

    public function action_editItem() {

        $this -> item_id = unserialize($_SESSION['item']);
        
        if ($this -> validate()) {
            try {
                App::getDB() -> update("ekwipunek", [
                    "Nazwa" => $this -> form -> name,
                    "Potega" => $this -> form -> might,
                    "Material" => $this -> form -> material,
                    "idTypu" => $this -> form -> type
                ], [
                    "idEkwipunek" => $this -> item_id
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Bląd przy edycji przedmiotu');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
            Utils::addInfoMessage("Edytowano przedmiot.");
            App::getRouter() -> forwardTo('calcEditMight'); 
        }
        $this -> generateEdit_view();
    }
    
     public function generateAdd_view() {

        App::getSmarty() -> display('itemAdd_view.tpl');
    }

    public function generateEdit_view() {

        App::getSmarty() -> assign('check', $this -> item_id);

        App::getSmarty() -> display('itemEdit_view.tpl');
    }
}