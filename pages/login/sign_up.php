<?php

require_once '../../database/config.php';


if(isset($_REQUEST['btn_register'])){
    $username = strip_tags($_REQUEST["txt_username_email"]);
    $email = strip_tags($_REQUEST["txt_username_email"]);
    $password = strip_tags($_REQUEST["txt_username_email"]);

    // Check if value is empty
    if(empty($username)){
        $errorMsg[]="Please enter username";
    }
    else if(empty($email)){
        $errorMsg[]="Please enter email";
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorMsg[]="Please enter a valid email";
    }
    else if(empty($password)){
        $errorMsg[]="Please enter password";
    }
    else if(strlen($password)){
        $errorMsg[]="Password must be at least 6 characters";
    }
    else{
        try{
            $select_stmt = $db->prepare("Select username, email FROM users WHERE username=:uname OR email=:uemail");
            $select_stmt->execute(array(':uname'=>$username, ':uemail'=>$email));
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

            if($row["username"] == $username){
                $errorMsg[] = "This username is already taken";
            }
            else if($row["email"] == $email){
                $errorMsg[] = "This email is already in use";
            }
            else if(!isset($errorMsg)){
                $new_password = password_hash($password, PASSWORD_DEFAULT);

                $insert_stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (:uname, :uemail, :upassword)");

                if($insert_stmt->execute(array( ':uname:' => $username,
                    ':uemail' => $email,
                    ':epassword' => $new_password))){
                    $registerMsg = "Registration Success!";
                }
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
    <title>codeX | Register</title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="../../css/dashboard.css" rel="stylesheet"/>

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
    $login_path = "login.php";
    $logo_path = "../../assets/logo2.png";

    include '../../widgets/navbar_nologin.php';

    ?>

    <!-- Main -->
    <header class="masthead">
        <div class="container h-100 mt-5 mb-5">
            <div class="row h-100">
                <div class="col-12 mt-5">
                    <?php
                    if(isset($errorMsg)){
                        foreach($errorMsg as $error){
                            ?>
                            <div class = "alert alert-danger">
                                <strong>Error! <?php echo $error; ?></strong>
                            </div>
                            <?php
                        }
                    }
                    if (isset($registerMsg)){
                        ?>
                        <div class = "alert alert-success">
                            <strong><?php echo $registerMsg; ?></strong>
                        </div>
                        <?php
                    }
                    ?>

                    <h1>Sign Up</h1>
                    <p class="lead">Please fill this form to create an account.</p>

                    <form method="post">
                        <!-- Username -->
                        <div class="form-group col mt-3 col-lg-3">
                            <label>Username</label>
                            <input type="text" name="txt_username" class="form-control">
                        </div>

                        <!-- Email -->
                        <div class="form-group mt-3 col col-lg-3">
                            <label>Password</label>
                            <input type="text" name="txt_email" class="form-control">
                        </div>

                        <!-- Password -->
                        <div class="form-group mt-3 col col-lg-3">
                            <label>Password</label>
                            <input type="password" name="txt_password" class="form-control">
                        </div>

                        <!-- Submit -->
                        <div class="form-group mt-4">
                            <input type="submit" name="btn-register" class="btn btn-primary" value="Register">
                        </div>

                        <!-- Login -->
                        <p class="mt-5">Already have an account? <a href="sign_in.php">Login here</a>.</p>
                    </form>

                </div>
            </div>
        </div>
    </header>

    <!-- Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- External JavaScript-->
    <script src="../../js/dashboard.js"></script>

    <!-- Forms -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>