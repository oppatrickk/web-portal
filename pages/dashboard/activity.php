<!-- PHP -->
<?php

include '../../database/config.php';

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["user_login"]) || $_SESSION["user_login"] !== true){
    header("location: ../../index.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>codeX | Activity Log</title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="../../css/scroll.css" rel="stylesheet" />

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
$navbar_path = "../../index.php";
$logo_path = "../../assets/logo2.png";
$login_path = "../login/login.php";
$profile_path = "profile.php";
$settings_path = "settings.php";
$activity_path = "activity.php";
$logout_path = "../../database/logout.php";

include '../../widgets/navbar.php'
?>

<div class="main custom-scrollbar-css">

    <!-- Header -->
    <div style="text-align: center;" class="pt-5 mt-5 pb-5">

        <img src="../../assets/img/construct.svg" style="height: 24rem;">
        <h1 class="mt-5">Page Under Construction</h1>
        <p class="mt-3">Sorry, this page is still under development</p>

        <a class="btn btn-primary rounded-pill px-3 mt-4" href="../../index.php">
            Return Home
        </a>
        <span class="p-2"></span>
        <a class="btn btn-outline-danger rounded-pill px-3 mt-4" href="../footer/report.php">
            Report Problem
        </a>
    </div>

</div>



<!-- Bootstrap JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- External JavaScript-->
<script src="../../js/scroll.js"></script>


</body>
</html>