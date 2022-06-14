<?php

namespace app\transfer;

class CharacterTransfer {

    public $id;
    public $name;
    
    public function __construct($id, $name) {

        $this -> id = $id;
        $this -> name = $name;
    }
}