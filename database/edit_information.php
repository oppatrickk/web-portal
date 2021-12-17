<?php

// Variables

if (isset($_REQUEST['btn_edit'])) {

    $pass = 0;

    $username = $_SESSION["username"];
    $email = $_SESSION["email"];

    if (empty($_REQUEST["edit_first_name"])) {
        $err_edit_first_name = "Please enter your first name";
    } else {
        $pass++;
    }

    if (empty($_REQUEST["edit_last_name"])) {
        $err_edit_last_name = "Please enter your last name";
    } else {
        $pass++;
    }

    if ($pass == 2) {
        try {
            // Parameter
            $params = [
                ':first_name' => $_REQUEST["edit_first_name"],
                ':last_name' => $_REQUEST["edit_last_name"]
            ];

            // Username
            $id = $_SESSION["id"];

            // Replace in Database
            $stm = $db->prepare("UPDATE users SET first_name = :first_name, last_name = :last_name  WHERE user_id = '$id'");
            $stm->execute($params);

            $success_edit = "Information Updated";

            $_SESSION["first_name"] = $_REQUEST["edit_first_name"];
            $_SESSION["last_name"] = $_REQUEST["edit_last_name"];

        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}

?>