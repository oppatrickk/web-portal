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
    <title>codeX | Forums</title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="../../css/forum.css" rel="stylesheet"/>

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Forum API -->
    <script src="https://cdn.tiny.cloud/1/7pqbld893t2g9d1ul8wrmm34bu7vb89xc2p28iqfh4vw5e8s/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#desc',
            plugins: 'autoresize',

        });
    </script>


</head>

<body>
    <!-- Top Nav Bar -->
    <?php
    // Paths
    $navbar_path = "../dashboard/dashboard.php";
    $logout_path = "../../database/logout.php";
    $login_path = "../login/sign_in.php";
    $register_path = "../login/sign_up.php";
    $profile_path = "../dashboard/profile.php";
    $logo_path = "../../assets/logo2.png";
    $settings_path = "../dashboard/settings.php";
    $activity_path = "../dashboard/activity.php";


    // Check if the user is logged in
    if(!isset($_SESSION['user_login'])){
        include '../../widgets/navbar_nologin.php';
    }
    else{
        include '../../widgets/navbar.php';
        include '../../widgets/verify.php';
    }

    ?>

    <div class="main custom-scrollbar-css">
    <!-- Introduction -->
    <div class="about-section">
        <div class="about-section">
        <h1 class="fw-bold">Welcome to the codeX Forum</h1>
        <h4 class="mt-5">Please Follow Our Rules and Regulations:</h4>
        <p class="d-inline flex justify-content-center" style="font-size: 14px;"> 1. No Spam / Advertising / Self-promote in the forums <br> 2. Do not post copyright-infringing material
        <br> 3. Do not post “offensive” posts, links or images <br> 4.  Do not cross post questions <br> 5.Do not PM users asking for help
        <br> 6. Remain respectful of other members at all times
            </p>
    </div>
    </div>

    <!-- Category container starts here -->
    <div class="container my-4" id="ques">
        <h2 class="text-center my-4 mt-5">CodeX Forum Categories</h2>
        <div class="row my-4">

            <!-- Fetch all the categories and use a loop to iterate through categories -->
            <?php
            $sql = "SELECT * FROM `forum_categories`";
            $result = $db->query($sql);
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

                $id = $row['category_id'];
                $cat = $row['category_name'];
                $desc = $row['category_description'];
                echo '<div class="col-md-4 my-2">
                      <div class="card" style="width: 18rem;">
                          <img src="../../assets/img/forum/' . $cat . '.jpg"
                           class="card-img-top" alt="image for this category">
                          <div class="card-body">
                              
                              <p class="card-text" style=" font-size: 12px;">' . substr($desc, 0, 90) . ' </p>
                              <a href="threadlist.php?catid=' . $id . '" class="btn btn-primary mt-3">View Threads</a>
                          </div>
                      </div>
                    </div>';
            }
            ?>

        </div>
    </div>

    <!-- Footer -->
    <?php
    // Paths
    $about_path = "";
    $founders_path = "../footer/founders.php";
    $faqs_path = "";
    $contact_path = "";
    $report_path = "../footer/report.php";
    $logo_path = "../../assets/logo2_white.png";


    include '../../widgets/footer.php'

    ?>
    </div>


    <!-- Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- External JavaScript-->
    <script src="../../js/scroll.js"></script>


</body>

</html>
