<?php
require "settings/init.php";

if(!empty($_POST["data"])){
    $data = $_POST["data"];
    $sql = "INSERT INTO information (musikTitel, musikArtist, musikAlbum, musikGerne, musikOrigin, musikRelease, musikTime, musikBandInstrument, musikAlbumTracklist, musikBuy) VALUES(:musikTitel, :musikArtist, :musikAlbum, :musikGerne, :musikOrigin, :musikRelease, :musikTime, :musikBandInstrument, :musikAlbumTracklist, :musikBuy)";
    $bind = [":musikTitel" => $data["musikTitel"],":musikArtist" => $data["musikArtist"],":musikAlbum" => $data["musikAlbum"],":musikGerne" => $data["musikGerne"],":musikOrigin" => $data["musikOrigin"],":musikRelease" => $data["musikRelease"], ":musikTime" => $data["musikTime"],":musikBandInstrument" => $data["musikBandInstrument"],":musikAlbumTracklist" => $data["musikAlbumTracklist"],":musikBuy" => $data["musikBuy"]];
    $db->sql($sql,$bind,false);

    header('Location: insert.php?insert');

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
<body>

<section class="main container">
    <div class="header d-flex justify-content-between mt-5 mb-4 mb-md-5 text-white">
        <h1 class="header-title">Music Database</h1>
        <button class="btn btn-primary text-white btn-lg"><i class="fas fa-home"></i> Back to home</button>
    </div>

    <div class="header">
        <h2 class="header__title text-white mb-5 pt-4 fw-normal">Add a new song/artist/album...</h2>
    </div>

<form method="post" action="insert.php">
    <div class="row">
        <div class="col-12 col-md-6 mb-2">
            <div class=" mb-3 text-white">
                <label for="musikTitel" class="form-label fs-5">Title</label>
                    <input class="form-control" type="text" name="data[musikTitel]" id="musikTitel" placeholder="Title" value="" required>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-2">
            <div class="has-validation mb-3 text-white">
                <label for="musikArtist" class="form-label fs-5">Artist</label>
                <input class="form-control" type="text" name="data[musikArtist]" id="musikArtist" placeholder="Artist" value="" required>
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
            <div class="has-validation mb-3 text-white">
                <label for="musikRelease" class="form-label fs-5">Date of release</label>
                <input class="form-control" type="date" name="data[musikRelease]" id="musikRelease" placeholder="" value="" required>
            </div>
        </div>

        <div class="col-4 mb-2">
            <div class="has-validation mb-3 text-white">
                <label for="musikTime" class="form-label fs-5">Track length</label>
                <input class="form-control" type="time" name="data[musikTime]" id="musikTime" step="1" placeholder="00:00:00" value="00:00:00" min="00:00:00" required>
            </div>
        </div>

        <div class="col-12">
            <div class="mb-3 text-white">
                <label for="musikBandInstrument" class="form-label fs-5">Band members / instruments</label>
                <textarea class="form-control" name="data[musikBandInstrument]" id="musikBandInstrument" placeholder="John doe - Guitar"></textarea>
            </div>
        </div>

        <div class="col-12">
            <div class="mb-3 text-white">
                <label for="musikAlbumTracklist" class="form-label fs-5">Album tracklist</label>
                <textarea class="form-control" name="data[musikAlbumTracklist]" id="musikAlbumTracklist" placeholder="Track #1 - 00:00"></textarea>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-2">
            <div class="mb-3 text-white">
                <label for="musikBuy" class="form-label fs-5">Amazon product link</label>
                <input class="form-control" type="text" name="data[musikBuy]" id="musikBuy" placeholder="Amazon product link" value="">
            </div>
        </div>

        <div class="col-12 col-md-2 mb-2">
            <div class="mb-3 text-white">
                <label for="musikPrice" class="form-label fs-5">Price</label>
                <input class="form-control" type="text" name="data[musikPrice]" id="musikPrice" placeholder="$" value="">
            </div>
        </div>

        <div class="btn-container d-flex justify-content-center my-4">
            <a href="index.php"><button class="btn btn-cancel btn-lg text-white mx-3">Cancel</button></a>
            <button class="btn btn-primary btn-lg text-white mx-3" type="submit" id="btnSubmit">Confirm</i></button>
        </div>

</section>

<?php
if(isset($_GET["insert"])){
    ?>
    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p>Your song/artist/album has been added, want to add another?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-cancel">Back to home</button>
                    <a href="insert.php" class="btn btn-lg btn-primary text-white">Confirm</a>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea',
    });


    const modal = document.querySelector('.modal');
    if(modal){
        const bsModal = new bootstrap.Modal(modal, {keyboard: false});
        bsModal.show();

        modal.addEventListener('hide.bs.modal', () => {
            document.location = "index.php";
        })
    }

</script>
</body>
</html>
