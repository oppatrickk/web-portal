<?php
// Include config file
require_once "../../database/config.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>codeX | Login</title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="../../css/dashboard.css" rel="stylesheet"/>

    <!-- Icons -->


    <!-- Fonts -->


    <!-- Assets -->

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
                    <h1>Sign Up</h1>
                    <p class="lead">Please fill this form to create an account.</p>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <!--
                        <div class="form-group col col-lg-3">
                            <label>Email</label>
                            <input type="text" name="username" class="form-control <?php //echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php //echo $email; ?>">
                            <span class="invalid-feedback"><?php //echo $email_err; ?></span>
                        </div> -->
                        <div class="form-group col mt-3 col-lg-3">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                            <span class="invalid-feedback"><?php echo $username_err; ?></span>
                        </div>
                        <div class="form-group mt-3 col col-lg-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                            <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        </div>
                        <div class="form-group mt-3 col col-lg-3">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                        </div>
                        <div class="form-group mt-4">
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <input type="reset" class="btn btn-secondary ml-2" value="Reset">
                        </div>
                        <p class="mt-5">Already have an account? <a href="login.php">Login here</a>.</p>
                    </form>

                </div>
            </div>
        </div>
    </header>

    <!-- Footer -->
    <?php
    // Paths
    $about_path = "";
    $founders_path = "";
    $faqs_path = "";
    $contact_path = "";

    include '../../widgets/footer.php'

    ?>

    <!-- Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- External JavaScript-->
    <script src="../../js/dashboard.js"></script>

    <!-- Forms -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>