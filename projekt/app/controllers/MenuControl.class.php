<?php

namespace app\controllers;

use core\App;
use app\controllers\LoginControl;
use app\transfer\UserTransfer;

class MenuControl {
    
    public function action_menu() {

        App::getSmarty()->assign('user', unserialize($_SESSION['user']));

        App::getSmarty()->display("menu.tpl"); 
    }   
}
