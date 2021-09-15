<?php
require "settings/init.php";
if(!empty($_POST["data"])){
    $data = $_POST["data"];
    $sql = "INSERT INTO information (musikTitel, musikArtist, musikAlbum, musikGerne, musikOrigin, musikRelease, musikTime, musikBandInstrument, musikAlbumTracklist, musikBuy) VALUES(:musikTitel, :musikArtist, :musikAlbum, :musikGerne, :musikOrigin, :musikRelease, :musikTime, :musikBandInstrument, :musikAlbumTracklist, :musikBuy)";
    $bind = [":musikTitel" => $data["musikTitel"],":musikArtist" => $data["musikArtist"],":musikAlbum" => $data["musikAlbum"],":musikGerne" => $data["musikGerne"],":musikOrigin" => $data["musikOrigin"],":musikRelease" => $data["musikRelease"], ":musikTime" => $data["musikTime"],":musikBandInstrument" => $data["musikBandInstrument"],":musikAlbumTracklist" => $data["musikAlbumTracklist"],":musikBuy" => $data["musikBuy"]];
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
    <link href="css/styles.scss" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/hlgnu720dcrihycfqzdw381s3lo7v9n7snkn1j9t1yizavot/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
</head>
<body class="bg-background">

<section class="main container">
    <div class="header d-flex justify-content-between mt-5 mb-4 mb-md-5 text-white">
        <h1 class="header-title">Music Database</h1>
        <button class="btn btn-primær text-white btn-lg"><i class="fas fa-home"></i> Back to home</button>
    </div>

    <div class="header">
        <h2 class="header__title text-white mb-5 pt-4 fw-normal">Add a new song/artist/album...</h2>
    </div>

<form method="post" action="insert.php">
    <div class="row">
        <div class="col-12 col-md-6 mb-2">
            <div class="mb-3 text-white">
                <label for="musikTitel" class="form-label fs-5">Title</label>
                <input class="form-control" type="text" name="data[musikTitel]" id="musikTitel" placeholder="Title" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 mb-2">
            <div class="mb-3 text-white">
                <label for="musikArtist" class="form-label fs-5">Artist</label>
                <input class="form-control" type="text" name="data[musikArtist]" id="musikArtist" placeholder="Artist" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 mb-2">
            <div class="mb-3 text-white">
                <label for="musikAlbum" class="form-label fs-5">Album</label>
                <input class="form-control" type="text" name="data[musikAlbum]" id="musikAlbum" placeholder="Album" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 mb-2">
            <div class="mb-3 text-white">
                <label for="musikGenre" class="form-label fs-5">Genre / subgenre</label>
                <input class="form-control" type="text" name="data[musikGerne]" id="musikGenre" placeholder="Genre / subgenre" value="">
            </div>
        </div>

        <div class="col-12 col-md-4 mb-2">
            <div class="mb-3 text-white">
                <label for="musikOrigin" class="form-label fs-5">Where is the artist from?</label>
                <input class="form-control" type="text" name="data[musikOrigin]" id="musikOrigin" placeholder="Origin" value="">
            </div>
        </div>


        <div class="col-4 mb-2">
            <div class="mb-3 text-white">
                <label for="musikRelease" class="form-label fs-5">Date of release</label>
                <input class="form-control" type="date" name="data[musikRelease]" id="musikRelease" placeholder="" value="">
            </div>
        </div>

        <div class="col-4 mb-2">
            <div class="mb-3 text-white">
                <label for="musikTime" class="form-label fs-5">Track length</label>
                <input class="form-control" type="text" name="data[musikTime]" id="musikTime" placeholder="00.00" value="">
            </div>
        </div>

        <div class="col-12">
            <div class="mb-3 text-white">
                <label for="musikBandInstrument" class="form-label fs-5">Band members / instruments</label>
                <textarea class="form-control" name="data[musikBandInstrument]" id="musikBandInstrument"></textarea>
            </div>
        </div>

        <div class="col-12">
            <div class="mb-3 text-white">
                <label for="musikAlbumTracklist" class="form-label fs-5">Album tracklist</label>
                <textarea class="form-control" name="data[musikAlbumTracklist]" id="musikAlbumTracklist"></textarea>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-2">
            <div class="mb-3 text-white">
                <label for="musikBuy" class="form-label fs-5">Link to iTunes</label>
                <input class="form-control" type="text" name="data[musikBuy]" id="musikBuy" placeholder="Link to iTunes" value="">
            </div>
        </div>

        <div class="btn-container d-flex justify-content-center my-4">
            <a href="index.php"><button class="btn btn-cancel btn-lg text-white mx-3">Cancel</button></a>
            <button class="btn btn-primær btn-lg text-white mx-3" type="submit" id="btnSubmit">Confirm</i></button>
        </div>

</section>
<script>
    tinymce.init({
        selector: 'textarea',
    });
</script>
</body>
</html>
