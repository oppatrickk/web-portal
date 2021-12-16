<?php

// Use Mail API
use google\appengine\api\mail\Message;

require_once '../../database/config.php';

session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["user_login"]) || $_SESSION["user_login"] !== true);
else{
    header("location: ../dashboard/dashboard.php");
    exit;
}

if(isset($_REQUEST['btn_recover'])){

    $username = strip_tags($_REQUEST["txt_username_email"]);
    $email = strip_tags($_REQUEST["txt_username_email"]);

    // Check if value is empty
    if(empty($username)){
        $errorMsg[]="Please enter your username/email";
    }
    else if(empty($email)){
        $errorMsg[]="Please enter your username/email";
    }
    else{
        try{
            $select_stmt = $db->prepare("Select * FROM users WHERE username=:uname OR email=:uemail");
            $select_stmt->execute(array(':uname'=>$username, ':uemail'=>$email));
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

            if($select_stmt->rowCount() > 0){
                if($username==$row["username"] OR $email==$row["email"]){

                    // Password Generator
                    $digits    = array_flip(range('0', '9'));
                    $lowercase = array_flip(range('a', 'z'));
                    $uppercase = array_flip(range('A', 'Z'));
                    $special   = array_flip(str_split('!@#$%^&*()_+=-}{[}]\|;:<>?/'));
                    $combined  = array_merge($digits, $lowercase, $uppercase, $special);

                    // Result
                    $recovery_password  = str_shuffle(array_rand($digits) .
                        array_rand($lowercase) .
                        array_rand($uppercase) .
                        array_rand($special) .
                        implode(array_rand($combined, rand(4, 8))));

                    // Get User
                    $username = $row["username"];
                    $first_name = $row["first_name"];
                    $last_name = $row["last_name"];

                    // Parameter
                    $params = [
                        ':password' => password_hash($recovery_password, PASSWORD_DEFAULT),
                    ];

                    // Replace in Database
                    $stm = $db->prepare("UPDATE users SET password = :password WHERE username = '$username'");
                    $stm->execute($params);

                    // Email
                    $successMsg = "We have sent the instructions to " .$row["email"];




                    $message_body = "
<body style='height: 100%; padding: 2%; background-color: royalblue;'>

<div>
    <div style='background-color: white; border-radius: 16px; padding: 25px; width: 600px; margin: auto; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
        <center>
            <div>
                <a href='https://codex-bu.appspot.com/'>
                    <img src='https://i.ibb.co/VTB4vfy/logo1.png' style='width: 6rem; height: 6rem;'>
                </a>
            </div>
        </center>
        <div style='padding-left: 15px; padding-right: 15px;'>
            <br>
            <h1 style='font-weight: bold; color: royalblue; margin-bottom: 12px;'>Forgot your Password?</h1>
            <p style='color:black'>Hello <b>" .  $first_name . " " . $last_name . "</b>, we have received a request to reset your password.</p>
            <br>
            <p style='color:black'>Use the following password to log in to your account:</p>
            <center>
                <div style='border-radius: 32px; border: 1px solid #000dff; color: black; padding: 8px; width: 50%; font-weight: bold'>" .$recovery_password. "</div>
            </center>
            <br>
            <p style='color:black'>We recommend changing your password after signing in.</p>
            <br>
            <p style='color:black'>Having trouble? <a href='https://codex-bu.appspot.com/pages/footer/report.php' style='text-decoration: none; color:blue'>Contact us</a></p>
            <p style='color:black'>Didn't request a password reset? You can ignore this message.</p>
            <br>
        </div>
    </div>
    <div style='width: 600px; margin: auto;'>
    <center>
        <br>
        <a href='https://codex-bu.appspot.com/'>
            <img src='https://i.ibb.co/pZ0Lmqn/logo2-white.png' style='width: 7rem; height: 2.5rem;'>
        </a>
        <br><br>
        <p style='color:white; font-size: 12px; opacity: 75%'>This password will expire in the next 24 hours.</p>
        <p style='color:white; font-size: 12px; opacity: 100%'>codeX © 2021</p>
    </center>
    </div>
</div>

</body>";

                    $mail_options = [
                        'sender' => 'Reset@codex-bu.appspotmail.com',
                        'to' => $row["email"],
                        'subject' => 'codeX | Password Reset',
                        'htmlBody' => $message_body
                    ];

                    try {
                        $message = new Message($mail_options);
                        $message->send();
                    } catch (InvalidArgumentException $e) {
                        echo 'error: ';
                    }
                }
                else{
                    $errorMsg[] = "Email/username does not exist in our database";
                }
            }
            else{
                $errorMsg[] = "Email/username does not exist in our database";
            }
        }
        catch(PDOException $e){
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
    <title>codeX | Sign in</title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="../../css/sign_in.css" rel="stylesheet"/>

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>

</head>

<body>
<!-- Top Navigation Bar -->
<?php
// Paths
$navbar_path = "../../index.php";
$logo_path = "../../assets/logo2.png";

include '../../widgets/navbar_nologin.php'
?>

<!-- Login -->
<header class="masthead">
    <div class="container h-100 mt-5 mb-5 px-5">
        <div class="row h-100">
            <div class="col-12 mt-5">
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
                if (isset($successMsg)){
                    ?>
                    <div class = "alert alert-success">
                        <strong><?php echo $successMsg; ?></strong>
                    </div>
                <?php
                }
                ?>

                <h1>Recover Password</h1>
                <p class="lead">Enter your username or email address</p>


                <form method="post">
                    <!-- Username/Email -->
                    <div class="form-group mt-3 col col-lg-3">
                        <label>Username/Email</label>
                        <input type="text" name="txt_username_email" class="form-control">
                    </div>


                    <!-- Submit -->
                    <div class="form-group mt-3">
                        <input type="submit" name="btn_recover" class="btn btn-primary" value="Recover">
                    </div>

                    <!-- Register -->
                    <p class="mt-5">Remembered your password? <a href="sign_in.php">Sign in now</a>.</p>
                </form>
            </div>
        </div>
    </div>
</header>
</div>


<!-- Bootstrap JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- External JavaScript-->
<script src="../../js/sign_in.js"></script>

</body>
</html>