<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "1"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 1){
    $DB_SERVER = "localhost";
    $DB_NAME = "musik";
    $DB_USER = "root";
    $DB_PASS = "";
}else{
    $DB_SERVER = "mysql109.unoeuro.com";
    $DB_NAME = "s_andersen_dk_db";
    $DB_USER = "s_andersen_dk";
    $DB_PASS = "fck141093";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);