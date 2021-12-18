<!-- PHP -->
<?php

// Include config file
require_once "../../../database/config.php";

// Initialize the session
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>codeX | C Lecture 0</title>
    <link rel="icon" type="image/x-icon" href="../../../assets/favicon.ico">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="../../../css/lecture0.css" rel="stylesheet" />


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

<?php
// Paths
$navbar_path = "../../dashboard/dashboard.php";
$logout_path = "../../../database/logout.php";
$login_path = "../../login/sign_in.php";
$register_path = "../../login/sign_up.php";
$profile_path = "../../dashboard/profile.php";
$logo_path = "../../../assets/logo2.png";
$settings_path = "../../dashboard/settings.php";
$activity_path = "../../dashboard/activity.php";

// Check if the user is logged in
if(!isset($_SESSION['user_login'])){
    include '../../../widgets/navbar_nologin.php';
}
else{
    include '../../../widgets/navbar.php';
    include '../../../widgets/verify.php';
}

?>

<div class="main custom-scrollbar-css">
<!-- Row 1 -->
<header class="masthead">
    <div class="container h-100 mt-1 mb-1">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center mt-5">

            </div>
        </div>
    </div>
</header>

    <div class="container mt-5">
        <h1>HTML Tutorials</h1>

        <p > <center>HTML stands for Hyper Text Markup Language</center></p>
    </div>

    <div class="container mt-5">
        <h2>Why learn HTML?</h2>
        <hr>
        <u1>
            <p>This HTML tutorial is for absolute beginners so it is written in a simple way so that students don't
                get confuse. We have given an example for every topic and concept with proper details about correct
                output of the code and legit HTML code which students can copy and can download also. We have also
                provided an Online HTML editor so that you can practice stuff you learn in this HTML tutorial.<br><br>

                By the end of this HTML tutorial, we are sure that you will become comfortable with HTML and would
                start creating your own website structures. Although to make an attractive and beautiful website
                you have to learn some other technologies also like CSS and JavaScript but HTML is the base for
                everything. Just follow our guidelines step by step in this HTML tutorial to start your journey
                into Website development. </p>
        </u1>
    </div>
    <div class="container">
        <h2 class="page-header mt-5">What This Tutorial Covers?</h2><hr>
        <u1>
            <p>This HTML tutorial covers all the basics and also the advance features of HTML, like various HTML tags,
                their attributes, values for the attributes, etc. You will learn about the various ways of formatting
                the text, adding Style to the webpage, adding the Scripts to the webpage, inserting images, lists,
                forms and so on.<br><br>

                If we categorize this HTML tutorial then, in basics you will learn tags like of HTML forms,
                HTML table, HTML list, etc. Once you're familiar with the basics, we'll learn about the advance
                part of HTML which mostly contains HTML5 elements. HTML5 elements provide some advanced features
                like HTML graphics,HTML datalist, etc. which we will study later in the tutorial
            </p>
        </u1>
    </div>
    <div class="container">
        <h2 class="page-header mt-5">Prerequisites</h2><hr>
        <ul>
            <p>Before proceeding to the HTML tutorial or web designing course, we here are assuming that you
                atleast have a basic knowledge of using windows or any other operating system, i.e. you are
                familiar with-
            <li>Experience with any HTML editor like Notepad, Notepad++, Edit plus, etc. A good
                HTML editor will keep your HTML code clean and in an organized format. These modern
                editors can keep an eye on your coding errors also and can give you warnings about it, it
                increases programmers efficiency and makes it less stressful for them because trust us,
                finding an error is a headache sometimes. These can also give you a preview of the webpage
                you created, based on your code, it gives you an idea of how your webpage will get displayed
                on a browser.</li><br>
            <li>Creation and deletion of folders and files on computer.</li><br>
            <li>Editing and saving the changes in a file.</li>
            <br>
            To begin web designing, you need only two things: a simple-text editor to write html code and
            a simple web browser. Write your code in the editor and save the HTML file with a
            <p style="color: red">.html</p>
            or <p style="color: red">.htm</p>
            extension and then open it in a browser to see the output of your HTML code.<br><br>

            <h2><b> Here are the links to download some HTML editors:</b></h2> <br>
            <div class="button">
                <button onclick="myFunction()"><h4>HTML-Kit</h4></button>
                <script>
                    function myFunction(){
                        location .replace("http://www.htmlkit.com/")
                    }
                </script>
            </div><br>
            <div class="button">
                <button onclick="myFunction()"><h4>Visual Studio Code</h4></button>
                <script>
                    function myFunction(){
                        location .replace("https://code.visualstudio.com/")
                    }
                </script>
            </div><br>
            <div class="button">
                <button onclick="myFunction()"><h4>Notepad++</h4></button>
                <script>
                    function myFunction(){
                        location .replace("https://notepad-plus-plus.org/")
                    }
                </script>
            </div><br>
            <div class="button">
                <button onclick="myFunction()"><h4>Bluefish</h4></button>
                <script>
                    function myFunction(){
                        location .replace("https://bluefish.openoffice.nl/index.html")
                    }
                </script>
            </div><br>
            <div class="button mb-5">
                <button onclick="myFunction()"><h4>Sublime</h4></button>
                <script>
                    function myFunction(){
                        location .replace("https://www.sublimetext.com/3")
                    }
                </script>
            </div>
        </ul>

        <div class="information"></div>
    </div>

<!-- Footer-->
<?php
// Paths
$c_path = "c_dashboard.php";
$html_path = "../html/html_dashboard.php";
$css_path = "../tutorial_dashboard";
$python_path = "../python/python_dashboard.php";

$founders_path = "../../footer/founders.php";
$logo_path = "../../../assets/logo2_white.png";
$report_path = "../../footer/report.php";

include '../../../widgets/footer.php'

?>
</div>

<!-- Bootstrap JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- External JavaScript-->

<script src="../../../js/scroll.js"></script>

</body>
</html>