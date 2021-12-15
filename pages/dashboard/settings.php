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
$err_current_password = $err_new_password = $err_confirm_password = $err_match_password = "";
$active_profile = "active";
$active_password = "";


$show_profile = "show active";
$show_password = "";

if (isset($_REQUEST['btn_change'])) {

    $pass = 0;

    $active_password = "active";
    $active_profile = "";

    $show_profile = "";
    $show_password = "show active";

    // Variables
    $current_password = strip_tags($_REQUEST["current_password"]);
    $new_password = strip_tags($_REQUEST["new_password"]);
    $confirm_password = strip_tags($_REQUEST["confirm_password"]);

    $username = $_SESSION["username"];
    $email = $_SESSION["email"];

    // Check if value is empty
    if (empty($current_password)) {
        $err_current_password = "Please enter your current password";
    }
    else{
        $pass++;
    }

    // Validate Password Strength
    $uppercase = preg_match("#[A-Z]+#", $new_password);
    $lowercase = preg_match("#[a-z]+#", $new_password);
    $number    = preg_match("#[0-9]+#", $new_password);
    $char      = preg_match("#[^\w]+#", $new_password);

    if (empty($new_password)) {
        $err_new_password = "Please enter your new password";
    }
    else if(!$uppercase || !$lowercase || !$number || strlen($new_password) < 6) {
        $err_new_password = "New password should be at least 8 characters in length and include at least one upper case letter, one number, and one special character";
    }
    else{
        $pass++;
    }

    if (empty($confirm_password)) {
        $err_confirm_password = "Please enter your new password again";
    } else if ($confirm_password != $new_password) {
        $err_confirm_password = "Password did not match";
    }
    else{
        $pass++;
    }

    if($pass == 3) {
        try {
            $select_stmt = $db->prepare("Select * FROM users WHERE username=:uname OR email=:uemail");
            $select_stmt->execute(array(':uname'=>$username, ':uemail'=>$email));
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

            if($select_stmt->rowCount() > 0){
                if(password_verify($current_password, $row["password"])){

                        // Parameter
                        $params = [
                            ':password' => password_hash($new_password, PASSWORD_DEFAULT),
                        ];

                        // Username
                        $id = $_SESSION["id"];

                        // Replace in Database
                        $stm = $db->prepare("UPDATE users SET password = :password WHERE user_id = '$id'");
                        $stm->execute($params);

                        $success_msg = "Password Changed";
                }
                else{
                        $err_current_password = "Wrong password";
                    }
                }
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}


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

    <!-- Icons -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>


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

include '../../widgets/navbar.php'
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
                        <div class="tab-pane fade <?php echo $show_password;?>" id="change_password" role="tabpanel" aria-labelledby="profile-tab">

                            <div class="mt-4">
                                <h3 class="mb-2">Change Password</h3>

                                <?php
                                if(isset($errorMsg)){
                                    foreach($errorMsg as $error){
                                        ?>
                                        <div class = "alert alert-danger">
                                            <?php echo $error; ?>
                                        </div>
                                        <?php
                                    }
                                }
                                if (isset($success_msg)){
                                    ?>
                                    <div class = "alert alert-success">
                                        <strong><?php echo $success_msg; ?></strong>
                                    </div>
                                    <?php
                                }
                                ?>

                                <form method="post">
                                    <!-- Current Password -->
                                    <div class="form-group mt-3 col-3">
                                        <label style="font-size: 12px; color: grey">Current Password</label>
                                        <input type="password" name="current_password" class="form-control <?php echo (!empty($err_current_password)) ? 'is-invalid' : ''; ?>">
                                        <span class="invalid-feedback"><?php echo $err_current_password; ?></span>
                                    </div>

                                    <!-- New Password-->
                                    <div class="form-group mt-3 col-3">
                                        <label style="font-size: 12px; color: grey">New Password</label>
                                        <input type="password" name="new_password" class="form-control <?php echo (!empty($err_new_password)) ? 'is-invalid' : ''; ?>">
                                        <span class="invalid-feedback"><?php echo $err_new_password; ?></span>
                                    </div>

                                    <!-- Confirm New Password-->
                                    <div class="form-group mt-3 col-3">
                                        <label style="font-size: 12px; color: grey">Confirm Password</label>
                                        <input type="password" name="confirm_password" class="form-control <?php echo (!empty($err_confirm_password)) ? 'is-invalid' : ''; ?>">
                                        <span class="invalid-feedback"><?php echo $err_confirm_password; ?></span>
                                    </div>

                                    <!-- Submit -->
                                    <div class="form-group mt-3">
                                        <input type="submit" name="btn_change" class="btn btn-primary" value="Change Password">
                                    </div>
                                </form>
                            </div>
                        </div>

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
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
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

                        <div class="d-flex justify-content-center">
                            All data will be deleted PERMANENTLY
                        </div>

                        <div class="d-flex justify-content-center fw-bold mt-3">
                            Confirm by typing the information required below.
                        </div>

                        <!-- Username/Email -->
                        <div class="form-group mt-3 col">
                            <label style="font-size: 14px; color: grey">Username/Email</label>
                            <input type="text" name="txt_username_email" class="form-control">
                        </div>

                        <!-- Password -->
                        <div class="form-group mt-3 col">
                            <label style="font-size: 14px; color: grey">Password</label>
                            <input type="password" name="txt_password" class="form-control" id="password-field">
                        </div>

                        <div class="d-flex justify-content-center fw-bold mt-3 mb-4">
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


<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- External JavaScript-->
<script src="../../js/settings.js"></script>


</body>
</html>