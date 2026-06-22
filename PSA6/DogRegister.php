<?php
include 'db.php';

if(isset($_POST['save'])){

    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO dogs(name,breed,age,address,color,height,weight)
            VALUES('$name','$breed','$age','$address','$color','$height','$weight')";

    if($conn->query($sql)){
        echo "<script>alert('Dog Information Saved Successfully!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Registration</title>
    <style>
        body{
            font-family: Arial;
            background:#f4f4f4;
        }

        .container{
            width:500px;
            margin:auto;
            background:white;
            padding:20px;
            margin-top:30px;
            border-radius:10px;
        }

        input{
            width:100%;
            padding:10px;
            margin:5px 0;
        }

        button{
            background:green;
            color:white;
            padding:10px;
            border:none;
            width:100%;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Dog Registration Form</h2>

    <form method="POST">
        <input type="text" name="name" placeholder="Dog Name" required>

        <input type="text" name="breed" placeholder="Breed" required>

        <input type="number" name="age" placeholder="Age" required>

        <input type="text" name="address" placeholder="Address" required>

        <input type="text" name="color" placeholder="Color" required>

        <input type="number" step="0.01" name="height" placeholder="Height" required>

        <input type="number" step="0.01" name="weight" placeholder="Weight" required>

        <button type="submit" name="save">Save</button>
    </form>

</div>

</body>
</html>