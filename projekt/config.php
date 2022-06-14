<?php
$conf -> debug = true; 

$conf -> server_name = 'localhost';   
$conf -> protocol = 'http://';           
$conf -> app_root = '/projekt/public'; 

$conf -> db_type = 'mysql';
$conf -> db_server = 'localhost';
$conf -> db_name = 'projektpostac';
$conf -> db_user = 'root';
$conf -> db_pass = '';
$conf -> db_charset = 'utf8';
$conf -> db_collation = 'utf8_polish_ci';

$conf -> db_port = '3306';
$conf -> db_option = [ PDO::ATTR_CASE => PDO::CASE_NATURAL, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];