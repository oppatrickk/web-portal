<!-- PHP -->
<?php

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
    $navbar_path = "../../index.php";
    $logo_path = "../../assets/logo2.png";
    $login_path = "../login/sign_in.php";
    $logout_path = "../../database/logout.php";
    $register_path = "../login/sign_up.php";
    $settings_path = "settings.php";
    $activity_path = "activity.php";
    $profile_path = "profile.php";

include '../../widgets/navbar.php';
include '../../widgets/verify.php';

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
                                                                    $query = $db->query("SELECT * FROM images where `username` = '$id'");

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
                                                                    if($query > 0){
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
                                    <div class="col">
                                        <h3 class="mb-2">Edit Information</h3>

                                        <!-- Username -->
                                        <div class="form-group mt-4 col-6">
                                            <label style="font-size: 12px; color: grey">Username</label>
                                            <input type="text" name="txt_password" class="form-control" value="<?php echo $_SESSION["username"]?>">
                                        </div>

                                        <!-- First Name-->
                                        <div class="form-group mt-4 col-6">
                                            <label style="font-size: 12px; color: grey">First Name</label>
                                            <input type="text" name="txt_password" class="form-control" value="<?php echo $_SESSION["first_name"]?>">
                                        </div>

                                        <!-- Last Name-->
                                        <div class="form-group mt-4 col-6">
                                            <label style="font-size: 12px; color: grey">Last Name</label>
                                            <input type="text" name="txt_password" class="form-control" value="<?php echo $_SESSION["last_name"]?>">
                                        </div>

                                        <!-- Submit -->
                                        <div class="form-group mt-3">
                                            <input type="submit" name="btn_login" class="btn btn-primary" value="Save">
                                        </div>
                                    </div>
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
                            <p class="mt-4">This would delete your personal data permanently from our system.</p>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" style = "text-decoration: none">Delete Account</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
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

<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered col-sm">
        <div class="modal-content">
            <div class="modal-header bg-danger p-4 justify-content-md-center">
                <h5 class="modal-title font-alt text-white" id="loginModalLabel">Delete Account</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <form action="" method="post" enctype="multipart/form-data">
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

                        <div class="d-flex justify-content-center fw-bold">
                            A confirmation code has been sent to your email.
                        </div>
                        <div class="mt-3 d-flex justify-content-center ">
                            <p>Didn't receive an email?⠀</p> <p class="text-danger d-inline flex justify-content-center"> Resend</p>
                        </div>


                        <!-- Code -->
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-2">
                            </div>
                            <div class="col-md-auto">
                                <div class="flex form-group mt-3 justify-content-center">
                                    <label style="font-size: 10px; color: grey">Confirmation Code</label>
                                    <input type="text" name="confirm_code" class="form-control" style="border-radius: 25px">
                                </div>
                            </div>
                            <div class="col col-lg-2">
                            </div>
                        </div>


                        <div class="d-flex justify-content-center fw-bold mt-4 mb-4">
                            <btn class="btn btn-danger disabled">Delete Forever</btn>
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