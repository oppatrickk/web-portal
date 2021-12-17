<?php

// Use Mail API
use google\appengine\api\mail\Message;

// Variables
$username = $first_name = $last_name = $password = $email = $confirm_password = "";
$username_err = $first_name_err = $last_name_err = $password_err = $email_err = $confirm_password_err = "";

$pass = 0;
if (isset($_REQUEST['btn_register'])) {

    $_SESSION["keep_register"] = 1;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $stmt = $db->prepare("SELECT username, email FROM users WHERE username=:name OR email=:email");
        $stmt->execute(array(':name' => $username, ':email' => $email));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Validate First Name
        if (empty($_POST['first_name'])) {
            $first_name_err = "Required";
        } else {
            $pass++;
        }

        // Validate Last Name
        if (empty($_POST['last_name'])) {
            $last_name_err = "Required";
        } else {
            $pass++;
        }

        // Validate  Username
        if (empty($_POST['name'])) {
            $username_err = "Please enter a username.";
        } else if (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["name"]))) {
            $username_err = "Username can only contain letters, numbers, and underscores.";
        } else if ($username == $_POST["name"]) {
            $username_err = "Username already taken";
        } else {
            $pass++;
        }

        // Validate  Email
        if (empty(trim($_POST["email"]))) {
            $email_err = "Please enter your email.";
        } elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
            $email_err = "Please enter a valid email.";
        } else if ($email == $_POST["email"]) {
            $email_err = "Email already in use";
        } else {
            $pass++;
        }

        // Validate Password Strength
        $uppercase = preg_match("#[A-Z]+#", $_POST["password"]);
        $lowercase = preg_match("#[a-z]+#", $_POST["password"]);
        $number = preg_match("#[0-9]+#", $_POST["password"]);
        $char = preg_match("#[^\w]+#", $_POST["password"]);

        // Validate Password
        if (empty(trim($_POST["password"]))) {
            $password_err = "Please enter a password.";
        } else if (!$uppercase || !$lowercase || !$number || strlen($_POST["password"]) < 6) {
            $password_err = "Password should be at least 8 characters in length and include at least one upper case letter, one number, and one special character";
        } else {
            $pass++;
        }

        // Confirm Password
        if ($_POST["password"] != $_POST["confirm_password"]) {
            $confirm_password_err = "Password did not match";
        } else {
            $pass++;
        }

        // Generate Code
        $digits = array_flip(range('0', '9'));
        $lowercase = array_flip(range('a', 'z'));
        $uppercase = array_flip(range('A', 'Z'));
        $special = array_flip(str_split('!@#$%^&*()_+=-}{[}]\|;:<>?/'));
        $combined = array_merge($digits, $lowercase, $uppercase, $special);

        // Result
        $activate_code = str_shuffle(array_rand($digits) .
            array_rand($lowercase) .
            array_rand($uppercase) .
            array_rand($special) .
            implode(array_rand($combined, rand(4, 8))));


        if ($pass == 6) {


            // Email
            $message_body = "
<body style='height: 100%; padding: 2%; background-color: seagreen;'>

<div>
    <div style='background-color: white; border-radius: 16px; padding: 25px; width: 600px; margin: auto; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
        <center>
            <div>
                <a href='https://codex-bu.appspot.com/'>
                    <img src='https://i.ibb.co/qjwp8ZK/logo2.png' style='width: 7rem; height: 2.5rem;'>
                </a>
            </div>
        </center>
        <div style='padding-left: 15px; padding-right: 15px;'>
            <br>
            <h1 style='font-weight: bold; color: limegreen; margin-bottom: 12px;'>Activate your account</h1>
            <p style='color:black'>Hello <b>" . $_POST['first_name'] . " " . $_POST['last_name'] . "</b>, welcome to codeX!</p>
            <br>
            <p style='color:black'>Use the following code to activate your account:</p>
            <center>
                <div style='border-radius: 32px; border: 1px solid limegreen; color: black; padding: 8px; width: 50%; font-weight: bold'>" . $activate_code . "</div>
            </center>
            <br>

            <br>
            <p style='color:black'>Having trouble? <a href='https://codex-bu.appspot.com/pages/footer/report.php' style='text-decoration: none; color:limegreen'>Contact us</a></p>

            <br>
        </div>
    </div>
    <div style='width: 600px; margin: auto;'>
        <center>
            <br>
            <p style='color:white; font-size: 12px; opacity: 75%'>The code will expire in the next 24 hours.</p>
            <br>
            <a href='https://codex-bu.appspot.com/'>
                <img src='https://i.ibb.co/VTB4vfy/logo1.png' style='width: 6rem; height: 6rem;'>
            </a>
            <p style='color:white; font-size: 12px; opacity: 100%'>codeX © 2021</p>
        </center>
    </div>
</div>

</body>";

            $mail_options = [
                'sender' => 'Activate@codex-bu.appspotmail.com',
                'to' => $_POST['email'],
                'subject' => 'codeX | Verify Account',
                'htmlBody' => $message_body
            ];

            try {
                $message = new Message($mail_options);
                $message->send();
            } catch (InvalidArgumentException $e) {
                echo 'error: ';
            }

            $params = [
                ':name' => $_POST['name'],
                ':first_name' => $_POST['first_name'],
                ':last_name' => $_POST['last_name'],
                ':email' => $_POST['email'],
                ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                ':activate' => 1,
                ':activate_code' => $activate_code,
                ':delete_code' => 0,
            ];

            $stm = $db->prepare('INSERT INTO users (username, email, password, first_name, last_name, activate, activate_code, delete_code) VALUES (:name, :email, :password, :first_name, :last_name, :activate, :activate_code, :delete_code)');
            if ($stm->execute($params)) {
                $_SESSION["keep_register"] = 0;
                $_SESSION["keep_login"] = 1;
                exit;
            }
        }
    }
}

?>