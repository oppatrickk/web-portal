<!-- PHP -->
<?php

// Use Mail API
use google\appengine\api\mail\Message;

// Initialize the session
session_start();

include '../../database/config.php';

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["user_login"]) || $_SESSION["user_login"] !== true){
    header("location: ../../index.php");
    exit;
}

// Variables
$activate_check = $_SESSION["activate_account"];
$activate_code = $_SESSION["activate_code"];

$err_current_password = $err_new_password = $err_confirm_password = $err_match_password = "";
$err_confirm_code = "";

$active_profile = "active";
$active_password = $active_account = $active_delete = "";

$show_profile = "show active";
$show_password = $show_account = $show_delete = "";

include_once '../../database/change_password.php';
include_once '../../database/activate_account.php';
include_once '../../database/edit_information.php';
include_once '../../database/delete_account.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>codeX | Settings</title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="../../css/scroll.css" rel="stylesheet" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
<!-- Top Nav Bar-->
<?php
    // Paths
    $navbar_path = "dashboard.php";
    $logo_path = "../../assets/logo2.png";
    $login_path = "../login/sign_in.php";
    $logout_path = "../../database/logout.php";
    $register_path = "../login/sign_up.php";
    $settings_path = "settings.php";
    $activity_path = "activity.php";
    $profile_path = "profile.php";

include '../../widgets/navbar.php';

?>

<div class="main custom-scrollbar-css">
    <header class="pt-5 pb-5">
        <div class="container pt-5">
            <div class="row align-items-center justify-content-center">
                <div class="col px-5">
                    <h1 class="mt-5 mb-4">Settings</h1>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?php echo $active_profile;?>" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Profile Info</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?php echo $active_password;?>" id="password-tab" data-bs-toggle="tab" data-bs-target="#change_password" type="button" role="tab" aria-controls="change_password" aria-selected="false">Change Password</button>
                        </li>

                        <?php
                        if($activate_check == 1){?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link <?php echo $active_account;?>" id="activate-tab" data-bs-toggle="tab" data-bs-target="#activate" type="button" role="tab" aria-controls="activate_account" aria-selected="false">Activate Account</button>
                            </li>

                            <?php
                        }
                        ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Delete Account</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <!-- Profile -->
                        <div class="tab-pane fade <?php echo $show_profile?>" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container mt-4">
                                <div class="row">

                                    <!-- Change Picture -->
                                    <div class="col">
                                        <h3 class="mb-5">Change Picture</h3>
                                        <div class="row">
                                            <div class="col-md-auto">
                                                <div class="card" style="width: 18rem;">
                                                    <div class="card-body">
                                                        <div class="container">
                                                            <div class="row justify-content-md-center">
                                                                <div class="col col-lg-2">
                                                                </div>
                                                                <div class="col-md-auto mt-4">
                                                                    <?php
                                                                    // Database
                                                                    use google\appengine\api\cloud_storage\CloudStorageTools;

                                                                    $bucket = 'codex-bu.appspot.com'; // your bucket name
                                                                    $image = $_SESSION["file_name"];

                                                                    $options = ['size' => 400, 'crop' => true];
                                                                    $image_file = "gs://$bucket/$image";
                                                                    $image_url = CloudStorageTools::getImageServingUrl($image_file, $options);
                                                                    ?>

                                                                    <img src="<?php echo $image_url; ?>" style="height: 128px; width: 128px" class="rounded-circle" alt="" />
                                                                </div>
                                                                <div class="col col-lg-2">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <button class="btn mt-3" data-bs-toggle="modal" data-bs-target="#pictureModal" style = "text-decoration: none">
                                                            <i class="bi bi-camera-fill"> Change Profile Picture</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Edit Information -->
                                    <?php include_once 'edit_information.php'; ?>

                                </div>
                            </div>
                        </div>

                        <!-- Password -->
                        <?php include_once 'change_password.php'; ?>

                        <!-- Activate -->
                        <?php include_once 'activate_account.php'; ?>

                        <!-- Delete -->

                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="mt-4 mb-4">
                                <h3 class="mb-2">Delete your account?</h3>
                            </div>

                            <div class="d-inline flex alert-danger text-danger p-3 mt-4">
                                <i class="bi bi-exclamation-triangle-fill h6"> </i> WARNING! This is Permanent
                            </div>
                            <p class="mt-5">This would delete your personal data permanently from our system.</p>
                            <form method="post">
                                <input name="btn_delete" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" value="Delete Account">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
</div>


<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered col-sm">
        <div class="modal-content">
            <div class="modal-header bg-danger p-4 justify-content-md-center">
                <h5 class="modal-title font-alt text-white" id="loginModalLabel">Delete Account</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0">
                <form method="post" enctype="multipart/form-data">
                    <!-- Image -->
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-2">
                            </div>
                            <div class="col-md-auto">
                                <i class="bi bi-exclamation-triangle-fill" style="color:lightgray; font-size: 128px"> </i>
                            </div>
                            <div class="col col-lg-2">
                            </div>
                        </div>

                        <?php if (isset($delete_success)) { ?>

                            <div class="d-flex justify-content-center fw-bold">
                                Account has been deleted.
                            </div>
                            <div class="mt-3 d-flex justify-content-center ">
                                <p>Redirecting to home page...</p>
                            </div>

                            <script>
                                $(document).ready(function () {
                                    setTimeout(function () {
                                        window.location.href = '../../database/logout.php';
                                    }, 1000);

                                });
                            </script>

                        <?php } else{ ?>

                        <div class="d-flex justify-content-center fw-bold">
                            A confirmation code has been sent to your email.
                        </div>
                        <div class="mt-3 d-flex justify-content-center ">
                            <p>Didn't receive an email?</p>
                        </div>
                        <div class="d-flex justify-content-center ">
                            <input type="submit" name="btn_delete" class="btn btn-link text-danger d-inline" value="Resend Code" style="text-decoration: none">
                        </div>


                        <!-- Code -->
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-2">
                            </div>
                            <div class="col-md-auto">
                                <div class="flex form-group mt-3 justify-content-center">
                                    <label style="font-size: 10px; color: grey">Confirmation Code</label>
                                    <input type="text" name="" class="form-control" style="border-radius: 25px">
                                </div>
                            </div>
                            <div class="col col-lg-2">
                            </div>
                        </div>


                        <div class="d-flex justify-content-center fw-bold mt-4 mb-4">
                            <btn class="btn btn-danger">Delete Forever</btn>
                        </div>

                        <?php } ?>
                    </div>
                </form>
            </div>
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



<!-- Bootstrap JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- External JavaScript-->
<script src="../../js/settings.js"></script>


</body>
</html>