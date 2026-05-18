<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activity 2 - Array Math Operations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 10, 2]; 


$sum = $numbers[0];
$difference = $numbers[0];
$product = $numbers[0];
$quotient = $numbers[0];


$arrLength = count($numbers);
for ($i = 1; $i < $arrLength; $i++) {
    $sum += $numbers[$i];
    $difference -= $numbers[$i];
    $product *= $numbers[$i];
    
    if ($numbers[$i] != 0) {
        $quotient /= $numbers[$i];
    }
}
?>

<table>
    <tr>
        <td colspan="2" class="header-row">
            Array list: <?php echo implode(', ', $numbers); ?>
        </td>
    </tr>
    <tr>
        <td class="label-cell">Addition</td>
        <td class="val-cell"><?php echo $sum; ?></td>
    </tr>
    <tr>
        <td class="label-cell">Subtraction</td>
        <td class="val-cell"><?php echo $difference; ?></td>
    </tr>
    <tr>
        <td class="label-cell">Multiplication</td>
        <td class="val-cell"><?php echo $product; ?></td>
    </tr>
    <tr>
        <td class="label-cell">Division</td>
        <td class="val-cell"><?php echo $quotient; ?></td>
    </tr>
</table>

</body>
</html>
