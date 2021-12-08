<!-- PHP -->
<?php
// Initialize the session
session_start();

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
    <title>codeX | Founders</title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="../../css/founders.css" rel="stylesheet" />

    <!-- Icons -->

    <!-- Fonts -->


    <!-- Assets -->


</head>

<body>
    <!-- Top Navigation Bar-->
    <?php
        // Paths
        $navbar_path = "../../index.php";
        $profile_path =  "profile.php";
        $settings_path =  "";
        $activity_path =  "";
        $logout_path = "../../database/logout.php";
        $redirect_path = "founders.php";

        // Check if the user is logged in
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            include '../../widgets/navbar_nologin.php';
        }
        else{
            include '../../widgets/navbar.php';
        }

    ?>

    <div class="about-section">
        <h1>About Us</h1>
        <p>Everyone says it, but in our case it’s true: our team is the secret to our success. Each of member is amazing
            in their own right, but together we are what makes CodeX such a fun and rewarding piece of work. The CodeX
            team is a tight-knit, talented group with a shared vision of delivering a website that can give new and old
            programmers a place to hangout. <br> We’re very proud of the team we’ve built – there’s only five of us now
            but it still feels like it did when there were just a few of us. CodeX has always been a team defined by
            bringing together talented people with a shared vision and passion for helping us to be the best we can be
            for our clients. But that doesn’t mean CodeX is a cookie-cutter Team. WE at CodeX are unique individuals who
            are united by a set of core values that apply to everything we do within the team. </p>
    </div>

    <h1 style="text-align:center">MEET THE TEAM</h1>
    <div class="row">
        <!-- Founder 1 -->
        <div class="column">
            <div class="card">
                <img src="" alt="Patrick" style="width:100%">
                <div class="container">
                    <h2>John Patrick Prieto</h2>
                    <p class="title">Founder/Programmer</p>
                    <p>"Description"</p>
                    <p>johnpatrickmanguerra.prieto@bicol-u.edu.ph</p>
                    <p>
                        <button class="button"><a class="nav-link me-lg-3" href="https://www.facebook.com/prietopat">Contact
                        </button>
                    </p>
                    </a>
                </div>
            </div>
        </div>
        <!-- Founder 2 -->
        <div class="column">
            <div class="card">
                <img src="" alt="Lorence" style="width:100%">
                <div class="container">
                    <h2>Jhon Lorence Francisco</h2>
                    <p class="title">Founder/Programmer</p>
                    <p>"Description"</p>
                    <p>Email</p>
                    <p>
                        <button class="button"><a class="nav-link me-lg-3" href="https://www.facebook.com/jhonlorence.francisco.9">Contact
                        </button>
                    </p>
                    </a>
                </div>
            </div>
        </div>
        <!-- Founder 3 -->
        <div class="column">
            <div class="card">
                <img src="" alt="Mynard" style="width:100%">
                <div class="container">
                    <h2>John Mynard A. Raro</h2>
                    <p class="title">Founder/Programmer</p>
                    <p>Description</p>
                    <p>email</p>
                    <p>
                        <button class="button"><a class="nav-link me-lg-3" href="https://www.facebook.com/CaliBur01/">Contact
                        </button>
                    </p>
                    </a>
                </div>
            </div>
        </div>
        <!-- Founder 4 -->
        <div class="column">
            <div class="card">
                <img src="/w3images/team2.jpg" alt="Malven" style="width:100%">
                <div class="container">
                    <h2>Malven Guiriba</h2>
                    <p class="title">Founder/Programmer</p>
                    <p>Description</p>
                    <p>Email</p>
                    <p>
                        <button class="button"><a class="nav-link me-lg-3" href="https://www.facebook.com/boy.guiriba.1">Contact</button>
                    </p>
                    </a>
                </div>
            </div>
        </div>
        <!-- Founder 5 -->
        <div class="column">
            <div class="card">
                <img src="" alt="John" style="width:100%">
                <div class="container">
                    <h2>John Joseph Jasareno</h2>
                    <p class="title">Founder/Programmer</p>
                    <p>Description</p>
                    <p>Email</p>
                    <p>
                        <button class="button"><a class="nav-link me-lg-3" href="https://www.facebook.com/josef.jasareno">Contact</button>
                    </p>
                    </a>
                </div>
            </div>
        </div>
        <!-- Founder 6 -->
        <div class="column">
            <div class="card">
                <img src="" alt="John" style="width:100%">
                <div class="container">
                    <h2>Ryan Clavo</h2>
                    <p class="title">Founder/Programmer</p>
                    <p>Description</p>
                    <p>Email</p>
                    <p>
                        <button class="button"><a class="nav-link me-lg-3"
                                                  href="https://www.facebook.com/josef.jasareno">Contact</button>
                    </p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-->
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
    <script src="js/scripts_index.js"></script>

    <!-- Forms -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>
