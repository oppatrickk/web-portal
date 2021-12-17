<!-- PHP -->
<?php
// Use Mail API
use google\appengine\api\mail\Message;

session_start();

if (isset($_REQUEST['btn_report'])) {

    // Email
    $successMsg = "We have sent your feedback. Thank you!";

    $image_data = file_get_contents($_REQUEST['image']);

    $mail_options = [
        'sender' => 'Support@codex-bu.appspotmail.com',
        'to' => $_REQUEST["email"],
        'subject' => $_REQUEST["title"],
        'htmlBody' => $_REQUEST["concern"]
    ];

    try {
        $message = new Message($mail_options);
        $message->send();
    } catch (InvalidArgumentException $e) {
        echo 'error: ';
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
    <title>codeX | Report Problem</title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="../../css/scroll.css" rel="stylesheet" />

    <!-- Icons -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Forum API -->
    <script src="https://cdn.tiny.cloud/1/7pqbld893t2g9d1ul8wrmm34bu7vb89xc2p28iqfh4vw5e8s/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#desc',
            plugins: 'autoresize',

        });
    </script>

</head>

<body>
<!-- Top Nav Bar-->
<?php
    // Paths
    $navbar_path = "../../index.php";
    $profile_path = "../dashboard/profile.php";
    $settings_path = "../dashboard/settings.php";
    $activity_path = "";
    $logout_path = "../../database/logout.php";
    $login_path = "../login/login.php";
    $redirect_path = "report.php";
    $logo_path = "../../assets/logo2.png";

    // Check if Logged in
    if(!isset($_SESSION['user_login'])){
        include '../../widgets/navbar_nologin.php';
    }
    else{
        include '../../widgets/navbar.php';
    }

?>

<!-- Header -->
<div class="main custom-scrollbar-css">
    <header class="pt-5 pb-5">
        <div class="container pt-5">
            <div class="row align-items-center justify-content-center">
                <div class="col px-5 mb-5">
                    <img src="../../assets/img/report/img1.svg" style="height: 12rem;">
                    <h1 class="mt-5">Report a problem</h1>
                    <p> Your feedback matters to us</p>

                    <form method="post">
                        <div class="form-group mt-4">
                            <label for="exampleInputEmail1">Problem Title</label>
                            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleFormControlTextarea1" class="mb-2">Elaborate Your Concern</label>
                            <textarea class="form-control" id="desc" name="concern" rows="3" style="height:350px"></textarea>
                        </div>

                        <input type="submit" name="btn_report" class="btn btn-outline-danger rounded-pill px-3 mt-4">
                    </form>


                </div>
            </div>
        </div>
    </header>
</div>

<!-- Bootstrap JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- External JavaScript-->
<script src="../../js/scroll.js"></script>

</body>
</html>