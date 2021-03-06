<!-- PHP -->
<?php

// Include config file
require_once "../../../database/config.php";

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
    <title>codeX | C Lecture 1</title>
    <link rel="icon" type="image/x-icon" href="../../../assets/favicon.ico">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="../../../css/lecture0.css" rel="stylesheet" />


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

<?php
// Paths
$navbar_path = "../../dashboard/dashboard.php";
$logout_path = "../../../database/logout.php";
$login_path = "../../login/sign_in.php";
$register_path = "../../login/sign_up.php";
$profile_path = "../../dashboard/profile.php";
$logo_path = "../../../assets/logo2.png";
$settings_path = "../../dashboard/settings.php";
$activity_path = "../../dashboard/activity.php";

// Check if the user is logged in
if(!isset($_SESSION['user_login'])){
    include '../../../widgets/navbar_nologin.php';
}
else{
    include '../../../widgets/navbar.php';
    include '../../../widgets/verify.php';
}

?>

<div class="main custom-scrollbar-css">
<!-- Row 1 -->
<header class="masthead">
    <div class="container h-100 mt-1 mb-1">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center mt-5">

            </div>
        </div>
    </div>
</header>


<!-- Page content-->
<div class="container mt-5 px-4">
    <div class="row">
        <div class="col">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">Fundamentals of C Language</h1>
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-2">
                            </div>
                            <div class="col-md-auto">
                                <p class="badge bg-secondary text-decoration-none link-light align-content-center" href="#!">C Programming</p>
                                <p class="badge bg-secondary text-decoration-none link-light" href="#!">Lecture 1</p>
                            </div>
                            <div class="col col-lg-2">
                            </div>
                        </div>
                        <div class="col-md-auto p-4 m-2">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#tokens" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Tokens</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#identifiers" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Identifiers</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#keywords" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Keywords</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#constants" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Constants</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#operators" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Operators</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#data_types" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Data Types</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#variables" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Variables</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#type_casting" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Type Casting</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Post meta content-->
                    <!-- Post categories-->

                </header>
                <!-- Post content-->



                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="tokens" role="tabpanel" aria-labelledby="pills-home-tab"><?php include 'lecture1/c_lectures-tokens.html';?></div>
                    <div class="tab-pane fade" id="identifiers" role="tabpanel" aria-labelledby="pills-profile-tab"><?php include 'lecture1/c_lectures-identifiers.html';?></div>
                    <div class="tab-pane fade" id="keywords" role="tabpanel" aria-labelledby="pills-profile-tab"><?php include 'lecture1/c_lectures-keywords.html';?></div>
                    <div class="tab-pane fade" id="constants" role="tabpanel" aria-labelledby="pills-profile-tab"><?php include 'lecture1/c_lectures-constants.html';?></div>
                    <div class="tab-pane fade" id="operators" role="tabpanel" aria-labelledby="pills-profile-tab"><?php include 'lecture1/c_lectures-operators.html';?></div>
                    <div class="tab-pane fade" id="data_types" role="tabpanel" aria-labelledby="pills-profile-tab"><?php include 'lecture1/c_lectures-data_types.html';?></div>
                    <div class="tab-pane fade" id="variables" role="tabpanel" aria-labelledby="pills-profile-tab"><?php include 'lecture1/c_lectures-variables.html';?></div>
                    <div class="tab-pane fade" id="type_casting" role="tabpanel" aria-labelledby="pills-profile-tab"><?php include 'lecture1/c_lectures-type_casting.html';?></div>
                </div>

            </article>
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
</div>

<!-- Bootstrap JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- External JavaScript-->

<script src="../../../js/scroll.js"></script>

</body>
</html>