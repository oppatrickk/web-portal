<?php

require_once '../../database/config.php';

session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["user_login"]) || $_SESSION["user_login"] !== true);
else{
    header("location: ../dashboard/dashboard.php");
    exit;
}

if(isset($_REQUEST['btn_recover'])){

    $username= strip_tags($_REQUEST["txt_username_email"]);
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
                    $successMsg[] = "We have sent the instructions to " . $email;


                    use google\appengine\api\mail\Message;

                    $message_body = 'We have reset your password.
Please log in using the following password: $recovery_password

We recommend changing your password after logging in through Profile > Settings > Change Password
';

                    $mail_options = [
                        'sender' => 'recovery@codex-bu.appspotmail.com',
                        'to' => $email,
                        'subject' => 'codeX | Recover Password',
                        'textBody' => $message_body
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