<?php
session_start();

// Include the database configuration file
include 'config.php';
$statusMsg = '';

// File upload path
$name = htmlspecialchars($_SESSION["username"]);
$id = ($_SESSION["id"]);
$targetDir = "../assets/img/avatars/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server

        $temp = explode(".", $_FILES["file"]["name"]);
        $newfilename = $name . "_avatar" . '.' . end($temp);

        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetDir . $newfilename)){
            // Insert image file name into database
            $insert = $link->query("INSERT into images (file_name, uploaded_on, username) VALUES ('".$newfilename."', NOW(),'".$id."')");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            }
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message

header("location: ../pages/dashboard/profile.php");
?>