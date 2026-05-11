<?php
   $name = "Stephen Dave A. Blanza";
   $address = "SMDC, Quezon City";
   $age = "20";
   $email = "sablanza@fit.edu.ph";
   $phoneno = "09876543210";
   $dob = "08/30/2005";
   $gender = "Male";
   $school = "FEU Tech";
   $course = "BSITWMA";
   $pob = "Lemery, Batangas";
   $skill1 = "HTML";
   $skill2 = "CSS";
   $skill3 = "Python";
   $skill4 = "Javascript";
   $skill5 = "PHP";
   $skill6 = "SQL";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Form</title>
   <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Student Form</h1>

        <p><strong>Name:</strong> <?= $name ?></p>
        <p><strong>Gender:</strong> <?= $gender ?></p>
        <p><strong>Age:</strong> <?= $age ?></p>
        <p><strong>Date of Birth:</strong> <?= $dob ?></p>
        <p><strong>Address:</strong> <?= $address ?></p>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Phone:</strong> <?= $phoneno ?></p>

        <h2>Background Information</h2>
        <p><strong>Place of Birth:</strong> <?= $pob ?></p>
        <p><strong>School:</strong> <?= $school ?></p>
        <p><strong>Course:</strong> <?= $course ?></p>

        <h2>Skills</h2>
        <ul>
            <li><?= $skill1 ?></li>
            <li><?= $skill2 ?></li>
            <li><?= $skill3 ?></li>
            <li><?= $skill4 ?></li>
            <li><?= $skill5 ?></li>
            <li><?= $skill6 ?></li>
        </ul>
    </div>
</body>
</html>