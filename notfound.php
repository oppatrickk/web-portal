<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Web Portal</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">

    <!-- External CSS -->
    <link href="css/index.css" rel="stylesheet" />

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Icons -->

    <!-- Fonts -->


    <!-- Assets -->


</head>

<body>
    <!-- Top Nav Bar-->
    <?php
    // Paths
    $navbar_path = "index.php";
    $logo_path = "assets/logo2.png";
    $login_path = "pages/login/login.php";

    include 'widgets/navbar_nologin.php'
    ?>

    <!-- Header -->
    <div style="text-align: center;" class="pt-5 mt-5">

        <img src="assets/img/404/img1.svg" style="height: 24rem;">
        <h1 class="mt-5">404 Page Not Found</h1>
        <p class="mt-3">Sorry, the page you're looking for doesn't exist.</p>

        <a class="btn btn-primary rounded-pill px-3 mt-4" href="index.php">
            Return Home
        </a>
        <span class="p-2"></span>
        <a class="btn btn-outline-danger rounded-pill px-3 mt-4" href="">
            Report Problem
        </a>

    </div>





    <!-- Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- External JavaScript-->
    <script src="js/index.js"></script>

    <!-- Forms -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>