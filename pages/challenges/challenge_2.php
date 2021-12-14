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
    <title>codeX | Challenge # 2</title>
    <link rel="icon" type="image/x-icon" href="../../../assets/favicon.ico">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="../../css/scroll.css" rel="stylesheet" />
    <link href="../../css/ide.css" rel="stylesheet" />

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
    $challenges_path = "challenges_dashboard.php";
    $forums_path = "../forum/forum.php";

    // Check if the user is logged in
    if(!isset($_SESSION['user_login'])){
        include '../../widgets/navbar_nologin.php';
    }
    else{
        include '../../widgets/navbar.php';
    }

    ?>

    <div class="">

        <!-- Row 1 -->
        <header class="masthead">
            <div class="container h-100 mt-1 mb-1">
                <div class="row h-100 align-items-center">
                    <div class="col-12 text-center mt-5">
                    </div>
                </div>
            </div>
        </header>

        <div>
            <div class="row">
                <div class="col main custom-scrollbar-css mb-5 pb-5" style="margin-left: 50px;">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1" style="margin-top:50px" >Hello, World!</h1>
                            <!-- Post meta content-->
                            <!-- Post categories-->
                            <p class="badge bg-secondary text-decoration-none link-light" href="#!">Easy</p>
                            <p class="badge bg-secondary text-decoration-none link-light" href="#!">Python</p>
                            <p class="badge bg-secondary text-decoration-none link-light" href="#!">Challenge</p>
                        </header>
                        <!-- Post content-->

                        <section class="mb-5">
                            <p class="fs-5">Here is a sample line of code that can be executed in Python:</p>
                            <div class="card">
                                <div class="card-body bg-light">
                                    <p>print("Hello, World!")</p>
                                </div>
                            </div>

                            <p class="fs-5 mt-3">You can just as easily store a string as a variable and then print it to stdout:</p>
                            <div class="card">
                                <div class="card-body bg-light">
                                    <p>my_string = "Hello, World!"</p>
                                    <p>print(my_string)</p>
                                </div>
                            </div>
                            <p class="fs-5 mt-4">The above code will print Hello, World! on your screen. Try it yourself in the editor below!</p>

                            <h5 class="fw-bolder mb-4 mt-4">Input Format</h5>
                            <p class="fs-5 mb-4">You do not need to read any input in this challenge.</p>

                            <h5 class="fw-bolder mb-4 mt-5">Output Format</h5>
                            <p class="fs-5 mb-4">Print <b>Hello, World!</b> to stdout.</p>

                            <h5 class="fw-bolder mb-4 mt-5">Sample Output 0</h5>
                            <div class="card">
                                <div class="card-body bg-light">
                                    <p>Hello, World!</p>
                                </div>
                            </div>
                            <div class="pb-5 mb-5">
                            </div>
                        </section>
                    </article>
                </div>
                <div class="col" style="margin-left: -12px;">
                    <div class="position-fixed mt-2">
                        <div class="control-panel">
                            Select Language:
                            &nbsp; &nbsp;
                            <select id="languages" class="languages" onchange="changeLanguage()" style="margin-right: 5px;">
                                <option value="python"> Python </option>
                                <option value="c"> C </option>
                                <option value="cpp"> C++ </option>
                                <option value="php"> PHP </option>
                                <option value="node"> Node JS </option>
                            </select>
                        </div>
                        <div class="editor" id="editor">print("")</div>
                        <div class="button-container">
                            <button class="btn" onclick="executeCode()"> Run </button>
                        </div>

                        <div class="output"></div>
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
<script src="../../js/lib/ace.js"></script>
    <script src="../../js/lib/theme-xcode.js"></script>
    <script src="../../js/ide_python.js"></script>

</body>
</html>