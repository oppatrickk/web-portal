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
    <title>CodeX Community Forum</title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="../../css/forum.css" rel="stylesheet"/>

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body>
  <!-- Navbar -->
  <?php
  // Paths
  $navbar_path = "../../index.php";
  $profile_path = "profile.php";
  $settings_path = "";
  $activity_path = "";
  $logout_path = "../../database/logout.php";
  $redirect_path = "thread.php";
  $logo_path = "../../assets/logo2.png";
  $login_path = "../login/sign_in.php";
  $register_path = "../login/sign_up.php";
  $forum_path = "forum.php";
  $challenges_path = "../challenges/challenges_dashboard.php";

  // Check if the user is logged in
  if (!isset($_SESSION["user_login"]) || $_SESSION["user_login"] !== true) {
      include '../../widgets/navbar_nologin.php';
  } else {
      include '../../widgets/navbar.php';
      include '../../widgets/verify.php';
  }

  ?>

  <div class="main custom-scrollbar-css">

  <?php
  $id = $_GET['threadid'];
  $sql = "SELECT * FROM `forum_threads` WHERE thread_id=$id";
  $result = $db->query($sql);

  $noResult = true;
  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $noResult = false;
    $title = $row['thread_title'];
    $desc = $row['thread_description'];
    $username = $row['thread_username'];
    $timestamp = $row['timestamp'];
  }

  ?>

  <?php
  $method = $_SERVER['REQUEST_METHOD'];
  if($method=='POST'){
      //Insert the comment into the database

      $comment = $_POST['comment'];
      $name = $_SESSION['username'];
      $sql = "INSERT INTO `forum_comments` (`comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$comment', '$id', '$name',current_timestamp()) ";
      $result = $db->query($sql);
  }
  ?>

  <div class="container my-4">
    <div class="jumbotron">
      <h1 class="lead">Hello, world!</h1>
      <p class="display-4 mt-5"><?php echo $title; ?> </p>
      <hr class="my-4">
        <p><b><?php echo $username; ?> / <?php echo $timestamp; ?> </b></p>
      <p><?php echo $desc; ?></p>
      <p class="lead">

      </p>
    </div>
  </div>



  <div class="container">

    <h1 class="py-2">Discussion</h1>

      <section class="mb-5">
          <div class="card bg-light">
              <div class="card-body">
                  <!-- Comment form-->
                  <?php
                  if(isset($_SESSION['user_login']) && $_SESSION['user_login']==true){
                      echo '<div class="container mb-5">
        <form action= "'. $_SERVER['REQUEST_URI'] . '" method="post"> 
            <div class="form-group">
                <textarea class="form-control" rows="3" id="comment" name="comment" placeholder="Join the discussion and leave a comment!"></textarea>
            </div>
            <button type="submit" class="btn btn-success mt-2">Post Comment</button>
        </form> 
    </div>';
                  }
                  else{
                      echo '   
        <div class="container">
           <p class="lead"><textarea class="form-control" rows="3" placeholder="You are not logged in. Please login to be able to post comments."></textarea></p>
        </div>
        ';
                  }
                  ?>

                  <?php
                  $id = $_GET['threadid'];
                  $sql = "SELECT * FROM `forum_comments` WHERE thread_id=$id";
                  $result = $db->query($sql);
                  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                      $id = $row['comment_id'];
                      $content = $row['comment_content'];
                      $date = $row['comment_time'];
                      $comment_time = $date ;
                      $comment_by = $row['comment_by'];

                      echo '
                            <div class="d-flex mb-4">
                      <div class="flex-shrink-0"><img class="rounded-circle" src="../../assets/img/avatars/default_avatar.png" width="40px" alt="Generic placeholder image" /></div>
                      <div class="ms-3">
                          <div class="fw-bold">'.$comment_by.' | '.$comment_time.'</div>
                          ' . $content . '
                      </div>
                  </div>';
                  }

                  // echo var_dump($noResult);
                  if ($noResult) {
                      echo '<div class="jumbotron jumbotron-fluid">
          <div class="container">
              <p class="lead">No Comments Found</p>
              <p class="lead"> Be the first person to ask a question</p>
          </div>
       </div> ';
                  }
                  ?>

                  <!-- Single comment-->


              </div>
          </div>
      </section>

  </div>

    <!-- Footer -->
      <?php
      // Paths
      $navbar_path = "../dashboard/dashboard.php";
      $logout_path = "../../database/logout.php";
      $login_path = "../login/sign_in.php";
      $register_path = "../login/sign_up.php";
      $profile_path = "../dashboard/profile.php";
      $logo_path = "../../assets/logo2.png";
      $settings_path = "../dashboard/settings.php";
      $activity_path = "../dashboard/activity.php";


      include '../../widgets/footer.php'

      ?>

  </div>
      <!-- Bootstrap JavaScript-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

      <!-- External JavaScript-->
      <script src="../../js/scroll.js"></script>

</body>

</html>