<!-- PHP -->
<?php

// Initialize the session
session_start();

include '../../database/config.php';

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../index.php");
    exit;
}

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

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="../../css/dashboard.css" rel="stylesheet"/>

    <!-- Icons -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>

    <!-- Assets -->


</head>

<body>
    <!-- Top Navigation Bar -->
    <?php
        // Paths
        $navbar_path = "dashboard.php";
        $profile_path =  "profile.php";
        $settings_path =  "";
        $activity_path =  "";
        $logout_path = "../../database/logout.php";
        $tutorials_path = "../tutorials/tutorial_dashboard.php";
        $forums_path = "../forum/forum.php";
        $logo_path = "../../assets/logo2.png";

        include '../../widgets/navbar.php';

        ?>

    <!--Header-->
    <header class="page-header gradient pb-5 pt-5">
        <div class="container pt-3 pb-3">
            <div class="row align-items-center">
                <div class="col-md-8 px-5">
                    <h2 class="mb-4">Welcome to codeX, <?php echo htmlspecialchars($_SESSION["username"])?>!</h2>
                    <p>Start developing your skills by taking on challenges that you and your friends will be facing on.</p>
                    <div class="card" style="width: 30rem;">
                        <div class="card-body bg-transparent text-black">
                            <b>Lorem Ipsum</b>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 "><img src="../../assets/img/dashboard/header.svg " alt="Header image " />
                </div>
            </div>
        </div>
    </header>

    <!--Main Section-->
    <div class="row align-items-center justify-content-around mt-5">
        <div class="col-md-4">

            <div class="btn-group" role="group" aria-label="Basic outlined example">
                <a type="button" class="btn btn-outline-primary" href="../tutorials/tutorial_dashboard.php"><img src="../../assets/img/dashboard/Video tutorial _Outline.svg" width="100%"><br>Start your day with some <b>Tutorials</b>.</a>
                <button type="button" class="btn btn-outline-primary"><img src="../../assets/img/dashboard/Competition_Flatline.svg" width="100%"><br>Take on others through <b>Challenges</b>.</button>
                <a type="button" class="btn btn-outline-primary" href="../forum/forum.php"><img src="../../assets/img/dashboard/Group Video Call_Outline.svg" width="100%"><br>Seek assistance with our <b>Community</b>.</a>
            </div>
            <div class="col-md-12">

                <!--Community Section-->
                <h2 class="my-4" style="text-align:center">Community Forum</h2>
                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <!--Forum Post Section-->
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">(Linked Forum)</h5>
                                <p class="card-text">Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">(Linked Forum)</h5>
                                <p class="card-text">Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">(Linked Forum)</h5>
                                <p class="card-text">Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <a href="#" style="text-decoration: none;">
                        <b>See all community forums </b><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg></a>
                </div>
            </div>
        </div>

        <!--Program Section-->
        <div class="col-md-4">
            <div class="card text-center border-primary">
                <div class="card-header">
                    <img src="../../assets/img/dashboard/Programming Languages.png" width="50%">
                </div>
                <div class="card-body">
                    <p class="card-text"><b><h4>You haven't joined any program.</h4></b></p>
                    <p>Choose any of the following programming languages we have prepared for you, Start your adventure on becoming a programmer.</p>
                    <button type="button" class="btn btn-outline-primary"><b>Start now!</b></button>
                </div>
            </div>
        </div>
    </div>

    <!--Evaluation-->
    <section class="services gradient mt-5 pt-5 pb-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-5">
                    <h1>Quizzes</h1>
                    <p>Assess yourself on how wide is your current knowledge on the programming language you have chosen. This way you can choose to start on something you might have difficulties.</p>
                    <a class="btn btn-primary" href="#" role="button">Start now!</a>
                </div>
                <div class="col-md-6"><img src="../../assets/img/dashboard/Online research_Flatline.svg" alt=""></div>
                <div class="col-md-6"><img src="../../assets/img/dashboard/Team presentation _Flatline.svg" alt=""></div>
                <div class="col-md-5">
                    <h1>Exercises</h1>
                    <p>Try and give it a shot on some of our example Exercises that we have provided that can help you give some hints and tips on the programming track you have chosen.</p>
                    <a class="btn btn-primary" href="#" role="button">Start now!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <?php
        // Paths
        $about_path = "";
        $founders_path = "";
        $faqs_path = "";
        $contact_path = "";

        include '../../widgets/footer.php'

    ?>

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