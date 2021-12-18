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

$id = htmlspecialchars($_SESSION["id"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>codeX | <?php echo htmlspecialchars($_SESSION["username"]);?></title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="../../css/profile.css" rel="stylesheet"/>

    <!-- Icons -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>


    <!-- Assets -->


</head>

<body>
<!-- Top Navigation Bar -->
<?php
    // Paths
    $navbar_path = "dashboard.php";
    $logout_path = "../../database/logout.php";
    $profile_path = "profile.php";
    $settings_path = "settings.php";
    $activity_path = "activity.php";
    $tutorials_path = "../tutorials/tutorial_dashboard.php";
    $forums_path = "../forum/forum.php";
    $logo_path = "../../assets/logo2.png";

    include '../../widgets/navbar.php';

?>

<div class="main custom-scrollbar-css">

    <!-- Row 1 -->
    <header class="masthead">

        <div class="container mt-5 pt-5">
            <div class="row justify-content-md-center">
                <div class="col col-lg-2">

                </div>
                <div class="col-md-auto">
                    <?php
                    // Database
                    use google\appengine\api\cloud_storage\CloudStorageTools;

                    $bucket = 'codex-bu.appspot.com'; // your bucket name
                    $image = $_SESSION["profile_picture"];

                    $image_file = "gs://" . $bucket . "/" . $image;
                    $image_url = CloudStorageTools::getImageServingUrl($image_file);
                    ?>

                    <img src="<?php echo $image_url; ?>" style="height: 128px; width: 128px" class="rounded-circle" alt="" />
                </div>
                <div class="col col-lg-2">
                    <a class="btn" href="settings.php" style = "text-decoration: none">
                        <i class="bi bi-pencil-fill"></i>
                    </a>
                </div>

                <div class="col-12 text-center mt-2">
                    <h1><?php echo $_SESSION["first_name"] . " " . $_SESSION["last_name"]?></h1>
                    <p class="lead">@<?php echo htmlspecialchars($_SESSION["username"]);?></p>
                </div>
            </div>
        </div>
    </header>

    <!-- Badges -->
    <div class="container">

        <div class="container">
            <div class="row justify-content-md-center">
                <!-- Badges Text-->
                <div class="px-5">
                    <h1 class="mt-5 mb-4">Your Badges</h1>
                    <?php ?>
                    <p> You currently do not have any badges</p>
                </div>

                <!-- Card -->
                <div class="col col-lg-2 m-4">
                </div>
                <div class="col-md-auto">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="d-flex justify-content-center"><img src="../../assets/logo1.png" style="height: 64px; width: 64px;"></div>
                                    <h6 class="card-title d-flex justify-content-center fw-bolder">codeX</h6>
                                    <p class="card-text mt-4 d-flex justify-content-center">Introduction to C</p>
                                    <div class="d-flex justify-content-center"><hr style="width: 250px; height: 8px; color: blue;" class="d-flex justify-content-center"></div>
                                    <p class="card-text d-flex justify-content-center">PROGRAMMING LANGUAGE</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="d-flex justify-content-center"><img src="../../assets/logo1.png" style="height: 64px; width: 64px;"></div>
                                    <h6 class="card-title d-flex justify-content-center fw-bolder">codeX</h6>
                                    <p class="card-text mt-4 d-flex justify-content-center">Basics of HTML5</p>
                                    <div class="d-flex justify-content-center"><hr style="width: 250px; height: 8px; color: blue;" class="d-flex justify-content-center"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-2">
                </div>


                <!-- Card -->
                <div class="col col-lg-2 m-3">
                </div>
                <div class="col-md-auto">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="certificate_c.php" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-2">
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
<script src="../../js/profile.js"></script>

</body>
</html>