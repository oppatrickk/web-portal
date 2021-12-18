<!-- PHP -->
<?php

include 'database/config.php';

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["user_login"]) || $_SESSION["user_login"] !== true);
else{

    if ($cloud == 1){
        switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
            case '/':
                header("Location: /pages/dashboard/dashboard.php");
                break;
            default:
                http_response_code(404);
                exit('Not Found');
        }
    }
    else{
        header("location: pages/dashboard/dashboard.php");
        exit;
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
    <link href='https://fonts.googleapis.com/css?family=Bebas Neue' rel='stylesheet'>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <!-- Top Navigation Bar-->
    <?php
        // Paths
        $navbar_path = "index.php";
        $login_path = "pages/login/sign_in.php";
        $register_path = "pages/login/sign_up.php";
        $redirect_path = "pages/dashboard/dashboard.php";
        $logo_path = "assets/logo2.png";

        //include 'widgets/navbar_nologin.php'
    ?>

    <!-- Modal Forms -->
    <?php

    include_once "database/login.php";
    include_once "database/register.php";
    include_once "database/recover.php";

    if(isset($_SESSION["keep_login"])){
    ?>
        <script type="text/javascript">

            $(window).on('load', function () {
                $('#loginModal').modal('show');
            });

        </script>

    <?php unset($_SESSION["keep_login"]); }

    else if(isset($_SESSION["keep_register"])){
    ?>
        <script type="text/javascript">

            $(window).on('load', function () {
                $('#registerModal').modal('show');
            });

        </script>
    <?php unset($_SESSION["keep_register"]); }
    else if(isset($_SESSION["keep_forget"])){
        ?>
        <script type="text/javascript">

            $(window).on('load', function () {
                $('#forgotModal').modal('show');
            });

        </script>

    <?php unset($_SESSION["keep_forget"]); }?>

    <nav class="mainNav navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="<?php echo $navbar_path; ?>"><img src="<?php echo $logo_path; ?>" style = "width: 6rem; height: 2rem" alt="logo"></a>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <!-- Sign In -->
                <btn class="btn btn-link ms-auto me-4 my-3 my-lg-1 px-3 mb-2 mb-lg-0"
                     data-bs-toggle="modal"
                     data-bs-target="#loginModal"
                     style = "text-decoration: none">
                    <span class="d-flex align-items-center">
                        <span class="medium sign-in">Sign in</span>
                    </span>
                </btn>

                <!-- Register -->
                <btn class="btn rounded-pill px-3 mb-2 mb-lg-0 sign-btn"
                     data-bs-toggle="modal"
                     data-bs-target="#registerModal">
                <span class="d-flex align-items-center">
                    <span class="medium sign-up">Sign up</span>
                </span>
                </btn>
            </div>
        </div>
    </nav>

    <!-- Include Modals -->
    <?php

    $logo_path = "assets/logo1.png";

    include "widgets/modals.php"; ?>

    <!-- Main Body -->
    <div class="main custom-scrollbar-css">

    <!-- Masthead -->
    <header class="page-header gradient pt-5">
        <div class="container pt-5">
            <div class="row align-items-center justify-content-center">
                <div class="col px-5">
                    <h1 class="mb-4 fw-bold">Learn Medium Programming</h1>
                    <p class="fw-light">Start developing your skills by taking<br>our Tutorials and Challenges</p>
                    <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal"
                            data-bs-target="#registerModal">Join Now</button>
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
    <section class="gradient feature">
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
            <div class="row text-center justify-content-center align-items-center">
                <div class="row my-4 p-5 m-5">

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
    </section>

    <!-- Row 4 | -->
    <section class="services gradient">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,85.3C96,75,192,53,288,90.7C384,128,480,224,576,240C672,256,768,192,864,149.3C960,107,1056,85,1152,85.3C1248,85,1344,107,1392,117.3L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

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
        $c_path = "pages/tutorials/c/c_dashboard.php";
        $html_path = "pages/tutorials/html/html_dashboard.php";
        $css_path = "pages/tutorials/tutorial_dashboard";
        $python_path = "pages/tutorials/python/python_dashboard.php";

        $founders_path = "pages/footer/founders.php";
        $forums_path = "pages/forum/forum.php";
        $logo_path = "assets/logo2_white.png";
        $report_path = "pages/footer/report.php";

        include 'widgets/footer.php'

    ?>
    </div>

    <!-- Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- External JavaScript-->
    <script src="js/index.js"></script>

</body>
</html>