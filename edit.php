<?php
require "settings/init.php";
/*
$information = $db->sql("SELECT * FROM information");
*/
if(!empty($_GET["type"])) {
    if($_GET["type"] == "slet") {
        $id = $_GET["id"];

        $db->sql("DELETE FROM information WHERE musikId = :musikId", [":musikId"=>$id], false);

        header("location: edit.php");
    }
}

if(!empty($_GET["type"])) {
    if($_GET["type"] == "rediger") {
        $id = $_GET["id"];

        $db->sql("SELECT * FROM information WHERE musikId = :musikId", [":musikId"=>$musikId], $bind);

        header("location: edit-track.php");

    }
}

$information = $db->sql("SELECT * FROM information");
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Edit tracks</title>
    <meta name="robots" content="All">
    <meta name="author" content="David Osbeck & Søren Andersen">
    <meta name="copyright" content="David Osbeck & Søren Andersen">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/hlgnu720dcrihycfqzdw381s3lo7v9n7snkn1j9t1yizavot/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
</head>

<body>

<div class="container">

<nav>
    <div class="d-flex justify-content-between align-items-center my-3 my-xl-5">
        <a href="index.php" class="text-decoration-none"><h5 class="m-0 h5 nav__header">Music Database</h5></a>
        <a class="btn btn-primary text-white" href="index.php" role="button"><i class="fas fa-home me-1 me-xl-2"></i>Back to home</a>
    </div>
</nav>

    <div class="edit__list">
        <h2 class="header__title text-white mb-5 pt-4 fw-normal">Edit or remove from database</h2>
<?php
foreach ($information as $info) {
    ?>
    <div class="wrapper text-white d-flex">
        <div class="flex-column d-flex col-10 me-3 justify-content-center">
            <p class="fs-5"><?php
            echo $info->musikTitel;
            ?>
            </p>
            <p class="fs-6">
            <?php
            echo $info->musikArtist;
            ?>
            </p>
        </div>
        <div class="d-sm-flex justify-content-end col-2">
            <a class="d-flex align-items-center justify-content-center btn btn-lg btn-primary text-white my-2 me-2" href="edit-track.php?type=rediger&id=<?php echo $info->musikId; ?>"><i class="fas fa-pen me-lg-2"></i><span class="d-none d-lg-block">Edit</span></a>
            <a class="d-flex align-items-center justify-content-center btn btn-lg btn-primary text-white my-2 me-2 me-sm-3 deleteBtn" data-url="edit.php?type=slet&id=<?php echo $info->musikId; ?>"><i class="fas fa-trash me-lg-2"></i><span class="d-none d-lg-block">Remove</span></a>
        </div>
    </div>
    <?php
}
?>
    </div>
</div>

<div class="modal" tabindex="-1" id="deleteModal" data-en-hund="" data-to-kat="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <p class="text-body">Are you sure you want to remove this?</p>
            </div>
            <div class="modal-footer">
                <a href="index.php"><button type="button" class="btn btn-lg btn-cancel" data-bs-dismiss="modal" aria-label="Close">Cancel</button></a>
                <a href="" class="btn btn-lg btn-primary text-white modalConfirm">Confirm</a>
            </div>
        </div>
    </div>
</div>

<?php include"includes/footer.php";?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const deleteModalElem = document.querySelector('#deleteModal');
    const modalConfirm = deleteModalElem.querySelector('.modalConfirm');
    const deleteModal = new bootstrap.Modal(deleteModalElem);

    document.querySelectorAll('.deleteBtn').forEach(deleteBtn => deleteBtn.addEventListener('click', () => {
        modalConfirm.href = deleteBtn.dataset.url;
        deleteModal.show();
    }));

</script>
</body>
</html>