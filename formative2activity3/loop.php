<!DOCTYPE html>
<html>
<head>
    <title>Two-Digit Combinations</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Two-Digit Decimal Combinations</h2>

<div class="loop-output">
<?php
for ($i = 0; $i <= 9; $i++) {
    for ($j = 0; $j <= 9; $j++) {
        echo $i . $j . ", ";
    }
}
?>
</div>

</body>
</html>