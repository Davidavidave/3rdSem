<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Result Colors</title>

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
    background:linear-gradient(135deg,#36d1dc,#5b86e5);
    padding:20px;
}

.container{
    width:100%;
    max-width:700px;
    background:white;
    padding:30px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

h1{
    margin-bottom:25px;
    color:#333;
}

.colors{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    gap:15px;
}

.color-box{
    width:120px;
    height:120px;
    display:flex;
    justify-content:center;
    align-items:center;
    border-radius:15px;
    color:white;
    font-weight:bold;
    font-size:18px;
    text-transform:capitalize;
    box-shadow:0 5px 10px rgba(0,0,0,0.2);
}

a{
    display:inline-block;
    margin-top:25px;
    padding:12px 20px;
    text-decoration:none;
    color:white;
    background:#5b86e5;
    border-radius:8px;
}

a:hover{
    background:#4169e1;
}

</style>

</head>

<body>

<div class="container">

<h1>My 5 Favorite Colors</h1>

<div class="colors">

<?php

if(isset($_SESSION['colors'])){

    foreach($_SESSION['colors'] as $color){

        echo "
        <div class='color-box' style='background:$color'>
            $color
        </div>
        ";
    }

}else{

    echo "<p>No colors found in session.</p>";
}

?>

</div>

<a href='FavoriteColor.php'>Back</a>    

</div>

</body>
</html>



