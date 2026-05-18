<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Functions Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            margin: 0 auto;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .main-header {
            font-size: 1.5rem;
            background-color: #ffffff;
        }
    </style>
</head>
<body>

<?php
// Array initialized with 20 different sample names
$names = [
    "chrisa", "john doe", "alice smith", "bob johnson", "charlie brown",
    "david miller", "eva davis", "frank garcia", "grace rodriguez", "henry wilson",
    "ivy thomas", "jack martinez", "karen anderson", "leo taylor", "mia thomas",
    "nathan moore", "olivia martin", "peter jackson", "quinn white", "rachel harris"
];
?>

<table>
    <thead>
        <tr>
            <th colspan="6" class="main-header">List of names</th>
        </tr>
        <tr>
            <th>Name</th>
            <th>Number of characters</th>
            <th>Uppercase first character</th>
            <th>Replace vowels with @</th>
            <th>Check position of character "a"</th>
            <th>Reverse name</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($names as $name): ?>
            <tr>
                <td><?php echo htmlspecialchars($name); ?></td>
                
                <td><?php echo strlen($name); ?></td>
                
                <td><?php echo htmlspecialchars(ucfirst($name)); ?></td>
                
                <td>
                    <?php 
                        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
                        echo htmlspecialchars(str_replace($vowels, '@', $name)); 
                    ?>
                </td>
                
                <td>
                    <?php
                        $pos = strpos($name, 'a');
                        echo ($pos === false) ? 'Not Found' : $pos;
                    ?>
                </td>
                
                <td><?php echo htmlspecialchars(strrev($name)); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>

