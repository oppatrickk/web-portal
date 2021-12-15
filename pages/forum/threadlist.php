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
  <title>CodeX | Community Forum</title>
  <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico">

  <!-- Bootstrap CSS and Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

  <!-- External CSS -->
  <link href="../../css/forum.css" rel="stylesheet" />

  <!-- Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Navbar -->
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
    $login_path = "../login/sign_in.php";
    $register_path = "../login/sign_up.php";



    // Check if the user is logged in
    if(!isset($_SESSION['user_login'])){
        include '../../widgets/navbar_nologin.php';
    }
    else{
        include '../../widgets/navbar.php';
    }

    ?>


    <div class="main custom-scrollbar-css">
    <!-- Categories -->
    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `forum_categories` WHERE category_id=$id";
    $result = $db->query($sql);
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];
    }

    ?>

    <!-- Threads -->
    <?php
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST') {
        //Insert the thread into the database
        $th_title = $_POST['title'];
        $th_desc = $_POST['title'];
        $name = $_SESSION['username'];
        $sql = "INSERT INTO `forum_threads` (`thread_title`, `thread_description`, `thread_cat_id`, `thread_username`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '$name', current_timestamp())";
        $result = $db->query($sql);
    }
    ?>

    <!-- Row 1 -->
    <div class="container my-4">
        <div class="jumbotron">
            <h2>Hello world</h2>
            <p class="display-4">Welcome to <?php echo $catname; ?> Forum</p>
            <hr class="my-4">
            <p><?php echo $catdesc; ?></p>
            <p class="lead">
                <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div> <<?php
        if(isset($_SESSION['user_login']) && $_SESSION['user_login']==true){
            echo '<div class="container">
            <h1 class="py-2">Start a Discussion</h1> 
            <form action="'. $_SERVER["REQUEST_URI"] . '" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Problem Title</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Keep your title as short and crisp as
                        possible</small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Ellaborate Your Concern</label>
                    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>';
        }
        else{
            echo '
        <div class="container">
        <h1 class="py-2">Start a Discussion</h1> 
           <p class="lead">You are not logged in. Please login to be able to start a Discussion</p>
        </div>
        ';
        }
        ?>

        <div class="container">

            <h1 class="py-2">Browse Questions</h1>

            <?php
            $id = $_GET['catid'];
            $sql = "SELECT * FROM `forum_threads` WHERE thread_cat_id=$id";
            $result = $db->query($sql);
            $noResult = true;
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $noResult = false;
                $id = $row['thread_id'];
                $title = $row['thread_title'];
                $desc = $row['thread_description'];
                $time = $row['timestamp'];
                $name = $row['thread_username'];

                echo '<div class="media my-3">
      <img class="mr-3" src="../../assets/img/avatars/default_avatar.png" width="40px" alt="Generic placeholder image">
      <div class="media-body"> 
      <p class="font-weight-bold my-0"><b> Created by ' . $name . ' at ' .$time. '</b></p>
        <h5 class="mt-0"><a class="text-dark" href="thread.php?threadid='  . $id  . '">' . $title . '</a></h5>
        ' . $desc . '
      </div>
    </div>';
            }

            // echo var_dump($noResult);
            if ($noResult) {
                echo '<div class="jumbotron jumbotron-fluid">
              <div class="container">
                  <p class="lead">No Threads Found</p>
                  <p class="lead"> Be the first person to ask a question</p>
              </div>
           </div> ';
            }
            ?>


            <!-- remove later; putting this just to check html allignment-->


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
    </div>


    <!-- Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- External JavaScript-->
    <script src="../../js/scroll.js"></script>


</body>

</html>