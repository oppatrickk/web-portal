<?php


if(isset($_REQUEST['btn_login'])){

    $_SESSION["keep_login"] = 1;

    $login_username_err = $login_password_err = "";

    $login_username = strip_tags($_REQUEST["txt_username_email"]);
    $login_email = strip_tags($_REQUEST["txt_username_email"]);
    $login_password = strip_tags($_REQUEST["txt_password"]);

    // Check if value is empty
    if(empty($login_username)){
        $login_username_err = "Please enter username/password";
    }
    else if(empty($login_email)){
        $login_username_err = "Please enter email";
    }

    if(empty($login_password)){
        $login_password_err = "Please enter password";
    }
    else{
        try{
            $select_stmt = $db->prepare("Select * FROM users WHERE username=:uname OR email=:uemail");
            $select_stmt->execute(array(':uname'=>$login_username, ':uemail'=>$login_email));
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

            if($select_stmt->rowCount() > 0){
                if($login_username==$row["username"] OR $login_email==$row["email"]){
                    if(password_verify($login_password, $row["password"])){
                        // Session Variables
                        $_SESSION["user_login"] = true;
                        $_SESSION["id"] = $row["user_id"];
                        $_SESSION["email"] = $row["email"];
                        $_SESSION["username"] = $row["username"];
                        $_SESSION["first_name"] = $row["first_name"];
                        $_SESSION["last_name"] = $row["last_name"];
                        $_SESSION["activate_account"] = $row["activate"];
                        $_SESSION["activate_code"] = $row["activate_code"];


                        // Login
                        $loginMsg = "Success!";
                        header("Location: " . $redirect_path);
                        exit;
                    }
                    else{
                        $login_password_err = "Wrong password";
                    }
                }
                else{
                    $login_username_err = "Wrong username/email";
                }
            }
            else{
                $login_username_err = "Wrong username/email";
            }
        }
        catch(PDOException $e){
            $e->getMessage();
        }
    }

}
?>