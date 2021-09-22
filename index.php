<?php
require "settings/init.php";
/*
$information = $db->sql("SELECT * FROM information");
*/
if(!empty($_GET["type"])) {
    if($_GET["type"] == "slet") {
        $id = $_GET["id"];

        $db->sql("DELETE FROM information WHERE musikId = :musikId", [":musikId"=>$id], false);

        header("location: index.php");

    }
}

$information = $db->sql("SELECT * FROM information");
    ?>

    <!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Musik Database</title>
    <meta name="robots" content="All">
    <meta name="author" content="David Osbeck & Søren Andersen">
    <meta name="copyright" content="David Osbeck & Søren Andersen">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.scss" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/hlgnu720dcrihycfqzdw381s3lo7v9n7snkn1j9t1yizavot/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
</head>

<body
<?php
foreach ($information as $info) {
    ?>
    <div class="row">
        <div class="col-4">
            <?php
            echo $info->musikTitel;
            ?>
        </div>
        <div class="col-4">
            <?php
            echo $info->musikTime;
            ?>
        </div>
        <div class="col-4">
            <a href="index.php?type=slet&id=<?php echo $info->musikId; ?>">Slet</a>
        </div>
    </div>
    <?php
}
?>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>