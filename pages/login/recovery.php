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




                    $message_body = "<body style='height: 100%; background: linear-gradient(90deg, rgba(2, 0, 36, 0.25) 0%, rgba(9, 9, 121, 0.25) 35%, rgba(0, 212, 255, 0.25) 100%);'>

<div class='container h-100 d-flex justify-content-center'>
    <div class='jumbotron my-auto' style='background-color: white; border-radius: 16px; padding: 25px'>
        <div class='d-flex justify-content-center'>
            <img src='../../assets/logo2.png' style='width: 6rem; height: 2rem;'>
        </div>
        <h1 class='display-3'>Hello, world!</h1>
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