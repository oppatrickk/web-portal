<!-- PHP -->
<?php

include '../../database/config.php';

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

</head>

<body>
    <!-- Top Navigation Bar-->
    <?php
        // Paths
        $navbar_path = "../../index.php";
        $profile_path =  "../dashboard/profile.php";
        $settings_path =  "../dashboard/settings.php";
        $activity_path =  "../dashboard/activity.php";
        $logout_path = "../../database/logout.php";
        $redirect_path = "founders.php";
        $logo_path = "../../assets/logo2.png";
        $login_path = "../login/sign_in.php";
        $register_path = "../login/sign_up.php";
        $tutorials_path = "../tutorials/tutorial_dashboard.php";

        // Check if the user is logged in
        if(!isset($_SESSION['user_login'])){
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
            <div class="px-5 d-flex justify-content-center" id="opening">Everyone says it, but in our case it’s true: our team is the secret to our success. </div>
        </header>

        <!-- Founders -->
        <div class="row">
            <!-- Founder 1 | Ryan C. Clavo-->
            <div class="col">
                <div class="card m-5" style="width: auto;">
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col col-lg-2">
                                </div>
                                <div class="col-md-auto">
                                    <img src="../../assets/img/founders/clavo.jpg" class="rounded-circle center-block" style="width: 8rem; height: 8rem;">
                                    <h5 class="card-title mt-3">Ryan C. Clavo</h5>
                                </div>
                                <div class="col col-lg-2">
                                </div>
                            </div>
                        </div>
                        <p class="text-black-50 d-flex justify-content-center">Founder</p>
                        <p class="card-text d-flex justify-content-center mt-4">"The best way to predict the future, is to create it"</p>

                        <!-- Links -->
                        <div class=" d-flex justify-content-center">
                            <a href="https://www.facebook.com/ryanclavo96" style="text-decoration: none; color: dodgerblue " target="_blank"><i class="bi bi-facebook p-2 h3"></i></a>
                            <a href="https://github.com/ryy-clavo-317" style="text-decoration: none; color: black;" target="_blank"><i class="bi bi-github p-2 h3"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Founder 2 | Jhon Lorence T. Francisco-->
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
                        <h5 class="card-title mt-3 d-flex justify-content-center">Jhon Lorence T. Francisco</h5>
                        <h6 class="text-black-50 d-flex justify-content-center">Founder</h6>
                        <p class="card-text d-flex justify-content-center mt-4">"Experience is the name everyone gives to their mistakes."</p>

                        <!-- Links -->
                        <div class=" d-flex justify-content-center">
                            <a href="https://www.facebook.com/jhonlorence.francisco.9" style="text-decoration: none; color: dodgerblue " target="_blank"><i class="bi bi-facebook p-2 h3"></i></a>
                            <a href="https://github.com/xKurohNeko" style="text-decoration: none; color: black;" target="_blank"><i class="bi bi-github p-2 h3"></i></a>

                            </a>
                        </div>
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
                                    <img src="../../assets/img/founders/guiriba.jpg" class="rounded-circle center-block" style="width: 8rem; height: 8rem;">
                                </div>
                                <div class="col col-lg-2">
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mt-3 d-flex justify-content-center">Malven Guiriba</h5>
                        <h6 class="text-black-50 d-flex justify-content-center">Founder</h6>
                        <p class="card-text d-flex justify-content-center mt-4"> ⠀</p>

                        <!-- Links -->
                        <div class=" d-flex justify-content-center">
                            <a href="https://www.facebook.com/boy.guiriba.1" style="text-decoration: none; color: dodgerblue " target="_blank"><i class="bi bi-facebook p-2 h3"></i></a>
                            <a href="https://github.com/MalvenGuiriba" style="text-decoration: none; color: black;" target="_blank"><i class="bi bi-github p-2 h3"></i></a>

                            </a>
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
                                    <img src="../../assets/img/founders/jasareno.jpg" class="rounded-circle center-block" style="width: 8rem; height: 8rem;">
                                </div>
                                <div class="col col-lg-2">
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mt-3 d-flex justify-content-center">John Joseph P. Jasareno</h5>
                        <h6 class="text-black-50 d-flex justify-content-center">Founder</h6>
                        <p class="card-text d-flex justify-content-center mt-4">"If you don't have a competitive advantage, don't compete"</p>

                        <!-- Links -->
                        <div class=" d-flex justify-content-center">
                            <a href="https://www.facebook.com/josef.jasareno" style="text-decoration: none; color: dodgerblue " target="_blank"><i class="bi bi-facebook p-2 h3"></i></a>
                            <a href="https://github.com/" style="text-decoration: none; color: black;" target="_blank"><i class="bi bi-github p-2 h3"></i></a>

                            </a>
                        </div>
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
                                    <img src="../../assets/img/founders/prieto.jpg" class="rounded-circle center-block" style="width: 8rem; height: 8rem;">
                                </div>
                                <div class="col col-lg-2">
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mt-3 d-flex justify-content-center">John Patrick M. Prieto</h5>
                        <h6 class="text-black-50 d-flex justify-content-center">Founder</h6>
                        <p class="card-text d-flex justify-content-center mt-4">404: "Quote Not Found"</p>

                        <!-- Links -->
                        <div class=" d-flex justify-content-center">
                            <a href="https://www.facebook.com/prietopat" style="text-decoration: none; color: dodgerblue " target="_blank"><i class="bi bi-facebook p-2 h3"></i></a>
                            <a href="https://github.com/oppatrickk" style="text-decoration: none; color: black;" target="_blank"><i class="bi bi-github p-2 h3"></i></a>

                            </a>
                        </div>
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
                                    <img src="../../assets/img/founders/raro.jpeg" class="rounded-circle center-block" style="width: 8rem; height: 8rem;">
                                </div>
                                <div class="col col-lg-2">
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mt-3 d-flex justify-content-center">John Mynard Raro</h5>
                        <h6 class="text-black-50 d-flex justify-content-center">Founder</h6>
                        <p class="card-text d-flex justify-content-center mt-4" style="font-size: 14px ">"The difference between ordinary and extraordinary is that little extra."</p>

                        <!-- Links -->
                        <div class=" d-flex justify-content-center">
                            <a href="https://www.facebook.com/CaliBur01" style="text-decoration: none; color: dodgerblue " target="_blank"><i class="bi bi-facebook p-2 h3"></i></a>
                            <a href="https://github.com/Terentado" style="text-decoration: none; color: black;" target="_blank"><i class="bi bi-github p-2 h3"></i></a>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!-- Footer-->
    <?php
        // Paths
        $c_path = "../tutorials/c/c_dashboard.php";
        $html_path = "../tutorials/html/html_dashboard.php";
        $css_path = "../tutorials/tutorial_dashboard";
        $python_path = "../tutorials/python/python_dashboard.php";

        $founders_path = "founders.php";
        $logo_path = "../../assets/logo2_white.png";
        $report_path = "report.php";

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
