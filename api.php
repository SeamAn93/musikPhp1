<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'),true);

header ('content-type: aapplication/json; charset=utf-8');

if(isset($data["password"]) && $data["password"] == "Musicdatabase") {
    $sql = "SELECT * FROM information WHERE 1=1";
    $bind = [];

    if(!empty($data["nameSearch"])) {
        $sql .= "And musikTitel = musikTitel";
        $bind[":musikTitel"] = $data["nameSearch"];
    }

    if(!empty($data["nameSearch"])) {
        $sql .= "And musikArtist = musikArtist";
        $bind[":musikArtist"] = $data["nameSearch"];
    }

    if(!empty($data["nameSearch"])) {
        $sql .= "And musikAlbum = musikAlbum";
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

<!-- Hvorfor skal der kode på, når siden skal bruges til at søge musik? Skal brugen så ikke have passwordet (Musicdatabase), for at søge musikken? --!>
<!-- Hvis inputet ikke kan findes i databasen, hvordan får man så en besked op med "No result" op? Skal den skrives ind under else eller hvordan? --!>
<!-- Hvordan for vi TinyMCE textarea til at omdanne alt text til det samme format (style)? --!>

<!DOCTYPE html>
<html lang="da">->
<head>
    <meta charset="utf-8">
    <title>Sigende titel</title>
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>



</body>
</html>
