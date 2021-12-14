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
  <title>codeX</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico">

  <!-- Bootstrap CSS and Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

  <!-- External CSS -->
  <link href="../../css/forum.css" rel="stylesheet" />

  <!-- Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">

  <!-- Assets -->


</head>

<body>
    <!-- Top Nav Bar -->
    <?php
    // Paths
    $navbar_path = "../../index.php";
    $profile_path =  "profile.php";
    $settings_path =  "";
    $activity_path =  "";
    $logout_path = "../../database/logout.php";
    $redirect_path = "forum.php";
    $logo_path = "../../assets/logo2_white.png";

    // Check if the user is logged in
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        include '../../widgets/navbar_nologin.php';
    }
    else{
        include '../../widgets/navbar.php';
    }

    ?>

    <!-- Introduction -->
    <div class="about-section mt-5">
        <h1>Welcome to the CodeX Forum</h1>
        <div class="about-section mt-5">
        <h1>Welcome to the CodeX Forum</h1>
        <h2>Please Follow Our Rules and Regulations Listed Below :</h2>
        <p> 1. No Spam / Advertising / Self-promote in the forums <br> 2. Do not post copyright-infringing material
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
            $sql = "SELECT * FROM `categories`";
            $result = mysqli_query($link, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                // echo $row['category_id'];
                // echo $row['category_name'];
                $id = $row['category_id'];
                $cat = $row['category_name'];
                $desc = $row['category_description'];
                echo '<div class="col-md-4 my-2">
                      <div class="card" style="width: 18rem;">
                          <img src="https://source.unsplash.com/400x300/?' . $cat . ',programming"
                           class="card-img-top" alt="image for this category">
                          <div class="card-body">
                              <h5 class="card-title"><a href="hreadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                              <p class="card-text">' . substr($desc, 0, 90) . '... </p>
                              <a href="Threadlist.php?catid=' . $id . '" class="btn btn-primary">View Threads</a>
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
    $founders_path = "pages/footer/founders.php";
    $faqs_path = "";
    $contact_path = "";

    include '../../widgets/footer.php'

    ?>


    <!-- Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- External JavaScript-->
    <script src="js/index.js"></script>

    <!-- Forms -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>
