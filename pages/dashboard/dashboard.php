<!-- PHP -->
<?php

include '../../database/config.php';

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["user_login"]) || $_SESSION["user_login"] !== true){
    header("location: ../../index.php");
    exit;
}

if ($cloud == 1){

    header("Location:https://codex-bu.appspot.com/pages/dashboard/dashboard.php");
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

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>


</head>

<body>
    <!-- Top Navigation Bar -->
    <?php
        // Paths
        $navbar_path = "dashboard.php";
        $profile_path =  "profile.php";
        $settings_path =  "settings.php";
        $activity_path =  "activity.php";
        $logout_path = "../../database/logout.php";
        $tutorials_path = "../tutorials/tutorial_dashboard.php";
        $forums_path = "../forum/forum.php";
        $logo_path = "../../assets/logo2.png";
        $challenges_path = "../challenges/challenges_dashboard.php";

        include '../../widgets/navbar.php';



        ?>

    <div class="main custom-scrollbar-css">
    <!--Header-->
    <header class="page-header gradient pb-5 pt-5">
        <div class="container pt-3 pb-3">
            <div class="row align-items-center">
                <div class="col-md-8 px-5">
                    <h1 class="mb-4 fw-bolder">Welcome to codeX!</h1>
                    <p class="fw-lighter">Start developing your skills by taking on challenges <br>that you and your friends will be facing on.</p>
                    <div class="card mt-5" style="width: 30rem;">
                        <div class="card-body bg-transparent text-black">
                            <b>printf("Hello, <?php echo htmlspecialchars($_SESSION["username"])?>!");</b>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 "><img src="../../assets/img/dashboard/img1.svg" alt="Header image" style="width: 125%;"/>
                </div>
            </div>
        </div>
    </header>

    <!--Main Section-->
    <div class="row align-items-center justify-content-around mt-5">
        <div class="col-md-4">


            <div class="col-md-12">

                <!--Community Section-->


                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <!--Forum Post Section-->

                </div>
                <div class="mb-5">

                </div>
            </div>

        </div>

        <!--Program Section-->
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <div class="container my-4" id="ques">
                        <a href="../forum/forum.php" style="text-decoration: none; color: black " ><h2 class="text-center my-4 mt-5">CodeX Forum Categories</h2></a>
                        <div class="row my-4">

                            <!-- Fetch all the categories and use a loop to iterate through categories -->
                            <?php
                            $sql = "SELECT * FROM `forum_categories`";
                            $result = $db->query($sql);
                            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

                                $id = $row['category_id'];
                                $cat = $row['category_name'];
                                $desc = $row['category_description'];
                                echo '<div class="col my-2">
                      <div class="card" style="width: 12rem;">
                          <img src="../../assets/img/forum/' . $cat . '.jpg"
                           class="card-img-top" alt="image for this category">
                          <div class="card-body">
                              
                              <p class="card-text" style=" font-size: 12px;">' . substr($desc, 0, 90) . ' </p>
                              <a href="../forum/Threadlist.php?catid=' . $id . '" class="btn btn-primary mt-3">View Threads</a>
                          </div>
                      </div>
                    </div>';
                            }
                            ?>

                        </div>
                    </div>
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
        $founders_path = "../footer/founders.php";
        $faqs_path = "";
        $contact_path = "";
        $report_path = "../footer/report.php";
        $logo_path = "../../assets/logo2_white.png";
        $forums_path = "../forum/forum.php";


        include '../../widgets/footer.php';



    ?>
    </div>

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

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- External JavaScript-->
    <script src="../../js/dashboard.js"></script>

    <!-- Forms -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>