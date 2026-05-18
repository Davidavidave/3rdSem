<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activity 3 - User Defined Function</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
function calculateThreeParams($param1, $param2, $param3) {
    
    $add = $param1 + $param2 + $param3;
    $sub = $param1 - $param2 - $param3;
    $mult = $param1 * $param2 * $param3;
    
   
    if ($param2 != 0 && $param3 != 0) {
        $div = $param1 / $param2 / $param3;
    } else {
        $div = "Undefined (Division by Zero)";
    }
    
   
    echo "<table>";
    echo "<tr><td colspan='2' class='header-row'>My Parameter values: $param1, $param2, $param3</td></tr>";
    echo "<tr><td class='label-cell'>Addition</td><td class='val-cell'>$add</td></tr>";
    echo "<tr><td class='label-cell'>Subtraction</td><td class='val-cell'>$sub</td></tr>";
    echo "<tr><td class='label-cell'>Multiplication</td><td class='val-cell'>$mult</td></tr>";
    echo "<tr><td class='label-cell'>Division</td><td class='val-cell'>$div</td></tr>";
    echo "</table>";
}


calculateThreeParams(24, 14, 7);
?>

</body>
</html>
