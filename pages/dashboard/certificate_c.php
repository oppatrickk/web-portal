<?php

include '../../database/config.php';

// Initialize the session
session_start();

if(!isset($_SESSION['user_login'])){
    header("../../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>codeX | C Certificate</title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="../../css/certificate_c.css" rel="stylesheet"/>

    <!-- Icons -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>


    <!-- Assets -->


</head>

<body>

<center class="mt-5">
     <div style="width:1000px; height:700px; padding:20px; text-align:center; border: 10px solid #787878">
         <div style="width:940px; height:640px; padding:20px; text-align:center; border: 5px solid #787878">
             <img src="../../assets/logo2.png" style="width: 6rem; height=2rem;"><br>
             <p style="font-size:14px" class="mt-4">codeX congratulates</p>
             <span style="font-size:50px; font-weight:bold"><?php echo $_SESSION["first_name"] . " " . $_SESSION["last_name"]?></span>
             <br><br>
             
             <span style="font-size:18px">on completion of</span> <br/><br/>
             <span style="font-size:30px"><b>C Programming</b></span> <br/><br/>
             <span style="font-size:18px">December 14, 2021</span> <br/><br/>

             <br><br>
             <img src="../../assets/img/certificate/c.png" style="width: 12rem; height=2rem;"><br>
             <span style="font-size:18px"><b>Ryan C. Clavo</b></span> <br/><br/>
             <span style="font-size:18px">Instructor</span> <br/><br/>
         </div>
     </div>
</center>

</body>
</html>