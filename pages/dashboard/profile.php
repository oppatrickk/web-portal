<!-- PHP -->
<?php

include '../../database/config.php';

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login/login.php");
    exit;
}
$id = htmlspecialchars($_SESSION["id"]);

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


    <!-- Assets -->


</head>

<body>
<!-- Top Navigation Bar -->
<?php
    // Paths
    $navbar_path = "dashboard.php";
    $logout_path = "../../database/logout.php";
    $profile_path = "profile.php";
    $tutorials_path = "../tutorials/tutorial_dashboard.php";
    $forums_path = "../forum/forum.php";
    $logo_path = "../../assets/logo2.png";

    include '../../widgets/navbar.php';

?>

<!-- Sidebar -->


<!-- Row 1 -->
<header class="masthead">
    <div class="container h-100 mt-5 mb-5">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center mt-5">
                <h1>Web Portal Project</h1>
                <p class="lead">Profile Page</p>
            </div>
        </div>
    </div>
</header>

<!-- Row 2 | Profile-->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="fw-light"><?php echo htmlspecialchars($_SESSION["username"]); ?></h2>

        <div class="container">
            <div class="row">
                <div class="col col-sm-2">
                    <?php
                    // Get image from the database
                    $query = $link->query("SELECT * FROM images where `username` = '$id'");

                    if($query->num_rows > 0){
                        if($row = $query->fetch_assoc()){
                            $imageURL = '../../assets/img/avatars/'.$row["file_name"];
                            ?>
                            <img src="<?php echo $imageURL; ?>" style="height: 128px; width: 128px" alt="" />

                        <?php }
                    }
                    else{ ?>
                    <img src="../../assets/img/avatars/default_avatar.png" style="height: 128px; width: 128px" class="rounded-circle">
                    <?php } ?>

                </div>
                <div class="col col-sm-5">
                    <p>First name, Last Name</p>
                    <p>Email</p>
                </div>

                <div class="mt-5">
                    <form action="../../database/upload.php" method="post" enctype="multipart/form-data">
                        Select Image File to Upload:
                        <br>
                        <input type="file" name="file">
                        <input type="submit" name="submit" value="Upload">
                    </form>
                </div>
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

<!-- Bootstrap JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- External JavaScript-->
<script src="../../js/dashboard.js"></script>

<!-- Forms -->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>