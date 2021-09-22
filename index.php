<?php
require "settings/init.php";

$musikinfo = $db->sql("SELECT * FROM information WHERE musikID=1");

foreach ($musikinfo as $musik){
    echo $musik->musikAlbumTracklist . " - " . $musik->musikArtist . "<br>";
}