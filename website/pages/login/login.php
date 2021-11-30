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

// Processing form data when form is submitted

if (isset($_POST["signup"])) {
    $username = mysqli_real_escape_string($conn, $_POST["signup_username"]);
    $email = mysqli_real_escape_string($conn, $_POST["signup_email"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["signup_password"]));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST["signup_cpassword"]));
    $token = md5(rand());

    $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM users WHERE email='$email'"));

    if ($password !== $cpassword) {
        echo "<script>alert('Password did not match.');</script>";
    } elseif ($check_email > 0) {
        echo "<script>alert('Email already exists in our database.');</script>";
    } else {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('User registration success.');</script>";
        } else {
            echo "<script>alert('User registration failed.');</script>";
        }
        $_POST["signup_username"] = "";
        $_POST["signup_email"] = "";
        $_POST["signup_password"] = "";
        $_POST["signup_cpassword"] = "";

    }
}

if (isset($_POST["signin"])) {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

    $check_email = mysqli_query($conn, "SELECT id FROM users WHERE email='$email' AND password='$password' AND status='1'");

    if (mysqli_num_rows($check_email) > 0) {
        $row = mysqli_fetch_assoc($check_email);
        $_SESSION["user_id"] = $row['id'];
        header("Location: pages/welcome.php");
    } else {
        echo "<script>alert('Login details is incorrect. Please try again.');</script>";
    }

    // Close connection
    mysqli_close($link);
}
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
    <link href="../../css/login.css" rel="stylesheet"/>

    <!-- Icons -->

    <!-- Fonts -->


    <!-- Assets -->

</head>

<body>
    <!-- Top Navigation Bar -->
    <?php
    // Paths
    $navbar_path = "../../index.php";

    include '../../widgets/navbar_nologin.php';

    ?>

    <!-- Login -->
    <header class="masthead">
        <div class="container h-100 mt-5 mb-5">
            <div class="row h-100">
                <div class="col-12 mt-5">
                    <h1>Login</h1>
                    <p class="lead">You must Login to access codeX</p>

                    <?php
                    if(!empty($login_err)){
                        echo '<div class="alert alert-danger">' . $login_err . '</div>';
                    }
                    ?>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group mt-3 col col-lg-3">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                            <span class="invalid-feedback"><?php echo $username_err; ?></span>
                        </div>
                        <div class="form-group mt-3 col col-lg-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-primary" value="Login">
                        </div>
                        <p class="mt-5">Don't have an account? <a href="register.php">Sign up now</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </header>
    </div>

    <!-- Footer -->
    <?php
    // Paths
    $about_path = "";
    $founders_path = "pages/footer/founders.php";
    $faqs_path = "";
    $contact_path = "";

    include '../../widgets/footer.php'

    ?>

    <!-- Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- External JavaScript-->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="../../js/login.js"></script>

</body>
</html>