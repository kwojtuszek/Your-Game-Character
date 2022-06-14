<?php

namespace app\transfer;

class EditEquipmentTransfer {

    public $condition;
    public $character_id;


    public function __construct($condition, $character_id) {

        $this -> condition = $condition;
        $this -> character_id = $character_id;
    }
}