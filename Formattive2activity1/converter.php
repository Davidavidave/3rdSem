<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Length Conversion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Length Converter</h2>

    <form method="post">
        <input type="number" step="any" name="value" placeholder="Enter value" required>

        <select name="from" required>
            <option value="">From</option>
            <option value="mm">Millimeter</option>
            <option value="cm">Centimeter</option>
            <option value="m">Meter</option>
            <option value="km">Kilometer</option>
            <option value="in">Inch</option>
            <option value="ft">Foot</option>
            <option value="yd">Yard</option>
            <option value="mi">Mile</option>
        </select>

        <select name="to" required>
            <option value="">To</option>
            <option value="mm">Millimeter</option>
            <option value="cm">Centimeter</option>
            <option value="m">Meter</option>
            <option value="km">Kilometer</option>
            <option value="in">Inch</option>
            <option value="ft">Foot</option>
            <option value="yd">Yard</option>
            <option value="mi">Mile</option>
        </select>

        <button type="submit">Convert</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $value = $_POST['value'];
        $from = $_POST['from'];
        $to = $_POST['to'];

        /* Conversion values based on chart (all to meters) */
        $toMeter = [
            "mm" => 0.001,
            "cm" => 0.01,
            "m"  => 1,
            "km" => 1000,
            "in" => 0.0254,
            "ft" => 0.3048,
            "yd" => 0.9144,
            "mi" => 1609.344
        ];

        /* Convert input to meters */
        $meters = $value * $toMeter[$from];

        /* Convert meters to target unit */
        $result = $meters / $toMeter[$to];

        echo "<div class='result'>";
        echo "<strong>$value $from = " . round($result, 4) . " $to</strong>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>