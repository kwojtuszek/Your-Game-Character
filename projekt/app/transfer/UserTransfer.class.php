<?php

namespace app\transfer;

class UserTransfer {
    
    public $login;
    public $id;

    public function __construct($login, $id) {
        
        $this -> login = $login;
        $this -> id = $id;
    }
}