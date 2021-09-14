<?php
require "settings/init.php";
if(!empty($_POST["data"])){
    $data = $_POST["data"];
    $sql = "INSERT INTO produkter (prodNavn, prodBeskrivelse, prodPris) VALUES(:prodNavn, :prodBeskrivelse, :prodPris)";
    $bind = [":prodNavn" => $data["prodNavn"],":prodBeskrivelse" => $data["prodBeskrivelse"],":prodPris" => $data["prodPris"]];
    $db->sql($sql,$bind,false);
    echo "Produktet er nu indsat. <a href='insert.php'>Indsæt er produkt mere</a>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Musik Database</title>
    <meta name="robots" content="All">
    <meta name="author" content="David Osbeck & Søren Andersen">
    <meta name="copyright" content="David Osbeck & Søren Andersen">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/hlgnu720dcrihycfqzdw381s3lo7v9n7snkn1j9t1yizavot/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>



<script>
    tinymce.init({
        selector: 'textarea',
    });
</script>
</body>
</html>
