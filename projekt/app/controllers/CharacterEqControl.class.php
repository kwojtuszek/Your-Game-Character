<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\Utils;
use app\forms\EquipmentForm;
use app\transfer\CharacterTransfer;
use app\transfer\EquipmentTransfer;
use app\transfer\EditEquipmentTransfer;

class CharacterEqControl {
   
    private $form;
    private $records;
    private $character;
    private $character_id;
    private $character_name;
    private $condition;
    private $edit;
    private $con;
    private $sort;
    private $first_might;

    public function __construct() {

        $this -> form = new EquipmentForm();
    }

    public function getCharacter() {
        
        $this -> character = unserialize($_SESSION['character']);
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

    public function validate_sorting() {

        $this -> sort = ParamUtils::getFromRequest('sort');
        if(!isset($this -> sort)) {
            return false;
        }

        return !App::getMessages() -> isError();
    }

    public function validateAssign() {

        $this -> form -> chosen_id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
		
        $this -> getCharacter();

        return !App::getMessages() -> isError();
    }

    public function action_showHead() {

        $this -> getCharacter();
        $this -> getEqTypeID();
        $this -> validate_sorting();
        
        try {
            if ($this -> sort == 1) {
                $this -> records = App::getDB() -> select("ekwipunek", [
                    "idEkwipunek",
                    "Material",
                    "Nazwa",
                    "Potega",
                    "idTypu"
                ], [
                    "idTypu" => $this -> form -> head_id,

                    'ORDER' => [
                        "Material" => "DESC"
                    ]
                ]);
            } else if ($this -> sort == 2) {
                $this -> records = App::getDB() -> select("ekwipunek", [
                    "idEkwipunek",
                    "Material",
                    "Nazwa",
                    "Potega",
                    "idTypu"
                ], [
                    "idTypu" => $this -> form -> head_id,

                    'ORDER' => "Nazwa"
                ]);
            } else {
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
            }

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd odczytu Typu Ekwipunku (Hełm).');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }
        $this -> generateAdd_view();
    }
    
    public function action_assignHead() {

        if($this -> validateAssign()) {

            try {
                App::getDB()->insert("zapisane_postacie_has_ekwipunek", [
                    "idEkwipunku" => $this -> form -> chosen_id,
                    "idPostaci" => $this -> character -> id,                
                    "Data_Zalozenia" => date("Y-m-d H:i:s")
                ]);
                $this -> form -> head_might = App::getDB() -> get("ekwipunek", "Potega", [
                    "idEkwipunek" => $this -> form -> chosen_id
                ]);
                App::getDB() -> update("zapisane_postacie", [
                    "Potega" => $this -> form -> head_might 
                    ], [
                    "idZapisane_Postacie" => $this -> character -> id
                ]);
            } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd przypisania Ekwipunku (Hełm).');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
                }
            }

            App::getRouter()->redirectTo('showShoulders');
        }
        $this -> generateAdd_view();
    }

    public function action_showShoulders() {

        $this -> getCharacter();
        $this -> getEqTypeID();
        $this -> validate_sorting();
        
        try {
            if ($this -> sort == 1) {
                $this -> records = App::getDB() -> select("ekwipunek", [
                    "idEkwipunek",
                    "Material",
                    "Nazwa",
                    "Potega",
                    "idTypu"
                ], [
                    "idTypu" => $this -> form -> shoulders_id,

                    'ORDER' => [
                        "Material" => "DESC"
                    ]
                ]);
            } else if ($this -> sort == 2) {
                $this -> records = App::getDB() -> select("ekwipunek", [
                    "idEkwipunek",
                    "Material",
                    "Nazwa",
                    "Potega",
                    "idTypu"
                ], [
                    "idTypu" => $this -> form -> shoulders_id,

                    'ORDER' => "Nazwa"
                ]);
            } else {
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
            }

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd odczytu Typu Ekwipunku (Naramienniki).');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }
        $this -> generateAdd_view();
    }
    
    public function action_assignShoulders() {

        if($this -> validateAssign()) {

            try {
                App::getDB()->insert("zapisane_postacie_has_ekwipunek", [
                    "idEkwipunku" => $this -> form -> chosen_id,
                    "idPostaci" => $this -> character -> id,                
                    "Data_Zalozenia" => date("Y-m-d H:i:s")
                ]);
                $this -> form -> shoulders_might = App::getDB() -> get("ekwipunek", "Potega", [
                    "idEkwipunek" => $this -> form -> chosen_id
                ]);
                $this -> first_might = App::getDB() -> get("zapisane_postacie", "Potega", [
                    "idZapisane_Postacie" => $this -> character -> id
                ]);

                $this -> first_might += $this -> form -> shoulders_might;

                App::getDB() -> update("zapisane_postacie", [
                    "Potega" => $this -> first_might 
                    ], [
                    "idZapisane_Postacie" => $this -> character -> id
                ]);
            } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd przypisania Ekwipunku (Naramienniki).');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
                }
            }
            App::getRouter()->redirectTo('showHands');
        }
        $this -> generateAdd_view();
    }

    public function action_showHands() {

        $this -> getCharacter();
        $this -> getEqTypeID();
        $this -> validate_sorting();
        
        try {
            if ($this -> sort == 1) {
                $this -> records = App::getDB() -> select("ekwipunek", [
                    "idEkwipunek",
                    "Material",
                    "Nazwa",
                    "Potega",
                    "idTypu"
                ], [
                    "idTypu" => $this -> form -> hands_id,

                    'ORDER' => [
                        "Material" => "DESC"
                    ]
                ]);
            } else if ($this -> sort == 2) {
                $this -> records = App::getDB() -> select("ekwipunek", [
                    "idEkwipunek",
                    "Material",
                    "Nazwa",
                    "Potega",
                    "idTypu"
                ], [
                    "idTypu" => $this -> form -> hands_id,

                    'ORDER' => "Nazwa"
                ]);
            } else {
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
            }

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd odczytu Typu Ekwipunku (Rękawice).');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }
        $this -> generateAdd_view();
    }
    
    public function action_assignHands() {

        if($this -> validateAssign()) {

            try {
                App::getDB()->insert("zapisane_postacie_has_ekwipunek", [
                    "idEkwipunku" => $this -> form -> chosen_id,
                    "idPostaci" => $this -> character -> id,                
                    "Data_Zalozenia" => date("Y-m-d H:i:s")
                ]);
                $this -> form -> hands_might = App::getDB() -> get("ekwipunek", "Potega", [
                    "idEkwipunek" => $this -> form -> chosen_id
                ]);
                $this -> first_might = App::getDB() -> get("zapisane_postacie", "Potega", [
                    "idZapisane_Postacie" => $this -> character -> id
                ]);

                $this -> first_might += $this -> form -> hands_might;

                App::getDB() -> update("zapisane_postacie", [
                    "Potega" => $this -> first_might 
                    ], [
                    "idZapisane_Postacie" => $this -> character -> id
                ]);
            } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd przypisania Ekwipunku (Rękawice).');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
                }
            }
            App::getRouter()->redirectTo('showChest');
        }
        $this -> generateAdd_view();
    }

    public function action_showChest() {

        $this -> getCharacter();
        $this -> getEqTypeID();
        $this -> validate_sorting();
        
        try {
            if ($this -> sort == 1) {
                $this -> records = App::getDB() -> select("ekwipunek", [
                    "idEkwipunek",
                    "Material",
                    "Nazwa",
                    "Potega",
                    "idTypu"
                ], [
                    "idTypu" => $this -> form -> chest_id,

                    'ORDER' => [
                        "Material" => "DESC"
                    ]
                ]);
            } else if ($this -> sort == 2) {
                $this -> records = App::getDB() -> select("ekwipunek", [
                    "idEkwipunek",
                    "Material",
                    "Nazwa",
                    "Potega",
                    "idTypu"
                ], [
                    "idTypu" => $this -> form -> chest_id,

                    'ORDER' => "Nazwa"
                ]);
            } else {
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
            }

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd odczytu Typu Ekwipunku (Napierśnik).');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }
        $this -> generateAdd_view();
    }
    
    public function action_assignChest() {

        if($this -> validateAssign()) {

            try {
                App::getDB()->insert("zapisane_postacie_has_ekwipunek", [
                    "idEkwipunku" => $this -> form -> chosen_id,
                    "idPostaci" => $this -> character -> id,                
                    "Data_Zalozenia" => date("Y-m-d H:i:s")
                ]);
                $this -> form -> chest_might = App::getDB() -> get("ekwipunek", "Potega", [
                    "idEkwipunek" => $this -> form -> chosen_id
                ]);
                $this -> first_might = App::getDB() -> get("zapisane_postacie", "Potega", [
                    "idZapisane_Postacie" => $this -> character -> id
                ]);

                $this -> first_might += $this -> form -> chest_might;

                App::getDB() -> update("zapisane_postacie", [
                    "Potega" => $this -> first_might 
                    ], [
                    "idZapisane_Postacie" => $this -> character -> id
                ]);
            } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd przypisania Ekwipunku (Napierśnik).');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
                }
            }
            App::getRouter()->redirectTo('showLegs');
        }
        $this -> generateAdd_view();
    }

    public function action_showLegs() {

        $this -> getCharacter();
        $this -> getEqTypeID();
        $this -> validate_sorting();
        
        try {
            if ($this -> sort == 1) {
                $this -> records = App::getDB() -> select("ekwipunek", [
                    "idEkwipunek",
                    "Material",
                    "Nazwa",
                    "Potega",
                    "idTypu"
                ], [
                    "idTypu" => $this -> form -> legs_id,

                    'ORDER' => [
                        "Material" => "DESC"
                    ]
                ]);
            } else if ($this -> sort == 2) {
                $this -> records = App::getDB() -> select("ekwipunek", [
                    "idEkwipunek",
                    "Material",
                    "Nazwa",
                    "Potega",
                    "idTypu"
                ], [
                    "idTypu" => $this -> form -> legs_id,

                    'ORDER' => "Nazwa"
                ]);
            } else {
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
            }

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd odczytu Typu Ekwipunku (Spodnie).');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }
        $this -> generateAdd_view();
    }
    
    public function action_assignLegs() {

        if($this -> validateAssign()) {

            try {
                App::getDB()->insert("zapisane_postacie_has_ekwipunek", [
                    "idEkwipunku" => $this -> form -> chosen_id,
                    "idPostaci" => $this -> character -> id,                
                    "Data_Zalozenia" => date("Y-m-d H:i:s")
                ]);
                $this -> form -> legs_might = App::getDB() -> get("ekwipunek", "Potega", [
                    "idEkwipunek" => $this -> form -> chosen_id
                ]);
                $this -> first_might = App::getDB() -> get("zapisane_postacie", "Potega", [
                    "idZapisane_Postacie" => $this -> character -> id
                ]);

                $this -> first_might += $this -> form -> legs_might;

                App::getDB() -> update("zapisane_postacie", [
                    "Potega" => $this -> first_might 
                    ], [
                    "idZapisane_Postacie" => $this -> character -> id
                ]);
            } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd przypisania Ekwipunku (Spodnie).');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
                }
            }
            App::getRouter()->redirectTo('showFeet');
        }
        $this -> generateAdd_view();
    }

    public function action_showFeet() {

        $this -> getCharacter();
        $this -> getEqTypeID();
        $this -> validate_sorting();
        
        try {
            if ($this -> sort == 1) {
                $this -> records = App::getDB() -> select("ekwipunek", [
                    "idEkwipunek",
                    "Material",
                    "Nazwa",
                    "Potega",
                    "idTypu"
                ], [
                    "idTypu" => $this -> form -> feet_id,

                    'ORDER' => [
                        "Material" => "DESC"
                    ]
                ]);
            } else if ($this -> sort == 2) {
                $this -> records = App::getDB() -> select("ekwipunek", [
                    "idEkwipunek",
                    "Material",
                    "Nazwa",
                    "Potega",
                    "idTypu"
                ], [
                    "idTypu" => $this -> form -> feet_id,

                    'ORDER' => "Nazwa"
                ]);
            } else {
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
            }

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd odczytu Typu Ekwipunku (Buty).');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }
        $this -> generateAdd_view();
    }
    
    public function action_assignFeet() {

        if($this -> validateAssign()) {

            try {
                App::getDB()->insert("zapisane_postacie_has_ekwipunek", [
                    "idEkwipunku" => $this -> form -> chosen_id,
                    "idPostaci" => $this -> character -> id,                
                    "Data_Zalozenia" => date("Y-m-d H:i:s")
                ]);
                $this -> form -> feet_might = App::getDB() -> get("ekwipunek", "Potega", [
                    "idEkwipunek" => $this -> form -> chosen_id
                ]);
                $this -> first_might = App::getDB() -> get("zapisane_postacie", "Potega", [
                    "idZapisane_Postacie" => $this -> character -> id
                ]);

                $this -> first_might += $this -> form -> feet_might;

                App::getDB() -> update("zapisane_postacie", [
                    "Potega" => $this -> first_might 
                    ], [
                    "idZapisane_Postacie" => $this -> character -> id
                ]);
            } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd przypisania Ekwipunku (Buty).');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
                }
            }
            App::getRouter()->redirectTo('showWeapon');
        }
        $this -> generateAdd_view();
    }

    public function action_showWeapon() {

        $this -> getCharacter();
        $this -> getEqTypeID();
        $this -> validate_sorting();
        
        try {
            if ($this -> sort == 1) {
                $this -> records = App::getDB() -> select("ekwipunek", [
                    "idEkwipunek",
                    "Material",
                    "Nazwa",
                    "Potega",
                    "idTypu"
                ], [
                    "idTypu" => $this -> form -> weapon_id,

                    'ORDER' => [
                        "Material" => "DESC"
                    ]
                ]);
            } else if ($this -> sort == 2) {
                $this -> records = App::getDB() -> select("ekwipunek", [
                    "idEkwipunek",
                    "Material",
                    "Nazwa",
                    "Potega",
                    "idTypu"
                ], [
                    "idTypu" => $this -> form -> weapon_id,

                    'ORDER' => "Nazwa"
                ]);
            } else {
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
            }

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd odczytu Typu Ekwipunku (Broń).');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }
        $this -> generateAdd_view();
    }
    
    public function action_assignWeapon() {

        if($this -> validateAssign()) {

            try {
                App::getDB()->insert("zapisane_postacie_has_ekwipunek", [
                    "idEkwipunku" => $this -> form -> chosen_id,
                    "idPostaci" => $this -> character -> id,                
                    "Data_Zalozenia" => date("Y-m-d H:i:s")
                ]);
                $this -> form -> weapon_might = App::getDB() -> get("ekwipunek", "Potega", [
                    "idEkwipunek" => $this -> form -> chosen_id
                ]);
                $this -> first_might = App::getDB() -> get("zapisane_postacie", "Potega", [
                    "idZapisane_Postacie" => $this -> character -> id
                ]);

                $this -> first_might = ($this -> first_might + $this -> form -> weapon_might)/7;

                App::getDB() -> update("zapisane_postacie", [
                    "Potega" => $this -> first_might 
                    ], [
                    "idZapisane_Postacie" => $this -> character -> id
                ]);
            } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd przypisania Ekwipunku (Broń).');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
                }
            }
            App::getRouter()->redirectTo('showCharacters');
        }
        $this -> generateAdd_view();
    }

    public function generateAdd_view() {

        App::getSmarty() -> assign('records', $this -> records);
        App::getSmarty() -> assign('character', $this -> character);
        App::getSmarty() -> assign('form', $this -> form);
        App::getSmarty() -> assign('first_might', $this -> first_might);

        App::getSmarty() -> display('assignCharacterEq_view.tpl');
    }
}