<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'),true);

header ('content-type: aapplication/json; charset=utf-8');

if(isset($data["password"]) && $data["password"] == "Musicdatabase") {
    $sql = "SELECT * FROM information WHERE 1=1 ORDER BY musikId DESC";
    $bind = [];

    if(!empty($data["nameSearch"])) {
        $sql .= "AND musikTitel = musikTitel";
        $bind[":musikTitel"] = $data["nameSearch"];
    }

    if(!empty($data["nameSearch"])) {
        $sql .= "AND musikArtist = musikArtist";
        $bind[":musikArtist"] = $data["nameSearch"];
    }

    if(!empty($data["nameSearch"])) {
        $sql .= "AND musikAlbum = musikAlbum";
        $bind[":musikAlbum"] = $data["nameSearch"];
    }

    $information = $db->sql($sql,$bind);
    header ("HTTP/1.1 200 Access");
    echo json_encode($information);

} else {
    header ("HTTP/1.1 401 Access denied");
    $error["errorMessage"] = "Wrong password. Please try again";
    echo json_encode($error);
}
?>