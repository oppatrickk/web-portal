<!-- PHP -->
<?php

include '../../../database/config.php';

// Initialize the session
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>codeX | C</title>
    <link rel="icon" type="image/x-icon" href="../../../assets/favicon.ico">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="css/styles_index.css" rel="stylesheet" />

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Fonts -->

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body>

<!-- Top Navigation Bar-->
<?php
    // Paths
    $navbar_path = "../../../index.php";
    $profile_path =  "../../dashboard/profile.php";
    $settings_path =  "../../dashboard/settings.php";
    $activity_path =  "../../dashboard/activity.php";
    $logout_path = "../../../database/logout.php";
    $logo_path = "../../../assets/logo2.png";
    $login_path = "../../login/sign_in.php";
    $register_path = "../../login/sign_up.php";
    $tutorials_path = "../../tutorials/tutorial_dashboard.php";

    // Check if the user is logged in
    if(!isset($_SESSION['user_login'])){
        include '../../../widgets/navbar_nologin.php';
    }
    else{
        include '../../../widgets/navbar.php';
        include '../../../widgets/verify.php';
    }

?>

<!-- Sidebar -->


<!-- Row 1 -->
<header class="masthead">
    <div class="container h-100 mt-5 mb-1">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center mt-5">
            </div>
        </div>
    </div>
</header>

<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col pb-5">
            <h1 class="card-title mb-4">Welcome to C Language Tutorials!</h1>
            <!-- Row -->
            <div class="row">
                <div class="col">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-text h6 text-black-50">Lecture 0</h2>
                            <h2 class="card-title h2 mb-3 ">Overview of C Language</h2>
                            <a class="btn btn-primary" href="c_lecture0.php">Start</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row -->
            <div class="row">
                <div class="col">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-text h6 text-black-50">Lecture 1</h2>
                            <h2 class="card-title h2 mb-3 ">Fundamentals of C Language</h2>
                            <a class="btn btn-primary" href="c_lecture1.php">Start</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row -->
            <div class="row">
                <div class="col">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-text h6 text-black-50">Lecture 2</h2>
                            <h2 class="card-title h2 mb-3 ">Data Input and Output</h2>
                            <a class="btn btn-primary" href="c_lecture2.php">Start</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row -->
            <div class="row">
                <div class="col">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-text h6 text-black-50">Lecture 3</h2>
                            <h2 class="card-title h2 mb-3 ">Decision Making</h2>
                            <a class="btn btn-primary" href="c_lecture3.php">Start</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer-->
<?php
    // Paths
    $c_path = "c_dashboard.php";
    $html_path = "../html/html_dashboard.php";
    $css_path = "../tutorial_dashboard";
    $python_path = "../python/python_dashboard.php";

    $founders_path = "../../footer/founders.php";
    $logo_path = "../../../assets/logo2_white.png";
    $report_path = "../../footer/report.php";

    include '../../../widgets/footer.php'

?>

<!-- Bootstrap JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- External JavaScript-->
<script src="js/scripts_dashboard.js"></script>

</body>
</html>