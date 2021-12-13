<?php

require_once '../../database/config.php';

// Variables
$username = $first_name = $last_name = $password = $email = $confirm_password = "";
$username_err = $first_name_err = $last_name_err = $password_err = $email_err = $confirm_password_err = "";

$pass = 0;

// Insert a new row into the guestbook on POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $stmt = $db->prepare("SELECT username, email FROM users WHERE username=:name OR email=:email");
    $stmt->execute(array(':name' => $_POST["name"], ':email' => $_POST["email"]));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Validate First Name
    if(empty($_POST['first_name'])){
        $first_name_err = "Required";
    }
    else{
        $pass++;
    }

    // Validate Last Name
    if(empty($_POST['last_name'])){
        $last_name_err = "Required";
    }
    else{
        $pass++;
    }

    // Validate  Username
    if(empty($_POST['name'])){
        $username_err = "Please enter a username.";
    }
    else if(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["name"]))) {
        $username_err = "Username can only contain letters, numbers, and underscores.";
    }
    else if ($row["username"] == $_POST["name"]) {
        $username_err = "Username already taken";
    }
    else{
        $pass++;
    }

    // Validate  Email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter your email.";
    }
    elseif(!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
        $email_err = "Please enter a valid email.";
    }
    else if ($row["email"] == $_POST["email"]) {
        $email_err = "Email already in use";
    }
    else{
        $pass++;
    }

    // Validate Password Strength
    $uppercase = preg_match("#[A-Z]+#", $_POST["password"]);
    $lowercase = preg_match("#[a-z]+#", $_POST["password"]);
    $number    = preg_match("#[0-9]+#", $_POST["password"]);
    $char      = preg_match("#[^\w]+#", $_POST["password"]);

    // Validate Password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    }
    else if(!$uppercase || !$lowercase || !$number || strlen($_POST["password"]) < 6) {
        $password_err = "Password should be at least 8 characters in length and include at least one upper case letter, one number, and one special character";
    }
    else{
        $pass++;
    }

    // Confirm Password
    if($_POST["password"] != $_POST["confirm_password"]){
        $confirm_password_err = "Password did not match";
    }
    else{
        $pass++;
    }


    if($pass == 6) {
        $params = [
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        ];

        $stmt = $db->prepare('INSERT INTO users (username, email, password) VALUES (:name, :email, :password)');
        if ($stmt->execute($params)) {
            header('Location: \sign_in.php');
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
        <div class="container h-100 mt-5 mb-5 px-5">
            <div class="row h-100">
                <div class="col-12 mt-5">

                    <h1>Sign Up</h1>
                    <p class="lead">Please fill this form to create an account.</p>

                    <form method="post">
                        <!-- Names -->

                        <div class="form-group col mt-3 col-lg-3">
                            <div class="row">
                                <div class="col">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" class="form-control <?php echo (!empty($first_name_err)) ? 'is-invalid' : ''; ?>">
                                    <span class="invalid-feedback"><?php echo $first_name_err; ?></span>
                                </div>
                                <div class="col">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" class="form-control <?php echo (!empty($last_name_err)) ? 'is-invalid' : ''; ?>">
                                    <span class="invalid-feedback"><?php echo $last_name_err; ?></span>
                                </div>
                            </div>
                        </div>

                        <!-- Username -->
                        <div class="form-group col mt-3 col-lg-3">
                            <label>Username</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $username_err; ?></span>
                        </div>

                        <!-- Email -->
                        <div class="form-group mt-3 col col-lg-3">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $email_err; ?></span>
                        </div>

                        <!-- Password -->
                        <div class="form-group mt-3 col col-lg-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group mt-3 col col-lg-3">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                        </div>

                        <!-- Submit -->
                        <div class="form-group mt-4">
                            <input type="submit" name="btn-register" class="btn btn-primary" value="Add">
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