<?php
include 'db.php';

$sql = "SELECT * FROM dogs";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Records</title>

    <style>
        body{
            font-family: Arial;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        th, td{
            border:1px solid black;
            padding:10px;
            text-align:center;
        }

        th{
            background:#4CAF50;
            color:white;
        }
    </style>
</head>
<body>

<h2>Dog Information Records</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Breed</th>
        <th>Age</th>
        <th>Address</th>
        <th>Color</th>
        <th>Height(foot)</th>
        <th>Weight(Kg)</th>
    </tr>

    <?php
    while($row = $result->fetch_assoc()){
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['breed']."</td>
                <td>".$row['age']."</td>
                <td>".$row['address']."</td>
                <td>".$row['color']."</td>
                <td>".$row['height']."</td>
                <td>".$row['weight']."</td>
              </tr>";
    }
    ?>

</table>

</body>
</html>