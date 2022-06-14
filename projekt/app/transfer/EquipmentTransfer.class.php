<?php

namespace app\transfer;

class EquipmentTransfer {
    
    public $head_id;
    public $head_might;
    public $shoulders_id;
    public $shoulders_might;
    public $hands_id;
    public $hands_might;
    public $chest_id;
    public $chest_might;
    public $legs_id;
    public $legs_might;
    public $feet_id;
    public $feet_might;
    public $weapon_id;
    public $weapon_might;
    public $chosen_id;

    public function __construct($head_id, $head_might, $shoulders_id, $shoulders_might, $hands_id, $hands_might, $chest_id, $chest_might, $legs_id, $legs_might, $feet_id, $feet_might, $weapon_id, $weapon_might, $chosen_id) {
        $this -> head_id = $head_id;
        $this -> head_might = $head_might;
        $this -> shoulders_id = $shoulders_id;
        $this -> shoulders_might = $shoulders_might;
        $this -> hands_id = $hands_id;
        $this -> hands_might = $hands_might;
        $this -> chest_id = $chest_id;
        $this -> chest_might = $chest_might;
        $this -> legs_id = $legs_id;
        $this -> legs_might = $legs_might;
        $this -> feet_id = $feet_id;
        $this -> feet_might = $feet_might;
        $this -> weapon_id = $weapon_id;
        $this -> weapon_might = $weapon_might;
        $this -> choosen_id = $chosen_id;
    }
}