<?php
session_start();

if(isset($_POST['submit'])){

    $_SESSION['colors'] = [
        trim($_POST['color1']),
        trim($_POST['color2']),
        trim($_POST['color3']),
        trim($_POST['color4']),
        trim($_POST['color5'])
    ];

    header("Location: ResultColors.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Favorite Colors</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#ff9966,#ff5e62);
    padding:20px;
}

.container{
    width:100%;
    max-width:550px;
    background:white;
    padding:30px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

h1{
    text-align:center;
    margin-bottom:25px;
    color:#333;
}

input{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:16px;
}

input:focus{
    outline:none;
    border-color:#ff5e62;
}

button{
    width:100%;
    padding:12px;
    background:#ff5e62;
    color:white;
    border:none;
    border-radius:8px;
    font-size:16px;
    cursor:pointer;
    transition:.3s;
}

button:hover{
    background:#e04c55;
}

</style>

<script>

function validateColors(){

    let inputs = document.querySelectorAll("input");

    for(let i=0;i<inputs.length;i++){

        if(inputs[i].value.trim() === ""){
            alert("Please fill out all color fields.");
            return false;
        }
    }

    return true;
}

</script>

</head>

<body>

<div class="container">

<h1>Enter Your 5 Favorite Colors</h1>

<form method="POST" onsubmit="return validateColors()">

<input type="text" name="color1" placeholder="Favorite Color #1" required>

<input type="text" name="color2" placeholder="Favorite Color #2" required>

<input type="text" name="color3" placeholder="Favorite Color #3" required>

<input type="text" name="color4" placeholder="Favorite Color #4" required>

<input type="text" name="color5" placeholder="Favorite Color #5" required>

<button type="submit" name="submit">
    Send Colors
</button>

</form>

</div>

</body>
</html>
