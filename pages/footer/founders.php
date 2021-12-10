<!-- PHP -->
<?php
// Initialize the session
session_start();

// Include config file
require_once "../../database/config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>codeX | Founders</title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="../../css/founders.css" rel="stylesheet" />

    <!-- Icons -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>


    <!-- Assets -->


</head>

<body>
    <!-- Top Navigation Bar-->
    <?php
        // Paths
        $navbar_path = "../../index.php";
        $profile_path =  "profile.php";
        $settings_path =  "";
        $activity_path =  "";
        $logout_path = "../../database/logout.php";
        $redirect_path = "founders.php";
        $logo_path = "../../assets/logo2.png";
        $login_path = "../login/login.php";

        // Check if the user is logged in
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            include '../../widgets/navbar_nologin.php';
        }
        else{
            include '../../widgets/navbar.php';
        }

    ?>

    <div class="main custom-scrollbar-css">
        <!--Header-->
        <header class="page-header gradient pb-5 pt-5">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col col-lg-2">
                    </div>
                    <div class="col-md-auto">
                        <h1 class="fw-bold">MEET THE TEAM</h1>
                    </div>
                    <div class="col col-lg-2">
                    </div>
                </div>
            </div>
            <p class="px-5" id="opening">Everyone says it, but in our case it’s true: our team is the secret to our success. Each of member is amazing
                in their own right, but together we are what makes CodeX such a fun and rewarding piece of work. The CodeX
                team is a tight-knit, talented group with a shared vision of delivering a website that can give new and old
                programmers a place to hangout. <br> We’re very proud of the team we’ve built – there’s only five of us now
                but it still feels like it did when there were just a few of us. CodeX has always been a team defined by
                bringing together talented people with a shared vision and passion for helping us to be the best we can be
                for our clients. But that doesn’t mean CodeX is a cookie-cutter Team. WE at CodeX are unique individuals who
                are united by a set of core values that apply to everything we do within the team. </p>
        </header>

        <!-- Founders -->
        <div class="row">
            <!-- Founder 1 -->
            <div class="col">
                <div class="card m-5" style="width: auto;">
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col col-lg-2">
                                </div>
                                <div class="col-md-auto">
                                    <img src="../../assets/img/founders/prieto.jpg" class="rounded-circle center-block" style="width: 8rem; height: 8rem;">
                                </div>
                                <div class="col col-lg-2">
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mt-3">John Patrick M. Prieto</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Founder/Programmer</h6>
                        <p class="card-text">Quote</p>
                        <i class="bi bi-facebook"></i>
                    </div>
                </div>
            </div>

            <!-- Founder 2 -->
            <div class="col">
                <div class="card m-5" style="width: auto;">
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col col-lg-2">
                                </div>
                                <div class="col-md-auto">
                                    <img src="../../assets/img/founders/francisco.jpg" class="rounded-circle center-block" style="width: 8rem; height: 8rem;">
                                </div>
                                <div class="col col-lg-2">
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mt-3">Jhon Lorence T. Francisco</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Founder/Programmer</h6>
                        <p class="card-text">Quote</p>
                        <i class="bi bi-facebook"></i>
                    </div>
                </div>
            </div>

            <!-- Founder 3 -->
            <div class="col">
                <div class="card m-5" style="width: auto;">
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col col-lg-2">
                                </div>
                                <div class="col-md-auto">
                                    <img src="../../assets/img/founders/raro.jpeg" class="rounded-circle center-block" style="width: 8rem; height: 8rem;">
                                </div>
                                <div class="col col-lg-2">
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mt-3">John Mynard Raro</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Founder/Programmer</h6>
                        <p class="card-text">Quote</p>
                        <i class="bi bi-facebook"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Founder 4 -->
            <div class="col">
                <div class="card m-5" style="width: auto;">
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col col-lg-2">
                                </div>
                                <div class="col-md-auto">
                                    <img src="../../assets/img/founders/guiriba.jpg" class="rounded-circle center-block" style="width: 8rem; height: 8rem;">
                                </div>
                                <div class="col col-lg-2">
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mt-3">Malven Guiriba</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Founder/Programmer</h6>
                        <p class="card-text">Quote</p>
                        <i class="bi bi-facebook"></i>
                    </div>
                </div>
            </div>

            <!-- Founder 5 -->
            <div class="col">
                <div class="card m-5" style="width: auto;">
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col col-lg-2">
                                </div>
                                <div class="col-md-auto">
                                    <img src="../../assets/img/founders/founder.png" class="rounded-circle center-block" style="width: 8rem; height: 8rem;">
                                </div>
                                <div class="col col-lg-2">
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mt-3">John Patrick M. Prieto</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Founder/Programmer</h6>
                        <p class="card-text">Quote</p>
                        <i class="bi bi-facebook"></i>
                    </div>
                </div>
            </div>

            <!-- Founder 6 -->
            <div class="col">
                <div class="card m-5" style="width: auto;">
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col col-lg-2">
                                </div>
                                <div class="col-md-auto">
                                    <img src="../../assets/img/founders/founder.png" class="rounded-circle center-block" style="width: 8rem; height: 8rem;">
                                </div>
                                <div class="col col-lg-2">
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mt-3">John Patrick M. Prieto</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Founder/Programmer</h6>
                        <p class="card-text">Quote</p>
                        <i class="bi bi-facebook"></i>
                    </div>
                </div>
            </div>
        </div>


    <!-- Footer-->
    <?php
        // Paths
        $about_path = "";
        $founders_path = "pages/footer/founders.php";
        $faqs_path = "";
        $contact_path = "";

        include '../../widgets/footer.php'

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
