<?php

// Use Mail API
use google\appengine\api\mail\Message;

// Variables
$err_current_password = $err_new_password = $err_confirm_password = $err_match_password = "";

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

    if (empty($new_password)) {
        $err_new_password = "Please enter your new password";
    }
    else{
        $pass++;
    }

    if (empty($confirm_password)) {
        $err_confirm_password = "Please enter your new password again";
    }
    else{
        $pass++;
    }

    if($pass == 3) {
        try {
            $select_stmt = $db->prepare("Select * FROM users WHERE username=:uname OR email=:uemail");
            $select_stmt->execute(array(':uname'=>$username, ':uemail'=>$email));
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

            if($select_stmt->rowCount() > 0) {

                // Check current password
                if (password_verify($current_password, $row["password"])) {
                    $pass++;
                } else {
                    $err_current_password = "Wrong password";
                }

                // Validate Password Strength
                $uppercase = preg_match("#[A-Z]+#", $new_password);
                $lowercase = preg_match("#[a-z]+#", $new_password);
                $number = preg_match("#[0-9]+#", $new_password);
                $char = preg_match("#[^\w]+#", $new_password);

                // Check new password
                if (!$uppercase || !$lowercase || !$number || strlen($new_password) < 6) {
                    $err_new_password = "New password should be at least 8 characters in length and include at least one upper case letter, one number, and one special character";
                } else {
                    $pass++;
                }

                // Match Password
                if ($confirm_password != $new_password) {
                    $err_confirm_password = "Password did not match";
                } else {
                    $pass++;
                }

                if ($pass == 6) {
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
            }
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
}