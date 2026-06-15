<?php

if(isset($_POST['submit'])){

    setcookie("firstname", $_POST['firstname'], time()+10);
    setcookie("middlename", $_POST['middlename'], time()+20);
    setcookie("lastname", $_POST['lastname'], time()+30);

    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Cookies Activity</title>

<style>
body{
    font-family:Arial;
    background:#667eea;
    color:white;
    padding:30px;
}

.container{
    background:white;
    color:black;
    max-width:600px;
    margin:auto;
    padding:25px;
    border-radius:15px;
}

input{
    width:100%;
    padding:10px;
    margin:8px 0;
}

button{
    padding:10px;
    width:100%;
    background:#667eea;
    color:white;
    border:none;
}
</style>

</head>

<body>

<div class="container">

<h2>Create Cookies</h2>

<form method="POST">

<input type="text" name="firstname" placeholder="First Name" required>

<input type="text" name="middlename" placeholder="Middle Name" required>

<input type="text" name="lastname" placeholder="Last Name" required>

<button name="submit">Create Cookies</button>

</form>

<hr>

<h3>Cookies Result</h3>

<p>
First Name:
<?php echo isset($_COOKIE['firstname']) ? $_COOKIE['firstname'] : "Waiting or Expired"; ?>
</p>

<p>
Middle Name:
<?php echo isset($_COOKIE['middlename']) ? $_COOKIE['middlename'] : "Waiting or Expired"; ?>
</p>

<p>
Last Name:
<?php echo isset($_COOKIE['lastname']) ? $_COOKIE['lastname'] : "Waiting or Expired"; ?>
</p>

</div>

</body>
</html>
