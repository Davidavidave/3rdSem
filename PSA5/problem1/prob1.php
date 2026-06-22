<?php

$firstName = "";
$middleName = "";
$lastName = "";
$birthDate = "";
$address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = htmlspecialchars($_POST['firstname']);
    $middleName = htmlspecialchars($_POST['middlename']);
    $lastName = htmlspecialchars($_POST['lastname']);
    $birthDate = htmlspecialchars($_POST['birthdate']);
    $address = htmlspecialchars($_POST['address']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Personal Information Form</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:linear-gradient(135deg,#4facfe,#00f2fe);
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}

.container{
    width:100%;
    max-width:700px;
    background:#fff;
    padding:30px;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,0.2);
}

h1{
    text-align:center;
    margin-bottom:20px;
    color:#333;
}

input,
textarea{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:16px;
}

textarea{
    resize:none;
    height:90px;
}

button{
    width:100%;
    padding:12px;
    background:#007bff;
    color:white;
    border:none;
    border-radius:8px;
    font-size:16px;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#0056b3;
}

.result{
    margin-top:25px;
    padding:20px;
    background:#f5f5f5;
    border-radius:10px;
}

.result h2{
    margin-bottom:15px;
    color:#333;
}

.result p{
    margin-bottom:10px;
    font-size:16px;
}

</style>

<script>

function validateForm(){

    let fname = document.forms["infoForm"]["firstname"].value;
    let lname = document.forms["infoForm"]["lastname"].value;

    if(fname.trim() == ""){
        alert("First Name is required.");
        return false;
    }

    if(lname.trim() == ""){
        alert("Last Name is required.");
        return false;
    }

    return true;
}

</script>

</head>

<body>

<div class="container">

    <h1>Personal Information Form</h1>

    <form name="infoForm" method="POST" onsubmit="return validateForm()">

        <input type="text" name="firstname" placeholder="First Name" required>

        <input type="text" name="middlename" placeholder="Middle Name" required>

        <input type="text" name="lastname" placeholder="Last Name" required>

        <input type="date" name="birthdate" required>

        <textarea name="address" placeholder="Address" required></textarea>

        <button type="submit">Submit</button>

    </form>

    <?php
    if(
        $firstName != "" ||
        $middleName != "" ||
        $lastName != "" ||
        $birthDate != "" ||
        $address != ""
    ){
    ?>

    <div class="result">

        <h2>Personal Information</h2>

        <p><strong>First Name:</strong> <?php echo $firstName; ?></p>

        <p><strong>Middle Name:</strong> <?php echo $middleName; ?></p>

        <p><strong>Last Name:</strong> <?php echo $lastName; ?></p>

        <p><strong>Date of Birth:</strong> <?php echo $birthDate; ?></p>

        <p><strong>Address:</strong> <?php echo $address; ?></p>

    </div>

    <?php } ?>

</div>

</body>
</html>

