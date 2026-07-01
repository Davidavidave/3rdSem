<?php
include("config.php");

$message = "";
$messageClass = "";
$userData = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = trim($_POST['firstname']);
    $middlename = trim($_POST['middlename']);
    $lastname = trim($_POST['lastname']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $birthday = $_POST['birthday'];
    $email = trim($_POST['email']);
    $contact = trim($_POST['contact']);


    if ($password != $confirmPassword) {

        $message = "Password and Confirm Password are not the same.";
        $messageClass = "error";
    } else {


        $check = $conn->prepare("SELECT id FROM users WHERE username=?");
        $check->bind_param("s", $username);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {

            $message = "Username already exists.";
            $messageClass = "error";
        } else {


            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


            $stmt = $conn->prepare("INSERT INTO users(firstname,middlename,lastname,username,password,birthday,email,contact)
            VALUES(?,?,?,?,?,?,?,?)");

            $stmt->bind_param(
                "ssssssss",
                $firstname,
                $middlename,
                $lastname,
                $username,
                $hashedPassword,
                $birthday,
                $email,
                $contact
            );

            if ($stmt->execute()) {

                $message = "Registration Successful!";
                $messageClass = "success";

                $userData = [
                    "firstname" => $firstname,
                    "middlename" => $middlename,
                    "lastname" => $lastname,
                    "username" => $username,
                    "birthday" => $birthday,
                    "email" => $email,
                    "contact" => $contact
                ];
            } else {

                $message = "Something went wrong.";
                $messageClass = "error";
            }

            $stmt->close();
        }

        $check->close();
    }
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title>Registration Form</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">

        <h2>My Personal Information</h2>

        <?php

        if ($message != "") {
            echo "<div class='message $messageClass'>$message</div>";
        }

        ?>

        <form method="POST">

            <div class="input-group">
                <label>First Name</label>
                <input
                    type="text"
                    name="firstname"
                    required
                    value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : ''; ?>">
            </div>

            <div class="input-group">
                <label>Middle Name</label>
                <input
                    type="text"
                    name="middlename"
                    value="<?php echo isset($_POST['middlename']) ? htmlspecialchars($_POST['middlename']) : ''; ?>">
            </div>

            <div class="input-group">
                <label>Last Name</label>
                <input
                    type="text"
                    name="lastname"
                    required
                    value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : ''; ?>">
            </div>

            <div class="input-group">
                <label>Username</label>
                <input
                    type="text"
                    name="username"
                    required
                    value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
            </div>

            <div class="input-group">
                <label>Password</label>
                <input
                    type="password"
                    name="password"
                    required>
            </div>

            <div class="input-group">
                <label>Confirm Password</label>
                <input
                    type="password"
                    name="confirm_password"
                    required>
            </div>

            <div class="input-group">
                <label>Birthday</label>
                <input
                    type="date"
                    name="birthday"
                    required
                    value="<?php echo isset($_POST['birthday']) ? htmlspecialchars($_POST['birthday']) : ''; ?>">
            </div>

            <div class="input-group">
                <label>Email</label>
                <input
                    type="email"
                    name="email"
                    required
                    value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            </div>

            <div class="input-group">
                <label>Contact Number</label>
                <input
                    type="text"
                    name="contact"
                    required
                    value="<?php echo isset($_POST['contact']) ? htmlspecialchars($_POST['contact']) : ''; ?>">
            </div>

            <button type="submit">Submit</button>

        </form>

        <?php if (!empty($userData)) { ?>

            <div class="info-box">

                <h3>Registration Details</h3>

                <p><strong>Full Name:</strong>
                    <?php
                    echo htmlspecialchars(
                        $userData['firstname'] . " " .
                            $userData['middlename'] . " " .
                            $userData['lastname']
                    );
                    ?>
                </p>

                <p><strong>Username:</strong>
                    <?php echo htmlspecialchars($userData['username']); ?>
                </p>

                <p><strong>Birthday:</strong>
                    <?php echo htmlspecialchars($userData['birthday']); ?>
                </p>

                <p><strong>Email:</strong>
                    <?php echo htmlspecialchars($userData['email']); ?>
                </p>

                <p><strong>Contact Number:</strong>
                    <?php echo htmlspecialchars($userData['contact']); ?>
                </p>

                <br>

                <a href="login.php">
                    <button type="button">
                        Proceed to Login
                    </button>
                </a>

            </div>

        <?php } ?>

    </div>

</body>

</html>