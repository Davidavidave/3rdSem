<?php
session_start();
include("config.php");

// If already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: home.php");
    exit();
}

$message = "";
$messageClass = "";

// Cookie values
$username_cookie = "";
$password_cookie = "";

if (isset($_COOKIE['username'])) {
    $username_cookie = $_COOKIE['username'];
}

if (isset($_COOKIE['password'])) {
    $password_cookie = $_COOKIE['password'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            // Create Session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['lastname'] = $user['lastname'];
            $_SESSION['username'] = $user['username'];

            // Remember Me
            if (isset($_POST['remember'])) {

                setcookie(
                    "username",
                    $username,
                    time() + (86400 * 30),
                    "/"
                );

                setcookie(
                    "password",
                    $password,
                    time() + (86400 * 30),
                    "/"
                );
            } else {

                setcookie("username", "", time() - 3600, "/");
                setcookie("password", "", time() - 3600, "/");
            }

            header("Location: home.php");
            exit();
        } else {

            $message = "Incorrect username or password.";
            $messageClass = "error";
        }
    } else {

        $message = "Username does not exist.";
        $messageClass = "error";
    }
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <title>Login</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">

        <h2>Login Form</h2>

        <?php

        if ($message != "") {

            echo "<div class='message $messageClass'>$message</div>";
        }

        ?>

        <form method="POST">

            <div class="input-group">

                <label>Username</label>

                <input
                    type="text"
                    name="username"
                    required
                    value="<?php echo htmlspecialchars($username_cookie); ?>">

            </div>

            <div class="input-group">

                <label>Password</label>

                <input
                    type="password"
                    name="password"
                    required
                    value="<?php echo htmlspecialchars($password_cookie); ?>">

            </div>

            <div class="checkbox">

                <input
                    type="checkbox"
                    name="remember"

                    <?php

                    if (isset($_COOKIE['username'])) {

                        echo "checked";
                    }

                    ?>>

                <label>Remember Me</label>

            </div>

            <button type="submit">

                Login

            </button>

        </form>

        <br>

        <p align="center">

            Don't have an account?

            <a href="register.php">

                Register Here

            </a>

        </p>

    </div>

</body>

</html>