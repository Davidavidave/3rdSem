<!DOCTYPE html>
<html>
<head>
    <title>Grade Ranking</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">
    <h2>Grade Ranking System</h2>

    <form method="post">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="number" name="grade" placeholder="Grade" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $grade = $_POST['grade'];

        if ($grade >= 93) $rank = "A";
        elseif ($grade >= 90) $rank = "A-";
        elseif ($grade >= 87) $rank = "B+";
        elseif ($grade >= 83) $rank = "B";
        elseif ($grade >= 80) $rank = "B-";
        elseif ($grade >= 77) $rank = "C+";
        elseif ($grade >= 73) $rank = "C";
        elseif ($grade >= 70) $rank = "C-";
        elseif ($grade >= 67) $rank = "D+";
        elseif ($grade >= 63) $rank = "D";
        elseif ($grade >= 60) $rank = "D-";
        else $rank = "F";

        echo "<div class='output'>";
        echo "Name: $name<br>";
        echo "Grade: $grade<br>";
        echo "Rank: $rank";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>