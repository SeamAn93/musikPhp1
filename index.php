<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Front page</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.scss" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
          rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/hlgnu720dcrihycfqzdw381s3lo7v9n7snkn1j9t1yizavot/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div class="container mb-5">

    <nav>
        <div class="d-flex justify-content-between align-items-center my-3 my-xl-5">
            <a href="index.php" class="text-decoration-none"><h5 class="m-0 h5 nav__header">Music Database</h5></a>
            <a class="btn btn-primary text-white" href="insert.php" role="button"><i class="fas fa-plus-circle me-1 me-xl-2"></i>Add to database</a>
        </div>
    </nav>

    <div class="header pt-5 d-flex justify-content-center">
        <h1 class="title">Find your favorite song, album, or artist</h1>
    </div>

    <div class="products">
        <div class="filter mt-2 mb-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <label for="search"></label>
                    <input type="search" id="search" class="form-control nameSearch text-center fs-5" placeholder="Search songs, albums, artists...">
                </div>
            </div>
        </div>

        <h2 class="mb-1 pt-4">Ordered by A-Z</h2>

        <div class="items">
            <!-- Her vises produkterne -->
        </div>
    </div>

</div>

<?php include"includes/footer.php";?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="module">
    import Products from "./js/products.js";

    const products = new Products();
    products.init();
</script>
</body>
</html>
