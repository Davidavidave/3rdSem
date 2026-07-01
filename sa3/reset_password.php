<?php
session_start();
include("config.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$message = "";
$messageClass = "";

$id = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT password FROM users WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();

$user = $stmt->get_result()->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $current = $_POST['current_password'];
    $new = $_POST['new_password'];
    $confirm = $_POST['confirm_password'];

    if (!password_verify($current, $user['password'])) {

        $message = "Current password is not the same with the old password.";
        $messageClass = "error";
    } elseif ($new != $confirm) {

        $message = "New password and Re-Enter new password should be the same.";
        $messageClass = "error";
    } else {

        $newHash = password_hash($new, PASSWORD_DEFAULT);

        $update = $conn->prepare("UPDATE users SET password=? WHERE id=?");
        $update->bind_param("si", $newHash, $id);

        if ($update->execute()) {

            $message = "Password successfully changed.";
            $messageClass = "success";
        } else {

            $message = "Unable to update password.";
            $messageClass = "error";
        }
    }
}
?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title>Reset Password</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">

        <h2>Reset Password</h2>

        <?php

        if ($message != "") {

            echo "<div class='message $messageClass'>$message</div>";
        }

        ?>

        <form method="POST">

            <div class="input-group">

                <label>Current Password</label>

                <input
                    type="password"
                    name="current_password"
                    required>

            </div>

            <div class="input-group">

                <label>New Password</label>

                <input
                    type="password"
                    name="new_password"
                    required>

            </div>

            <div class="input-group">

                <label>Re-Enter New Password</label>

                <input
                    type="password"
                    name="confirm_password"
                    required>

            </div>

            <button type="submit">

                Reset Password

            </button>

        </form>

        <br>

        <a href="home.php">

            <button type="button">

                Back to Home

            </button>

        </a>

    </div>

</body>

</html>