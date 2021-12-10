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
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">

  <!-- Assets -->

  <!-- External CSS -->
  <link rel="stylesheet" href="../../css/forum.css">
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

  // Check if the user is logged in
  if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
      include '../../widgets/navbar_nologin.php';
  } else {
      include '../../widgets/navbar.php';
  }

  ?>


  <?php
  $id = $_GET['threadid'];
  $sql = "SELECT * FROM `threads` WHERE thread_id=$id";
  $result = mysqli_query($link, $sql);
  $noResult = true;
  while ($row = mysqli_fetch_assoc($result)) {
    $noResult = false;
    $title = $row['thread_title'];
    $desc = $row['thread_description'];
  }

  ?>
  
  <?php
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
      //Insert the comment into the database
      $comment = $_POST['comment'];
      $sql = "INSERT INTO `comments` (`comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$comment', '$id', '0',current_timestamp()) ";
      $result = mysqli_query($conn, $sql);
    }
  ?>

  <div class="container my-4">
    <div class="jumbotron">
      <h1 class="lead">Hello, world!</h1>
      <p class="display-4"><?php echo $title; ?> </p>
      <hr class="my-4">
      <p><?php echo $desc; ?></p>
      <p class="lead">
      <p><b>Posted By : <?php echo htmlspecialchars($_SESSION["username"]); ?></b></p>
      </p>
    </div>
  </div>

  <?php 
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){ 
    echo '<div class="container">
        <h1 class="py-2">Post a Comment</h1> 
        <form action= "'. $_SERVER['REQUEST_URI'] . '" method="post"> 
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Type your comment</label>
                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                <input type="hidden" name="sno" value="'. $_SESSION["sno"]. '">
            </div>
            <button type="submit" class="btn btn-success">Post Comment</button>
        </form> 
    </div>';
    }
    else{
        echo '   
        <div class="container">
        <h1 class="py-2">Post a Comment</h1> 
           <p class="lead">You are not logged in. Please login to be able to post comments.</p>
        </div>
        ';
    }
    ?>



  <div class="container">
   <?php
          $id = $_GET['threadid'];
          $sql = "SELECT * FROM `comments` WHERE thread_id=$id";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['comment_id'];
            $content = $row['comment_content'];
            $comment_time = $row['comment_time'];

            echo '<div class="media my-3">
      <img class="mr-3" src="assets/Default User.jpg" width="40px" alt="Generic placeholder image">
      <div class="media-body">
      <p class="font-weight-bold my-0"><b> Asked by a Anonymous User at ' .$comment_time. '</b></p>
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

  <!-- Bootstrap JavaScript-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- External JavaScript-->
  <script src="js/index.js"></script>

  <!-- Forms -->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>
