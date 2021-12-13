<?php
require_once 'database/config.php';

$msg = '';
// Insert a new row into the guestbook on POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $params = [
        ':name' => $_POST['name'],
        ':phone' => $_POST['phone'],
        ':email' => $_POST['email'],
    ];
    $stmt = $db->prepare('INSERT INTO contacts (name, phone, email) VALUES (:name, :phone, :email)');
    if($stmt->execute($params)) {
        $msg = 'Added Successfully!';
    }
}

?>

<html>
<body>
<h2>Add New Contact</h2>
<form action="contact-add.php" method="post">
    <div>Name: <input name="name" /></div>
    <div>Phone: <input name="phone" /></div>
    <div>Email: <input type="email" name="email" /></div>
    <?= $msg ?>
    <div>
        <input type="submit" value="Add">
        <a href="/">Back</a>
    </div>
</form>
</body>
</html>