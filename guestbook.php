<html>
<body>
<?php
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;

$user = UserService::getCurrentUser();

if ($user) {
    echo 'Hello, ' . htmlspecialchars($user->getNickname());
}
else {
    header('Location: ' . UserService::createLoginURL($_SERVER['REQUEST_URI']));
}
?>

<h2>Guestbook Entries</h2>
<?php
// Create a connection.

$db = null;
if (isset($_SERVER['SERVER_SOFTWARE']) &&
    strpos($_SERVER['SERVER_SOFTWARE'],'Google App Engine') !== false) {
    // Connect from App Engine.
    try{
        $db = new pdo('mysql:unix_socket=/cloudsql/codex-bu:codex-bu:asia-southeast2:codex-bu;dbname=guestbook', 'root', 'U^YuNDKb4Oh#pgjOSHkR');
    }catch(PDOException $ex){
        die(json_encode(
            array('outcome' => false, 'message' => 'Unable to connect.')
        )
        );
    }
} else {
    // Connect from a development environment.
    try{
        $db = new pdo('mysql:host=127.0.0.1:3306;dbname=guestbook', 'root', 'U^YuNDKb4Oh#pgjOSHkR');
    }catch(PDOException $ex){
        die(json_encode(
            array('outcome' => false, 'message' => 'Unable to connect')
        )
        );
    }
}
try {
    // Show existing guestbook entries.
    foreach($db->query('SELECT * from entries') as $row) {
        echo "<div><strong>" . $row['guestName'] . "</strong> wrote <br> " . $row['content'] . "</div>";
    }
} catch (PDOException $ex) {
    echo "An error occurred in reading or writing to guestbook.";
}
$db = null;
?>

<h2>Sign the Guestbook</h2>
<form action="/sign" method="post">
    <div><textarea name="content" rows="3" cols="60"></textarea></div>
    <div><input type="submit" value="Sign Guestbook"></div>
</form>
</body>
</html>