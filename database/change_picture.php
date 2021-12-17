<?php

use google\appengine\api\cloud_storage\CloudStorageTools;

$bucket = 'codex-bu.appspot.com'; // your bucket name

$options = ['size' => 400, 'crop' => true];
$image_file = "gs://$bucket/11.jpg";
$image_url = CloudStorageTools::getImageServingUrl($image_file, $options);

$root_path = 'gs://' . $bucket . '/';
$_url = '';

// Variables
$username = $email = "";

$select_stmt = $db->prepare("Select * FROM users WHERE username=:uname OR email=:uemail");
$select_stmt->execute(array(':uname'=>$username, ':uemail'=>$email));
$row = $select_stmt->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['submit']))
{
    if(isset($_FILES['userfile']))
    {
        $name = $_FILES['userfile']['name'];
        $file_size =$_FILES['userfile']['size'];
        $file_tmp =$_FILES['userfile']['tmp_name'];

        // Rename
        $temp = explode(".", $_FILES["userfile"]["name"]);
        $name = $username . "_avatar" . '.' . end($temp);

        $original = $root_path .$name;
        move_uploaded_file($file_tmp, $original);
        $_url=CloudStorageTools::getImageServingUrl($original);

        // Send to database
        $params = [
            ':file_name' => $name,
        ];

        // Username
        $id = $_SESSION["user_id"];

        // Replace in Database
        $stm = $db->prepare("UPDATE users SET file_name = :file_name WHERE user_id = '$id'");
        $stm->execute($params);

        $success_picture = "Picture Changed";

    }
}

?>