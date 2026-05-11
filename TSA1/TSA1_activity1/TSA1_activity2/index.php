<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }

        td {
            padding: 8px;
            text-align: center;
        }

        .even {
            background-color: #f2f2f2;
        }

        .odd {
            background-color: #ff9999;
        }
    </style>
</head>
<body>
    <h2>Multiplication Table</h2>

    <table border="1">
        <?php
        for ($i = 0; $i <= 10; $i++) {
            echo "<tr>";

            for ($j = 0; $j <= 10; $j++) {
                $class = (($i + $j) % 2 == 0) ? "even" : "odd";
                echo "<td class='$class'>" . ($i * $j) . "</td>"; // actual multiplication
            }

            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>