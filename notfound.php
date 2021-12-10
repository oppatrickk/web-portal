<!-- PHP -->
<?php
// Initialize the session
session_start();

// Include config file
require_once "database/config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Web Portal</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="css/scroll.css" rel="stylesheet" />

    <!-- Icons -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>

    <!-- Assets -->


</head>

<body>
    <!-- Top Nav Bar-->
    <?php
    // Paths
    $navbar_path = "index.php";
    $profile_path =  "pages/dashboard/profile.php";
    $settings_path =  "pages/dashboard/settings.php";
    $activity_path =  "";
    $logout_path = "database/logout.php";
    $login_path = "pages/login/login.php";
    $redirect_path = "pages/dashboard/dashboard.php";
    $logo_path = "assets/logo2.png";

    // Check if the user is logged in
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        include 'widgets/navbar_nologin.php';
    }
    else{
        include 'widgets/navbar.php';
    }

    ?>

    <div class="main custom-scrollbar-css">
        <!-- Header -->
        <div style="text-align: center;" class="pt-5 mt-5 pb-5">

            <img src="assets/img/404/img1.svg" style="height: 24rem;">
            <h1 class="mt-5">404 Page Not Found</h1>
            <p class="mt-3">Sorry, the page you're looking for doesn't exist.</p>

            <a class="btn btn-primary rounded-pill px-3 mt-4" href="index.php">
                Return Home
            </a>
            <span class="p-2"></span>
            <a class="btn btn-outline-danger rounded-pill px-3 mt-4" href="pages/footer/report.php">
                Report Problem
            </a>
        </div>
    </div>

    <!-- Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- External JavaScript-->
    <script src="js/notfound.js"></script>

</body>
</html>