<!DOCTYPE html>
<html lang="da" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Musik Database</title>
    <meta name="robots" content="All">
    <meta name="author" content="David Osbeck & Søren Andersen">
    <meta name="copyright" content="David Osbeck & Søren Andersen">
    <link href="css/styles.scss" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/hlgnu720dcrihycfqzdw381s3lo7v9n7snkn1j9t1yizavot/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
</head>
<body>
<section class="container">
<nav>
    <div class="d-flex justify-content-between my-3">
        <h2 class="">Music Database</h2>
        <a class="btn btn-primary text-white d-flex align-self-center" href="insert.php" role="button"><img src="" alt="">Back to home</a>
    </div>
</nav>

<!--Billede, titel og numre--!>

<div class="flex-column d-md-flex justify-content-evenly">
    <img src="img/Linkin_Park_Meteora_Album_Cover.svg" alt="Linkin Park Album cover Meteora">
    <div class="text-center">
        <h2>Numb</h2>
        <h5 class="text__h5__mod">Linkin Park</h5>
    </div>
</div>

<!-- Andre informationer om nummeret --!>

<div class="row my-4">
    <div class="col-6">
        <h5>Album:</h5>
        <h5>Release:</h5>
        <h5>Track length:</h5>
        <h5>Country:</h5>
        <h5>Genre/subgenre:</h5>
    </div>
    <div class="col-6">
        <h5 class="text__h5__mod">Meteora</h5>
        <h5 class="text__h5__mod">8 September, 2003</h5>
        <h5 class="text__h5__mod">03:06</h5>
        <h5 class="text__h5__mod">USA</h5>
        <h5 class="text__h5__mod">Nu metal, alternativ rock</h5>
    </div>
</div>

<!--Pris og link til amazon --!>

<div class="d-flex justify-content-center my-5">
    <h5 class="me-3 mb-0 d-flex align-self-center">$ 5.00</h5>
    <a class="btn btn-primary text-white d-flex align-self-center ms-3" href="insert.php" role="button"><img src="" alt="Amazon icon">Buy on Amazon</a>
</div>

<!-- Tracklist --!>

<div class="flex-column">
    <h2>Tracklist</h2>

</div>

</section>
<footer></footer>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
