<?php

// Use Mail API
use google\appengine\api\mail\Message;

// Variables
$err_confirm_code =  "";
$username = $first_name = $last_name = $password = $email = "";

$activate_code = $_SESSION["activate_code"];


if (isset($_REQUEST['btn_resend'])) {

    $active_account = "active";
    $active_profile = "";

    $show_profile = "";
    $show_account = "show active";


    // Email
    $message_body = "
<body style='height: 100%; padding: 2%; background-color: seagreen;'>

<div>
    <div style='background-color: white; border-radius: 16px; padding: 25px; width: 600px; margin: auto; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
        <center>
            <div>
                <a href='https://codex-bu.appspot.com/'>
                    <img src='https://i.ibb.co/qjwp8ZK/logo2.png' style='width: 7rem; height: 2.5rem;'>
                </a>
            </div>
        </center>
        <div style='padding-left: 15px; padding-right: 15px;'>
            <br>
            <h1 style='font-weight: bold; color: limegreen; margin-bottom: 12px;'>Activate your account</h1>
            <p style='color:black'>Hello <b>" .  $_SESSION["first_name"] . " " . $_SESSION["last_name"] . "</b>, welcome to codeX!</p>
            <br>
            <p style='color:black'>Use the following code to activate your account:</p>
            <center>
                <div style='border-radius: 32px; border: 1px solid limegreen; color: black; padding: 8px; width: 50%; font-weight: bold'>" . $activate_code. "</div>
            </center>
            <br>

            <br>
            <p style='color:black'>Having trouble? <a href='https://codex-bu.appspot.com/pages/footer/report.php' style='text-decoration: none; color:limegreen'>Contact us</a></p>

            <br>
        </div>
    </div>
    <div style='width: 600px; margin: auto;'>
        <center>
            <br>
            <p style='color:white; font-size: 12px; opacity: 75%'>The code will expire in the next 24 hours.</p>
            <br>
            <a href='https://codex-bu.appspot.com/'>
                <img src='https://i.ibb.co/VTB4vfy/logo1.png' style='width: 6rem; height: 6rem;'>
            </a>
            <p style='color:white; font-size: 12px; opacity: 100%'>codeX © 2021</p>
        </center>
    </div>
</div>

</body>";

    $mail_options = [
        'sender' => 'Activate@codex-bu.appspotmail.com',
        'to' => $_SESSION["email"],
        'subject' => 'codeX | Verify Account',
        'htmlBody' => $message_body
    ];

    try {
        $message = new Message($mail_options);
        $message->send();
    } catch (InvalidArgumentException $e) {
        echo 'error: ';
    }

    $success_resent = "We have re-sent the confirmation code to " . $_SESSION["email"];

}

if (isset($_REQUEST['btn_verify'])) {

    $pass = 0;

    $active_account = "active";
    $active_profile = "";

    $show_profile = "";
    $show_account = "show active";

    // Variables
    $confirm_code = strip_tags($_REQUEST["confirm_code"]);

    $username = $_SESSION["username"];
    $email = $_SESSION["email"];

    // Check if value is empty
    if (empty($confirm_code)) {
        $err_confirm_code = "Please enter code";
    }
    else{
        $pass++;
    }

    if($pass == 1) {
        try {
            $select_stmt = $db->prepare("Select * FROM users WHERE username=:uname OR email=:uemail");
            $select_stmt->execute(array(':uname'=>$username, ':uemail'=>$email));
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

            if($select_stmt->rowCount() > 0) {

                if($confirm_code == $row["activate_code"]){
                    // Parameter
                    $params = [
                        ':activate' => 0,
                    ];

                    // Username
                    $id = $_SESSION["id"];

                    // Replace in Database
                    $stm = $db->prepare("UPDATE users SET activate = :activate WHERE user_id = '$id'");
                    $stm->execute($params);

                    $success_msg_verify = "Verified";
                    $_SESSION["activate_account"] = 0;
                }
                else{
                    $err_confirm_code = "Wrong code";
                }
            }
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
}