<!-- PHP -->
<?php

include '../../database/config.php';

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login/login.php");
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
    <title>codeX | Dashboard</title>
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
                    $query = $link->query("SELECT * FROM images where `username` = '$id'");

                    // Cloud Image Storage
                    use google\appengine\api\cloud_storage\CloudStorageTools;

                    $bucket = 'codex-bu.appspot.com'; // your bucket name

                    $root_path = 'gs://' . $bucket . '/';
                    $_url = '';
                    if(isset($_POST['submit']))
                    {
                        if(isset($_FILES['userfile']))
                        {
                            $name = $_FILES['userfile']['name'];
                            $file_size =$_FILES['userfile']['size'];
                            $file_tmp =$_FILES['userfile']['tmp_name'];
                            $original = $root_path .$name;
                            move_uploaded_file($file_tmp, $original);
                            $_url=CloudStorageTools::getImageServingUrl($original);
                        }
                    }

                    // Get image from the database
                    if($query->num_rows > 0){
                        if($row = $query->fetch_assoc()){

                            $options = ['size' => 400, 'crop' => true];
                            $image_file = 'gs://$bucket/' .$row["file_name"];
                            $image_url = CloudStorageTools::getImageServingUrl($image_file, $options);

                            ?>
                            <img src="<?php echo $image_url; ?>" style="height: 128px; width: 128px" class="rounded-circle" alt="" />

                        <?php }
                    }
                    else{ ?>
                        <img src="../../assets/img/avatars/default_avatar.png" style="height: 128px; width: 128px" class="rounded-circle">
                    <?php } ?>
                </div>
                <div class="col col-lg-2">
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#pictureModal" style = "text-decoration: none">
                        <i class="bi bi-pencil-fill"></i>
                    </button>
                </div>

                <div class="col-12 text-center mt-2">
                    <h1>NAME</h1>
                    <p class="lead">@<?php echo htmlspecialchars($_SESSION["username"]);?></p>
                </div>
            </div>
        </div>
    </header>

    <!-- Badges -->
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col px-5">
                <h1 class="mt-5 mb-4">Your Badges</h1>
                <p> You currently do not have any badges</p>

            </div>
        </div>
    </div>


<!-- Picture Modal-->
<div class="modal fade" id="pictureModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered col-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary p-4">
                <h5 class="modal-title font-alt text-white" id="loginModalLabel">Change Picture</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <form action="../../database/upload.php" method="post" enctype="multipart/form-data">
                    <!-- Image -->
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-2">
                            </div>
                            <div class="col-md-auto">
                                <img id="frame" src="../../assets/img/avatars/default_avatar.png" class="img-fluid rounded-circle mb-4" style="height: 12rem; width: 12rem;"/>
                            </div>
                            <div class="col col-lg-2">
                            </div>
                        </div>
                    </div>
                    <!-- Upload File -->
                    <div class="container">
                        <div>
                            <input name="userfile" class="form-control" type="file" id="formFile" onchange="preview()">
                            <div class="d-grid mt-3">
                                <input onclick="clearImage()" type="submit" class="btn btn-primary rounded-pill" name="submit" value="Upload">
                            </div>
                        </div>
                    </div>
                </form>

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