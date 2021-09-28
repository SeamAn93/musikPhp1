<?php
require "settings/init.php";

if(!empty($_POST["data"])){
    $data = $_POST["data"];
    $file = $_FILES;

    if(!empty($file["musikImg"]["tmp_name"])){
        move_uploaded_file($file["musikImg"]["tmp_name"], "uploads/" . basename($file["musikImg"]["name"]));
    }

    $sql = "INSERT INTO information (musikTitel, musikArtist, musikAlbum, musikGenre, musikOrigin, musikRelease, musikTime, musikBandInstrument, musikAlbumTracklist, musikBuy, musikPrice, musikImg) VALUES(:musikTitel, :musikArtist, :musikAlbum, :musikGenre, :musikOrigin, :musikRelease, :musikTime, :musikBandInstrument, :musikAlbumTracklist, :musikBuy, :musikPrice, :musikImg)";
    $bind = [":musikTitel" => $data["musikTitel"],
             ":musikArtist" => $data["musikArtist"],
             ":musikAlbum" => $data["musikAlbum"],
             ":musikGenre" => $data["musikGenre"],
             ":musikOrigin" => $data["musikOrigin"],
             ":musikRelease" => $data["musikRelease"],
             ":musikTime" => $data["musikTime"],
             ":musikBandInstrument" => $data["musikBandInstrument"],
             ":musikAlbumTracklist" => $data["musikAlbumTracklist"],
             ":musikBuy" => $data["musikBuy"],
             ":musikPrice" => (!empty($data["musikPrice"])) ? $data["musikPrice"] : NULL,
             ":musikImg" => (!empty($file["musikImg"]["tmp_name"])) ? $file["musikImg"]["name"] : NULL,
            ];

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
          rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/hlgnu720dcrihycfqzdw381s3lo7v9n7snkn1j9t1yizavot/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
</head>
<body>

<section class="main container">
    <nav>
        <div class="d-flex justify-content-between align-items-center my-3 my-xl-5">
            <a href="index.php" class="text-decoration-none"><h5 class="m-0 h5 nav__header">Music Database</h5></a>
            <a class="btn btn-primary text-white" href="index.php" role="button"><i class="fas fa-home me-1 me-xl-2"></i>Back to home</a>
        </div>
    </nav>

    <div class="header">
        <h2 class="header__title text-white mb-5 pt-4 fw-normal">Add a new song/artist/album...</h2>
    </div>

<form method="post" action="insert.php" enctype="multipart/form-data">
    <div class="row">
        <div class="col-12 col-md-6 mb-2">
            <div class=" mb-3 text-white">
                <label for="musikTitel" class="form-label fs-5">Title</label>
                    <input class="form-control fs-5" type="text" name="data[musikTitel]" id="musikTitel" placeholder="Title" value="" required>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-2">
            <div class="has-validation mb-3 text-white">
                <label for="musikArtist" class="form-label fs-5">Artist</label>
                <input class="form-control fs-5" type="text" name="data[musikArtist]" id="musikArtist" placeholder="Artist" value="" required>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-2">
            <div class="mb-3 text-white">
                <label for="musikAlbum" class="form-label fs-5">Album</label>
                <input class="form-control fs-5" type="text" name="data[musikAlbum]" id="musikAlbum" placeholder="Album" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 mb-4">
            <div class="mb-3 text-white">
                <label for="musikGenre" class="form-label fs-5">Genre / subgenre</label>
                <input class="form-control fs-5" type="text" name="data[musikGenre]" id="musikGenre" placeholder="Genre / subgenre" value="">
            </div>
        </div>

        <div class="col-12 col-md-4 mb-2">
            <div class="mb-3 text-white">
                <label for="musikOrigin" class="form-label fs-5">Origin</label>
                <input class="form-control fs-5" type="text" name="data[musikOrigin]" id="musikOrigin" placeholder="Origin" value="">
            </div>
        </div>


        <div class="col-4 mb-2">
            <div class="has-validation mb-3 text-white">
                <label for="musikRelease" class="form-label fs-5">Date of release</label>
                <input class="form-control fs-5" type="date" name="data[musikRelease]" id="musikRelease" placeholder="" value="" required>
            </div>
        </div>

        <div class="col-4 mb-4">
            <div class="has-validation mb-3 text-white">
                <label for="musikTime" class="form-label fs-5">Track length</label>
                <input class="form-control fs-5" type="time" name="data[musikTime]" id="musikTime" step="1" placeholder="00:00:00" value="00:00:00" min="00:00:00" required>
            </div>
        </div>

        <div class="col-6 mb-4">
            <div class="mb-3 text-white">
                <label for="musikImg" class="form-label fs-5">Upload album cover art</label>
                <input class="form-control fs-5" type="file" name="musikImg" id="musikImg" placeholder="" value="">
            </div>
        </div>

        <div class="col-12 mb-2">
            <div class="mb-3 text-white">
                <label for="musikBandInstrument" class="form-label fs-5">Band members / instruments</label>
                <textarea class="form-control fs-5" name="data[musikBandInstrument]" id="musikBandInstrument" placeholder="John doe - Guitar" style="height:200px;"></textarea>
            </div>
        </div>

        <div class="col-12 mb-4">
            <div class="mb-3 text-white">
                <label for="musikAlbumTracklist" class="form-label fs-5">Album tracklist</label>
                <textarea class="form-control fs-5" name="data[musikAlbumTracklist]" id="musikAlbumTracklist" placeholder="Track #1 - 00:00" style="height:200px;"></textarea>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-2">
            <div class="mb-3 text-white">
                <label for="musikBuy" class="form-label fs-5">Amazon product link</label>
                <input class="form-control fs-5" type="text" name="data[musikBuy]" id="musikBuy" placeholder="Amazon product link" value="">
            </div>
        </div>

        <div class="col-12 col-md-3 mb-2">
            <div class="mb-3 text-white">
                <label for="musikPrice" class="form-label fs-5">Price in dollars</label>
                <input class="form-control fs-5" type="number" step=".01" name="data[musikPrice]" id="musikPrice" placeholder="9.99" value="">
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
                    <p class="text-body">Your song/artist/album has been added, want to add another?</p>
                </div>
                <div class="modal-footer">
                    <a href="index.php"><button type="button" class="btn btn-lg btn-cancel">Back to home</button></a>
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
        menubar: false,
        cleanup_on_startup : true,
        fix_list_elements : false,
        fix_nesting : false,
        fix_table_elements : false,
        paste_use_dialog : true,
        paste_auto_cleanup_on_paste : true,
    });
</script>

<script>
    const confirmModal = document.querySelector('.modal');
    if(confirmModal){
        const bsModal = new bootstrap.Modal(confirmModal, {keyboard: false});
        bsModal.show();

        confirmModal.addEventListener('hide.bs.modal', () => {
            document.location = "index.php";
        })
    }

</script>
</body>
</html>
