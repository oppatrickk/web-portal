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


    <!-- Assets -->


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
        <div class="col-lg-8 pb-5">
            <!-- Featured blog post-->
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="../../../assets/img/tutorials/cprogramming.png" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">Dennis Ritchie | 1972</div>
                    <h2 class="card-title">C Computer programming language</h2>
                    <p class="card-text">C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system. By design, C provides constructs that map efficiently to typical machine instructions.</p>
                    <a class="btn btn-primary" href="#!">Read more →</a>
                </div>
            </div>
            <!-- Row -->
            <div class="row">
                <!-- Progress bar -->
                <div class="col-lg-1">
                    <div class="col-lg-1 mt-4">
                        <span class="material-icons">radio_button_unchecked</span>
                    </div>
                </div>
                <div class="col-lg-11">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <div class="card-body">
                            <p class="card-title">Lecture 0</p>
                            <h2 class="card-title h2 ">Prerequisites</h2>
                            <p class="card-text">In this lecture, you will learn how to setup</p>
                            <a class="btn btn-primary" href="c_lecture0.php">Begin</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row -->
            <div class="row">
                <!-- Progress bar -->
                <div class="col-lg-1">
                    <div class="col-lg-2 mt-4">
                        <span class="material-icons">radio_button_unchecked</span>
                    </div>
                </div>
                <div class="col-lg-11">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title h4">Lecture 1</h2>
                            <p class="card-text">Hello World!</p>
                            <a class="btn btn-primary disabled" href="#!">Begin</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row -->
            <div class="row">
                <!-- Progress bar -->
                <div class="col-lg-1 mt-4">
                    <span class="material-icons">radio_button_unchecked</span>
                </div>
                <div class="col-lg-11">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title h4">Lecture 2</h2>
                            <p class="card-text">Data Types</p>
                            <a class="btn btn-primary disabled" href="#!">Begin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Other Tutorials</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">C</a></li>
                                <li><a href="#!">Python</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">HTML</a></li>
                                <li><a href="#!">CSS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
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

<!-- Forms -->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>