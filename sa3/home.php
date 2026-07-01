<?php
session_start();
include("config.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$id = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT * FROM users WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();

$user = $stmt->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <title>Home</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">

        <a href="logout.php" class="logout">Logout</a>

        <h2>Welcome</h2>

        <div class="info-box">

            <h3>User Information</h3>

            <p><strong>First Name:</strong> <?php echo htmlspecialchars($user['firstname']); ?></p>

            <p><strong>Middle Name:</strong> <?php echo htmlspecialchars($user['middlename']); ?></p>

            <p><strong>Last Name:</strong> <?php echo htmlspecialchars($user['lastname']); ?></p>

            <p><strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?></p>

            <p><strong>Birthday:</strong> <?php echo htmlspecialchars($user['birthday']); ?></p>

            <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>

            <p><strong>Contact:</strong> <?php echo htmlspecialchars($user['contact']); ?></p>

        </div>

        <div class="reset-box">

            <a href="reset_password.php">

                <button>

                    Reset Password

                </button>

            </a>

        </div>

    </div>

</body>

</html>