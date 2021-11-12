<!-- PHP -->
<?php

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login/login.php");
    exit;
}

// Paths
$navbar_path = "dashboard.php";
$logout_path = "../../database/logout.php";
$profile_path =  "profile.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>codeX | Dashboard</title>
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
    <?php include '../../widgets/navbar.php'; ?>

    <!-- Sidebar -->


    <!-- Row 1 -->
    <header class="masthead">
        <div class="container h-100 mt-5 mb-5">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center mt-5">
                    <h1>Web Portal Project</h1>
                    <p class="lead">Dashboard Page</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Row 2 | Tutorials-->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-light">Tutorials</h2>
            <div class="card mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">C Programming</h5>
                    <p class="card-text">Learn the basics of C programming</p>
                    <a href="../tutorials/c/c_dashboard.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Row 3 | Challenges-->
    <section class="py-5 bg-white">
        <div class="container">
            <h2 class="fw-light">Challenges</h2>
            <div class="card mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Sudoku Checker</h5>
                    <p class="card-text">Sudoku is a popular single player game.</p>
                    <a href="#" class="btn btn-primary">Open Problem</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Row 4 | Forums -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-light">Forums</h2>
            <div class="card mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Get Help</h5>
                    <p class="card-text">Ask your fellow programmers</p>
                    <a href="#" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <?php include '../../widgets/footer.php' ?>

    <!-- Feedback Modal-->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bootstrap 5 Modal Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe" />
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <div class="modal-footer d-block">
                            <p class="float-start">Not yet account <a href="#">Sign Up</a></p>
                            <button type="submit" class="btn btn-warning float-end">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- External JavaScript-->
    <script src="../../js/dashboard.js"></script>

    <!-- Forms -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>