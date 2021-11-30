<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../dashboard/dashboard.php");
    exit;
}

// Include config file
require_once "../../database/config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Paths
$navbar_path = "../../index.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>codeX | Reset</title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico">

    <!-- External CSS -->
    <link href="../../css/dashboard.css" rel="stylesheet"/>

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Icons -->

    <!-- Fonts -->


    <!-- Assets -->

</head>

<body>
    <!-- Top Navigation Bar -->
    <?php include '../../widgets/navbar_nologin.php' ?>

    <!-- Login -->
    <header class="masthead">
        <div class="container h-100 mt-5 mb-5">
            <div class="row h-100">
                <div class="col-12 mt-5">
                    <h1>Reset Password </h1>
                    <p class="lead">An e-mail will be send to you with instructions on how to reset your password.</p>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group mt-3 col col-lg-3">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Enter your e-mail address.">
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="reset-request-submit" c  value="Send">
                        </div>
                    </form>
                    <?php
                    if (isset($_GET["reset"])){
                        if ($_GET["reset"] == "success") {
                            echo '<p class="signupsuccess">Check your e-mail!</p>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>
    </div>

    <!-- Footer -->

    <!-- Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- External JavaScript-->
    <script src="../../js/dashboard.js"></script>

    <!-- Forms -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>