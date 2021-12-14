<!-- PHP -->
<?php

include 'database/config.php';

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["user_login"]) || $_SESSION["user_login"] !== true);
else{
    header("location: pages/dashboard/dashboard.php");
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
    <title>codeX</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="css/index.css" rel="stylesheet" />

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>

</head>

<body>
    <!-- Top Navigation Bar-->
    <?php
        // Paths
        $navbar_path = "index.php";
        $login_path = "pages/login/sign_in.php";
        $register_path = "pages/login/sign_up.php";
        $logo_path = "assets/logo2_white.png";

        //include 'widgets/navbar_nologin.php'
    ?>

    <!-- Top Navigation Bar-->
    <nav class="mainNav navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="<?php echo $navbar_path; ?>"><img src="<?php echo $logo_path; ?>" style = "width: 6rem; height: 2rem" alt="logo"></a>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <a class="ms-auto me-4 my-3 my-lg-1 px-3 mb-2 mb-lg-0" href="<?php echo $login_path; ?>" style = "text-decoration: none">
                <span class="d-flex align-items-center">
                    <span class="medium sign-in">Sign in</span>
                </span>
                </a>

                <a class="btn rounded-pill px-3 mb-2 mb-lg-0 sign-btn" href="<?php echo $register_path; ?>">
                <span class="d-flex align-items-center">
                    <span class="medium sign-up">Sign up</span>
                </span>
                </a>


            </div>
        </div>
    </nav>

    <div class="main custom-scrollbar-css">

    <!-- Masthead -->
    <header class="page-header gradient pt-5">
        <div class="container pt-5">
            <div class="row align-items-center justify-content-center">
                <div class="col px-5">
                    <h1 class="mb-4 fw-bold">Learn Basic Programming</h1>
                    <p class="fw-light">Start developing your skills by taking<br>our Tutorials and Challenges</p>
                    <button type="button" class="btn btn-success btn-lg">Join Now</button>
                </div>
                <div class="col-md-5"><img src="assets/img/index/img1.png" alt="Header image" style="height: 20rem"/></div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,154.7C384,149,480,107,576,80C672,53,768,43,864,64C960,85,1056,139,1152,144C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </header>

    <!-- Row 1 | Languages-->
    <section class="languages">
        <div class="container text-center">
            <div class="row g-5">
                <div class="col"><img src="assets/img/index/logo_c.png" alt="Language logo" class="img-fluid" class="img-responsive" width="50%"></div>
                <div class="col"><img src="assets/img/index/logo_html5.png" alt="Language logo" class="img-fluid" class="img-responsive" width="50%"></div>
                <div class="col"><img src="assets/img/index/logo_css3.png" alt="Language logo" class="img-fluid" class="img-responsive" width="35%"></div>
                <div class="col"><img src="assets/img/index/logo_python.svg" alt="Language logo" class="img-fluid" class="img-responsive" width="50%"></div>
            </div>
        </div>
    </section>

    <!-- Row 2 | Features -->
    <section class="feature gradient">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,85.3C96,75,192,53,288,90.7C384,128,480,224,576,240C672,256,768,192,864,149.3C960,107,1056,85,1152,85.3C1248,85,1344,107,1392,117.3L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="assets/img/index/Web Developer_Monochromatic.svg" alt="" />
                </div>

                <div class="col-md-6">
                    <h1 class="my-3 fw-bold">Welcome to codeX!</h1>
                    <p class="my-4">There are countless opportunities to learn new things here</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,202.7C384,181,480,107,576,112C672,117,768,203,864,208C960,213,1056,139,1152,117.3C1248,96,1344,128,1392,144L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>

    <!-- Row 3 | -->
    <section class="icons">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-md-4">
                    <div class="icon gradient mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
                        </svg>
                    </div>
                    <h3>Tutorials</h3>
                    <p>
                        Lorem Ipsum.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="icon gradient mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-ol" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                            <path d="M1.713 11.865v-.474H2c.217 0 .363-.137.363-.317 0-.185-.158-.31-.361-.31-.223 0-.367.152-.373.31h-.59c.016-.467.373-.787.986-.787.588-.002.954.291.957.703a.595.595 0 0 1-.492.594v.033a.615.615 0 0 1 .569.631c.003.533-.502.8-1.051.8-.656 0-1-.37-1.008-.794h.582c.008.178.186.306.422.309.254 0 .424-.145.422-.35-.002-.195-.155-.348-.414-.348h-.3zm-.004-4.699h-.604v-.035c0-.408.295-.844.958-.844.583 0 .96.326.96.756 0 .389-.257.617-.476.848l-.537.572v.03h1.054V9H1.143v-.395l.957-.99c.138-.142.293-.304.293-.508 0-.18-.147-.32-.342-.32a.33.33 0 0 0-.342.338v.041zM2.564 5h-.635V2.924h-.031l-.598.42v-.567l.629-.443h.635V5z"/>
                        </svg>
                    </div>
                    <h3>Challenges</h3>
                    <p>
                        Lorem Ipsum.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="icon gradient mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic-fill" viewBox="0 0 16 16">
                            <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z"/>
                            <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                    </div>
                    <h3>Community</h3>
                    <p>Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Row 4 | -->
    <section class="services gradient">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-5 mt-5">
                    <h1>Enhance your skills</h1>
                    <p>Challenge yourself by taking on some of the coding exercise that we have provided for you. By partaking on our tutorials, we will guide you through the basics of learning C Language.</p>
                </div>
                <div class="col-md-6 mt-5 pt-5"><img src="assets/img/index/Information carousel_Monochromatic.svg" alt=""></div>
                <div class="col-md-6"><img src="assets/img/index/Progress _Monochromatic.png" alt=""></div>
                <div class="col-md-5">
                    <h1>Receive Feedbacks</h1>
                    <p>Solve the given exercise using C Languange and test your program to see your progress in our system. Present your questions regarding to possible difficulties you might encounter.</p>
                </div>
                <div class="col-md-5">
                    <h1>Obtain ranks and be part of the leaderboard</h1>
                    <p>Coding exercises are ranked from beginner to hardcore difficulty. As you complete higher difficulty, you will be able to progress through the ranks, pushing your capabilities in coding to your highest potential.</p>
                </div>
                <div class="col-md-6"><img src="assets/img/index/Ranking_Monochromatic.png" alt=""></div>
                <div class="col-md-6 pb-5 mb-5"><img src="assets/img/index/Video call_Monochromatic.svg" alt=""></div>
                <div class="col-md-5 mb-5">
                    <h1>Compare insights</h1>
                    <p>Compare your answers with others to further enhance your understanding on language. Discuss with others how and what you and they can do to improve their skills in coding. Watch how others solve the same problem as you with a different
                        solution.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <?php
        // Paths
        $about_path = "";
        $founders_path = "pages/footer/founders.php";
        $forum_path = "pages/forum/forum.php";
        $report_path = "pages/footer/report.php";
        $logo_path = "assets/logo2_white.png";

        include 'widgets/footer.php'

    ?>
    </div>

    <!-- Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- External JavaScript-->
    <script src="js/index.js"></script>

</body>
</html>