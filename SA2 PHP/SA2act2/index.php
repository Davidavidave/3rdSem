<?php

function getCubeVolume($s) {
    return pow($s, 3);
}


function getRectPrismVolume($w, $h, $l) {
    return $w * $h * $l;
}


function getCylinderVolume($r, $h) {
    return pi() * pow($r, 2) * $h;
}


function getConeVolume($r, $h) {
    return (1/3) * pi() * pow($r, 2) * $h;
}


function getSphereVolume($r) {
    return (4/3) * pi() * pow($r, 3);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volume of Shapes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <table>
        <thead>
            <tr>
                <th colspan="3" class="header-main">Volume of Shapes</th>
            </tr>
            <tr>
                <th>Values</th>
                <th>Formula</th>
                <th>Answer</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>s = 5</td>
                <td>V = s³</td>
                <td><?php echo getCubeVolume(5); ?></td>
            </tr>
            <tr>
                <td>w = 4, h = 5, l = 6</td>
                <td>V = w × h × l</td>
                <td><?php echo getRectPrismVolume(4, 5, 6); ?></td>
            </tr>
            <tr>
                <td>r = 3, h = 7</td>
                <td>V = π × r² × h</td>
                <td><?php echo round(getCylinderVolume(3, 7), 2); ?></td>
            </tr>
            <tr>
                <td>r = 3, h = 9</td>
                <td>V = (1/3) × π × r² × h</td>
                <td><?php echo round(getConeVolume(3, 9), 2); ?></td>
            </tr>
            <tr>
                <td>r = 4</td>
                <td>V = (4/3) × π × r³</td>
                <td><?php echo round(getSphereVolume(4), 2); ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>