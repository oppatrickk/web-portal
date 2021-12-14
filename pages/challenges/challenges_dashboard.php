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
                <h1 class="card-title mb-4">Challenges</h1>

                <!-- Row 1-->
                <div class="row">
                    <div class="col">
                        <!-- C Tutorial -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h2 class="card-title h4 fw-bold">"Hello, World!" in C</h2>
                                <p class="card-text mb-4" style="font-size: 12px; color: grey;">C Programming Language</p>
                                <a class="btn btn-primary" href="challenge_1.php">Solve</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <!-- C Tutorial -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h2 class="card-title h4 fw-bold">Say "Hello, World!" With Python</h2>
                                <p class="card-text mb-4" style="font-size: 12px; color: grey;">Python</p>
                                <a class="btn btn-primary" href="challenge_2.php">Solve</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row 2-->
                <div class="row">
                    <div class="col">
                        <!-- C Tutorial -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h2 class="card-title h4 fw-bold">Conditional Statements</h2>
                                <p class="card-text mb-4" style="font-size: 12px; color: grey;">C Programming Language</p>
                                <a class="btn btn-primary disabled" href="challenge_1.php">To Be Added</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <!-- C Tutorial -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h2 class="card-title h4 fw-bold">If-Else Statement</h2>
                                <p class="card-text mb-4" style="font-size: 12px; color: grey;">Python</p>
                                <a class="btn btn-primary disabled" href="challenge_1.php">To Be Added</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row 3-->
                <div class="row">
                    <div class="col">
                        <!-- C Tutorial -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h2 class="card-title h4 fw-bold">Functions</h2>
                                <p class="card-text mb-4" style="font-size: 12px; color: grey;">C Programming Language</p>
                                <a class="btn btn-primary disabled" href="challenge_1.php">To Be Added</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <!-- C Tutorial -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h2 class="card-title h4 fw-bold">Arithmetic Operations</h2>
                                <p class="card-text mb-4" style="font-size: 12px; color: grey;">Python</p>
                                <a class="btn btn-primary disabled" href="challenge_1.php">To Be Added</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col">
                        <!-- C Tutorial -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h2 class="card-title h4 fw-bold">Pointers</h2>
                                <p class="card-text mb-4" style="font-size: 12px; color: grey;">C Programming Language</p>
                                <a class="btn btn-primary disabled" href="challenge_1.php">To Be Added</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <!-- C Tutorial -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h2 class="card-title h4 fw-bold">Loops</h2>
                                <p class="card-text mb-4" style="font-size: 12px; color: grey;">Python</p>
                                <a class="btn btn-primary disabled" href="challenge_1.php">To Be Added</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
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