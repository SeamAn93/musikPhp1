<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "0"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0){
    $DB_SERVER = "localhost";
    $DB_NAME = "musik";
    $DB_USER = "root";
    $DB_PASS = "";
}else{
    $DB_SERVER = "mysql74.unoeuro.com";
    $DB_NAME = "davidosbeck_dk_db";
    $DB_USER = "davidosbeck_dk";
    $DB_PASS = "gp26FAGteak9";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);