<!-- PHP -->
<?php

// Include config file
require_once "../../database/config.php";

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
    <title>codeX | Tutorials</title>
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


</head>

<body>

    <!-- Top Navigation Bar-->
    <?php
    // Paths
    $navbar_path = "../dashboard/dashboard.php";
    $logout_path = "../../database/logout.php";
    $login_path = "../login/sign_in.php";
    $register_path = "../login/sign_up.php";
    $profile_path = "../dashboard/profile.php";
    $settings_path = "../dashboard/settings.php";
    $activity_path = "../dashboard/activity.php";
    $challenges_path = "../challenges/challenges_dashboard.php";
    $forums_path = "../forum/forum.php";
    $logo_path = "../../assets/logo2.png";


    // Check if the user is logged in
    if(!isset($_SESSION['user_login'])){
        include '../../widgets/navbar_nologin.php';
    }
    else{
        include '../../widgets/navbar.php';
    }

    ?>

    <div class="main custom-scrollbar-css">
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
    <div class="container px-5">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-12 pb-5">
                <!-- Featured blog post-->
                <h1 class="card-title mb-4">Tutorials</h1>
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- C Tutorial -->
                        <div class="card mb-4">
                            <img class="card-img-top" src="../../assets/img/tutorials/cprogramming.png" alt="c" />
                            <div class="card-body">
                                <h2 class="card-title h4">C</h2>
                                <p class="card-text">A general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system.</p>
                                <a class="btn btn-primary" href="c/c_dashboard.php">Explore</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Python -->
                        <div class="card mb-4">
                            <img class="card-img-top" src="../../assets/img/tutorials/python/python.jpg" alt="python" />
                            <div class="card-body">
                                <h2 class="card-title h4">Python</h2>
                                <p class="card-text">An interpreted high-level general-purpose programming language. Its design philosophy emphasizes code readability with its use of significant indentation. </p>
                                <a class="btn btn-primary" href="#!">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!-- HTML -->
                        <div class="card mb-4">
                            <img class="card-img-top" src="../../assets/img/tutorials/html/html5.jpg" alt="..." />
                            <div class="card-body">
                                <h2 class="card-title h4">HTML5</h2>
                                <p class="card-text">The HyperText Markup Language is the standard markup language for documents designed to be displayed in a web browser.</p>
                                <a class="btn btn-primary" href="c_lecture1.php">Explore</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- CSS -->
                        <div class="card mb-4">
                            <img class="card-img-top" src="../../assets/img/tutorials/css/css3.jpg" alt="..." />
                            <div class="card-body">
                                <h2 class="card-title h4">CSS3</h2>
                                <p class="card-text">Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML.</p>
                                <a class="btn btn-primary disabled" href="#!">To be added</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-->

    <!-- Top Navigation Bar-->
    <?php
    // Paths
    $founders_path = "../footer/founders.php";
    $logo_path = "../../assets/logo2_white.png";
    $report_path = "../footer/report.php";

    include "../../widgets/footer.php"
    ?>

    </div>


<!-- Bootstrap JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- External JavaScript-->
<script src="../../js/scroll.js"></script>


<!-- Forms -->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>