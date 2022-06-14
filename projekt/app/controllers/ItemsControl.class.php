<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\Utils;
use app\forms\PagingForm;
use app\transfer\CharacterTransfer;
use app\transfer\EquipmentTransfer;
use app\transfer\EditEquipmentTransfer;

class ItemsControl {

    private $item_name;
    private $records;
    private $form;
    private $items;

    public function __construct() {

        $this -> form = new PagingForm();
    }

    public function validate() {

        $this->item_name = ParamUtils::getFromRequest('item_name');
        $this -> form -> page = ParamUtils::getFromCleanURL(1);

        return !App::getMessages()->isError();
    }

    public function showTable() {

        $this -> validate();

        $search_params = [];
        if (isset($this->item_name) && strlen($this->item_name) > 0) {
            $search_params['ekwipunek.Nazwa[~]'] = $this->item_name . '%';
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }

        $this -> form -> size = 5;

        $this -> items = App::getDB() -> count("ekwipunek", "idEkwipunek");

        $this -> form -> total = ceil($this -> items/$this -> form -> size);

        if($this -> form -> page < 1) {
            $this -> form -> page = 1;
        }

        if($this -> form -> page > $this -> form -> total) {
            $this -> form -> page = $this -> form -> total;
        }

        $this -> form -> offset = $this -> form -> size * ($this -> form -> page - 1);

        if($this -> form -> offset < 0) {
            $this -> form -> offset = 0;
        }

        $where ["ORDER"] = "ekwipunek.Potega";
        $where ["LIMIT"] = [$this -> form -> offset, $this -> form -> size];

        try {
            $this -> records = App::getDB() -> select("ekwipunek", [
                "[>]typ_ekwipunku" => ["idTypu" => "idTyp_Ekwipunku"]
            ], [
                "ekwipunek.idEkwipunek",
                "ekwipunek.Nazwa",
                "ekwipunek.Material",
                "ekwipunek.Potega",
                "typ_ekwipunku.Typ"
            ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd odczytu przedmiotów.');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }
    }

    public function action_showItems() {

        $this -> showTable();

        App::getSmarty() -> assign('records', $this -> records);
        App::getSmarty() -> assign('item', $this -> item_name);
        App::getSmarty() -> assign('paging', $this -> form);

        App::getSmarty() -> display('showItems_view.tpl');
    }

    public function action_showItemsPart() {

        $this -> showTable();

        App::getSmarty() -> assign('records', $this -> records);
        App::getSmarty() -> assign('item', $this -> item_name);
        App::getSmarty() -> assign('paging', $this -> form);

        App::getSmarty() -> display('showItemsPart_view.tpl');
    }
}