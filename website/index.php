<!-- PHP -->
<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: pages/dashboard/dashboard.php");
    exit;
}

// Include config file
require_once "database/config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            header("location: pages/dashboard/dashboard.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
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
    <title>codeX</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">

    <!-- External CSS -->
    <link href="css/index.css" rel="stylesheet" />

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Fonts -->


    <!-- Assets -->


</head>

<body>
    <?php
    if(!empty($login_err)){
        echo '<div class="alert alert-danger">' . $login_err . '</div>';
    }
    ?>

    <!-- Top Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm bg-white" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="#page-top">codeX</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Tutorials</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Challenges</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Community</a></li>
                </ul>
                <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <span class="d-flex align-items-center">
                            <span class="medium">Log in</span>
                        </span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Row 1 -->
    <header class="masthead">
        <div class="container h-100 mt-5 mb-5">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center mt-5">
                    <h1>Web Portal Project</h1>
                    <p class="lead">Landing Page</p>
                    <p>version 0.9</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Row 2 | Tutorials-->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-light">Tutorials</h2>
            <p>Learn the programming language, C, python etc.</p>
        </div>
    </section>

    <!-- Row 3 | Challenges-->
    <section class="py-5 bg-white">
        <div class="container">
            <h2 class="fw-light">Challenges</h2>
            <p>Laboratory Exercises and Competitions</p>
        </div>
    </section>

    <!-- Row 4 | Tutorials-->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-light">Community</h2>
            <p>Engage with the community through our forums and review etc.</p>
        </div>
    </section>

    <!-- Row 5 | Contributors -->
    <section class="py-5 bg-white">
        <div class="container">
            <h2 class="fw-light">Founders</h2>
            <center>
                <div class="row mt-4">
                    <!-- Founder 1 -->
                    <div class="col-sm-2">
                        <img class="rounded-circle" src="assets/img/founders/prieto.jpg" alt="prieto" style="height: 128px; width: 128px">
                        <div class="card-body">
                            <p class="card-title">John Patrick M. Prieto</p>
                            <a href="https://www.facebook.com/prietopat" target="_blank" style="text-decoration:none; color: dimgray" rel="noopener noreferrer">
                                <i class="bi-facebook m-1"></i>
                            </a>
                            <a href="https://twitter.com/oppatrickk" target="_blank" style="text-decoration:none; color: dimgray" rel="noopener noreferrer">
                                <i class="bi-twitter m-1"></i>
                            </a>
                            <a href="https://github.com/oppatrickk" target="_blank" style="text-decoration:none; color: dimgray" rel="noopener noreferrer">
                                <i class="bi-github m-1"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Founder 2 -->
                    <div class="col-sm-2">
                        <img class="rounded-circle" src="assets/img/founders/prieto.jpg" alt="prieto" style="height: 128px; width: 128px">
                        <div class="card-body">
                            <p class="card-title">John Patrick M. Prieto</p>
                            <a href="https://www.facebook.com/prietopat" target="_blank" style="text-decoration:none; color: dimgray" rel="noopener noreferrer">
                                <i class="bi-facebook m-1"></i>
                            </a>
                            <a href="https://twitter.com/oppatrickk" target="_blank" style="text-decoration:none; color: dimgray" rel="noopener noreferrer">
                                <i class="bi-twitter m-1"></i>
                            </a>
                            <a href="https://github.com/oppatrickk" target="_blank" style="text-decoration:none; color: dimgray" rel="noopener noreferrer">
                                <i class="bi-github m-1"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Founder 3 -->
                    <div class="col-sm-2">
                        <img class="rounded-circle" src="assets/img/founders/prieto.jpg" alt="prieto" style="height: 128px; width: 128px">
                        <div class="card-body">
                            <p class="card-title">John Patrick M. Prieto</p>
                            <a href="https://www.facebook.com/prietopat" target="_blank" style="text-decoration:none; color: dimgray" rel="noopener noreferrer">
                                <i class="bi-facebook m-1"></i>
                            </a>
                            <a href="https://twitter.com/oppatrickk" target="_blank" style="text-decoration:none; color: dimgray" rel="noopener noreferrer">
                                <i class="bi-twitter m-1"></i>
                            </a>
                            <a href="https://github.com/oppatrickk" target="_blank" style="text-decoration:none; color: dimgray" rel="noopener noreferrer">
                                <i class="bi-github m-1"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Founder 4 -->

                    <!-- Founder 5 -->

                    <!-- Founder 6 -->

                </div>
            </center>
        </div>
    </section>

    <!-- Footer-->
    <footer class="bg-black text-center py-4">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; codeX | 2021</div>
            </div>
        </div>
    </footer>

    <!-- Login Modal-->
    <div class="modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered col-sm">
            <div class="modal-content">
                <div class="modal-header bg-primary p-4">
                    <h5 class="modal-title font-alt text-white" id="loginModalLabel">Login</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 p-4">

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <!-- Username -->
                        <div class="form-floating mb-3">
                            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                            <label>Username</label>
                            <span class="invalid-feedback"><?php echo $username_err; ?></span>
                        </div>
                        <!-- Password -->
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                            <label>Password</label>
                            <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        </div>
                        <!-- Forgot Password -->
                        <div class="form-floating mb-3">
                            <p class="float mt-3"><a href="#" data-bs-toggle="modal" data-bs-target="#signupModal" style="text-decoration: none">Forgot Password?</a></p>
                        </div>
                        <!-- Login -->
                        <div class="d-grid">
                            <input type="submit" class="btn btn-primary rounded-pill" value="SIGN IN">
                        </div>
                        <!-- Register -->
                        <div class="form-floating mb-3">
                            <p class="float-center mt-3">Don't have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#signupModal" style="text-decoration: none">SIGN UP</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign up Modal-->
    <div class="modal" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary p-4">
                    <h5 class="modal-title font-alt text-white" id="signupModalLabel">Sign up</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 p-4">
                    <form name="f1" action = "database/authentication.php" onsubmit = "return validation()" method = "POST">
                        <!-- Username input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="registerUser" name="user" type="text"/>
                            <label for="user">Username</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="registerPass" name="pass" type="password"/>
                            <label for="pass">Password</label>
                        </div>

                        <div class="d-grid"><button class="btn btn-primary rounded-pill" id="registerBtn" type="submit" value="Login">Register</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- External JavaScript-->
    <script src="js/index.js"></script>

    <!-- Forms -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>