<?php

if(isset($_REQUEST['btn_login'])){

    $username_err = $password_err = "";

    $username = strip_tags($_REQUEST["txt_username_email"]);
    $email = strip_tags($_REQUEST["txt_username_email"]);
    $password = strip_tags($_REQUEST["txt_password"]);

    // Check if value is empty
    if(empty($username)){
        $username_err = "Please enter username/password";
    }
    else if(empty($email)){
        $username_err = "Please enter email";
    }

    if(empty($password)){
        $password_err = "Please enter password";
    }
    else{
        try{
            $select_stmt = $db->prepare("Select * FROM users WHERE username=:uname OR email=:uemail");
            $select_stmt->execute(array(':uname'=>$username, ':uemail'=>$email));
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

            if($select_stmt->rowCount() > 0){
                if($username==$row["username"] OR $email==$row["email"]){
                    if(password_verify($password, $row["password"])){
                        // Session Variables
                        $_SESSION["user_login"] = true;
                        $_SESSION["id"] = $row["user_id"];
                        $_SESSION["email"] = $row["email"];
                        $_SESSION["username"] = $row["username"];
                        $_SESSION["first_name"] = $row["first_name"];
                        $_SESSION["last_name"] = $row["last_name"];
                        $_SESSION["activate_account"] = $row["activate"];

                        // Login
                        $loginMsg = "Success!";
                        header("Location: $redirect_path");
                    }
                    else{
                        $password_err = "Wrong password";
                    }
                }
                else{
                    $username_err = "Wrong username/email";
                }
            }
            else{
                $username_err = "Wrong username/email";
            }
        }
        catch(PDOException $e){
            $e->getMessage();
        }
    }

}
?>