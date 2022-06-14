<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('menu');
App::getRouter()->setLoginRoute('login');

// Logowanie i Wylogowywanie
Utils::addRoute('login',       'LoginControl');
Utils::addRoute('logout', 'LoginControl', ['Admin', 'Moderator', 'Uzytkownik']);

// Rejestracja
Utils::addRoute('showRegister',       'RegisterControl');
Utils::addRoute('register',       'RegisterControl');

// Włączenie widoku odpowiedzialnego za menu
Utils::addRoute('menu', 'MenuControl', ['Admin', 'Moderator', 'Uzytkownik']);

// Włączenie widoku z formularzem dodawania postaci
Utils::addRoute('addCharacter', 'CharacterControl', ['Admin', 'Moderator', 'Uzytkownik']);
Utils::addRoute('addCharacterEquipment', 'EquipmentControl', ['Admin', 'Moderator', 'Uzytkownik']);

// Edycja Postaci
Utils::addRoute('showEditCharacter', "CharacterControl", ['Admin', 'Moderator', 'Uzytkownik']);
Utils::addRoute('editCharacter', "CharacterControl", ['Admin', 'Moderator', 'Uzytkownik']);

//Usuwanie Postaci
Utils::addRoute('deleteCharacter', "CharacterControl", ['Admin', 'Moderator', 'Uzytkownik']);

// Przypisywanie ekwipunku do postaci
Utils::addRoute('showHead', "CharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);
Utils::addRoute('assignHead', "CharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);

Utils::addRoute('showShoulders', "CharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);
Utils::addRoute('assignShoulders', "CharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);

Utils::addRoute('showHands', "CharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);
Utils::addRoute('assignHands', "CharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);

Utils::addRoute('showChest', "CharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);
Utils::addRoute('assignChest', "CharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);

Utils::addRoute('showLegs', "CharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);
Utils::addRoute('assignLegs', "CharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);

Utils::addRoute('showFeet', "CharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);
Utils::addRoute('assignFeet', "CharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);

Utils::addRoute('showWeapon', "CharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);
Utils::addRoute('assignWeapon', "CharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);

// Pokaż postacie użytkownika
Utils::addRoute('showCharacters', 'CharacterControl', ['Admin', 'Moderator', 'Uzytkownik']);

// Pokaż ekwipunek danej postaci
Utils::addRoute('showCharacterEquipment', 'EditCharacterEqControl', ['Admin', 'Moderator', 'Uzytkownik']);

// Edycja ekwipunku danej postaci
Utils::addRoute('showEditHead', "EditCharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);
Utils::addRoute('showEditShoulders', "EditCharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);
Utils::addRoute('showEditHands', "EditCharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);
Utils::addRoute('showEditChest', "EditCharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);
Utils::addRoute('showEditLegs', "EditCharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);
Utils::addRoute('showEditFeet', "EditCharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);
Utils::addRoute('showEditWeapon', "EditCharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);

Utils::addRoute('assignNew', "EditCharacterEqControl", ['Admin', 'Moderator', 'Uzytkownik']);

// Obliczanie potegi danej postaci
Utils::addRoute('calcMight', "CalcControl", ['Admin', 'Moderator', 'Uzytkownik']);

// Nadawanie roli uzytkownikowi
Utils::addRoute('showUsers', 'UserControl', ['Admin']);
Utils::addRoute('showChangeRole', 'UserControl', ['Admin']);
Utils::addRoute('changeRole', 'UserControl', ['Admin']);

// Opcje przedmiotów w bazie
Utils::addRoute('showItems', "ItemsControl", ['Admin', 'Moderator', 'Uzytkownik']);
Utils::addRoute('showItemsPart', "ItemsControl", ['Admin', 'Moderator', 'Uzytkownik']);


Utils::addRoute('showAddItem', "EditItemsControl", ['Admin', 'Moderator']);
Utils::addRoute('addItem', "EditItemsControl", ['Admin', 'Moderator']);

Utils::addRoute('showEditItem', "EditItemsControl", ['Admin', 'Moderator']);
Utils::addRoute('editItem', "EditItemsControl", ['Admin', 'Moderator']);

Utils::addRoute('calcEditMight', "CalcControl", ['Admin', 'Moderator']);