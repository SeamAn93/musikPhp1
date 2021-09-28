<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Track</title>
    <meta name="robots" content="All">
    <meta name="author" content="David Osbeck & Søren Andersen">
    <meta name="copyright" content="David Osbeck & Søren Andersen">
    <link href="css/styles.scss" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
          rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/hlgnu720dcrihycfqzdw381s3lo7v9n7snkn1j9t1yizavot/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
</head>

<?php
require "settings/init.php";
$bind = [':musikId' => $_GET['musikId']];
$musikinfo = $db->sql("SELECT * FROM information WHERE musikID = :musikId", $bind);
$musikinfo = $musikinfo[0];

$dateFromDb = strtotime("$musikinfo->musikRelease"); //Din dato fra databasen
$date = date("j. F Y", $dateFromDb);

?>
<body>
<section class="container">
    <nav>
        <div class="d-flex justify-content-between align-items-center my-3 my-xl-5">
            <a href="index.php" class="text-decoration-none"><h5 class="m-0 h5 nav__header">Music Database</h5></a>
            <a class="btn btn-primary text-white" href="index.php" role="button"><i class="fas fa-home me-1 me-xl-2"></i>Back to home</a>
        </div>
    </nav>

    <!--Billede, titel og numre-->
<div class="info row">
    <div class="col-xl-7">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="uploads/<?php echo $musikinfo->musikImg; ?>" alt="Linkin Park Album cover Meteora" class="mt-5 mb-5 ms-md-0 me-xl-0">
            </div>
            <div class="text-center col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                <h2><?php echo $musikinfo->musikTitel; ?></h2>
                <h5 class="text__h5__mod"><?php echo $musikinfo->musikArtist; ?></h5>
            </div>
        </div>

        <!-- Andre informationer om nummeret -->

        <div class="row my-4">
            <div class="album__info col-6 col-md-5">
                <h5 class="text__h5__mod">Album:</h5>
                <h5 class="text__h5__mod">Release:</h5>
                <h5 class="text__h5__mod">Track length:</h5>
                <h5 class="text__h5__mod">Country:</h5>
                <h5 class="text__h5__mod">Genre/subgenre:</h5>
            </div>
            <div class="col-6 col-md-5">
                <h5 class="text__h5__mod"><?php echo $musikinfo->musikAlbum; ?></h5>
                <h5 class="text__h5__mod"><?php echo $date; ?></h5>
                <h5 class="text__h5__mod"><?php echo $musikinfo->musikTime; ?></h5>
                <h5 class="text__h5__mod"><?php echo $musikinfo->musikOrigin; ?></h5>
                <h5 class="text__h5__mod"><?php echo $musikinfo->musikGenre; ?></h5>
            </div>
        </div>

        <!--Pris og link til amazon -->

        <div class="buy d-flex justify-content-start my-5">
            <h5 class="me-3 mb-0 d-flex align-self-center"><?php echo "From $" . $musikinfo->musikPrice; ?></h5>
            <a class="btn btn-primary text-white d-flex align-items-center ms-3" href="<?php
            $musikinfo = $db->sql("SELECT * FROM information WHERE musikID=:musikId", $bind);
            foreach ($musikinfo as $musik) {
                echo $musik->musikBuy;
            } ?>" target="_blank" role="button"><i class="fab fa-amazon me-1 me-xl-2"></i>Buy on Amazon</a>
        </div>
    </div>
    <!-- Tracklist -->

    <div class="col-xl-5">
        <div class="flex-column mb-5">
            <h2>Tracklist</h2>
            <div class="line"></div>
            <div class="tracklist__items">
                <?php
                $musikinfo = $db->sql("SELECT * FROM information WHERE musikID=:musikId", $bind);
                foreach ($musikinfo as $musik) {
                    echo $musik->musikAlbumTracklist;
                }
                ?>
            </div>
        </div>
    </div>
</div>
    <div class="band pb-5">
        <h2>Band/instruments</h2>
        <div class="line"></div>
        <div class="band__items text-white fs-5">
            <?php
            $musikinfo = $db->sql("SELECT * FROM information WHERE musikID=:musikId", $bind);
            foreach ($musikinfo as $musik) {
                echo $musik->musikBandInstrument;
            }
            ?>
        </div>
    </div>
</section>

<footer class="pt-5 pb-3 mt-5">
    <div class="icon__container d-flex justify-content-center text-white">
        <a href="https://github.com/SeamAn93/musikPhp1" class="mb-4 text-white"><i class="fab fa-github fa-3x"></i></a>
    </div>

    <div class="d-flex justify-content-center">
        <div class="footer__nav d-flex text-center flex-column justify-content-center">
            <h2>Menu</h2>
            <div class="line"></div>
            <a class="text-decoration-none text-white fs-5 my-1" href="index.php">Home</a>
            <a class="text-decoration-none text-white fs-5 my-1" href="insert.php">Add to database</a>
        </div>

    </div>
    <p class="text-center text-white mt-5">© 2021 Music Database</p>

</footer>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
