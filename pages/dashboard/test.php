<?php

use google\appengine\api\cloud_storage\CloudStorageTools;

$bucket = 'codex-bu.appspot.com'; // your bucket name

$options = ['size' => 400, 'crop' => true];
$image_file = "gs://$bucket/11.jpg";
$image_url = CloudStorageTools::getImageServingUrl($image_file, $options);

$root_path = 'gs://' . $bucket . '/';
$_url = '';
if(isset($_POST['submit']))
{
    // get image from Form
    $gs_name = $_FILES["uploaded_files"]["tmp_name"];
    $fileType = $_FILES["uploaded_files"]["type"];
    $fileSize = $_FILES["uploaded_files"]["size"];
    $fileErrorMsg = $_FILES["uploaded_files"]["error"];
    $fileExt = pathinfo($_FILES['uploaded_files']['name'], PATHINFO_EXTENSION);

// change name if you want
    $fileName = 'foo.jpg';

// put to cloud storage
    $image = file_get_contents($gs_name);
    $options = [ "gs" => [ "Content-Type" => "image/jpeg"]];
    $ctx = stream_context_create($options);
    file_put_contents("gs://". $bucket. "/".$fileName, $gs_name, 0, $ctx);

// or move
    $moveResult = move_uploaded_file($gs_name, 'gs://'. $bucket. '/'.$fileName);
}




?>
    <html>

    <body>
    <form action="#" method="post" enctype="multipart/form-data"> Send these files:
        <p/> <input name="uploaded_files" type="file" />
        <p/> <input type="submit" name="submit" value="Send files" />
    </form>

    <img src="<?php echo $image_url;?>">

    </body>

    </html>
<?php

echo $_url;

?>