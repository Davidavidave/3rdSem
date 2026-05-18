<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activity 1 - Profile Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

$profiles = [
    ["name" => "Lexi Livelover", "image" => "lexi.webp", "age" => 24, "birthday" => "Oct 10, 2001", "contact" => "09123456781"],
    ["name" => "Malupiton", "image" => "prman.jpg", "age" => 21, "birthday" => "Jan 15, 2005", "contact" => "09123456782"],
    ["name" => "Redford Black", "image" => "red.jpg", "age" => 23, "birthday" => "Mar 22, 2003", "contact" => "09123456783"],
    ["name" => "Pdol", "image" => "dolphy_h.webp", "age" => 22, "birthday" => "Feb 14, 2004", "contact" => "09123456784"],
    ["name" => "Dora Dblack", "image" => "dora.jpg", "age" => 20, "birthday" => "Dec 05, 2005", "contact" => "09123456785"],
    ["name" => "Rene Martinez", "image" => "rene.jpg", "age" => 25, "birthday" => "Nov 12, 2000", "contact" => "09123456786"],
    ["name" => "Bolbolla", "image" => "bolla.jpg", "age" => 22, "birthday" => "Jul 07, 2003", "contact" => "09123456787"],
    ["name" => "Awra lambotin", "image" => "awra.webp", "age" => 21, "birthday" => "Sep 19, 2004", "contact" => "09123456788"],
    ["name" => "Tataaslu", "image" => "bbalu.jpg", "age" => 26, "birthday" => "Jun 01, 1999", "contact" => "09123456789"],
    ["name" => "Diego Rivera", "image" => "diego.jpg", "age" => 23, "birthday" => "Aug 28, 2002", "contact" => "09123456780"]
];


usort($profiles, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});
?>

<table>
    <thead>
        <tr>
            <th>no.</th>
            <th>name</th>
            <th>Image</th>
            <th>age</th>
            <th>birthday</th>
            <th>contact number</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $counter = 1;
        foreach ($profiles as $profile): 
        ?>
        <tr>
            <td><?php echo $counter++; ?></td>
            <td><?php echo $profile['name']; ?></td>
            <td><img src="<?php echo $profile['image']; ?>" alt="Avatar"></td>
            <td>age <?php echo $profile['age']; ?></td>
            <td>birthday <?php echo $profile['birthday']; ?></td>
            <td><?php echo $profile['contact']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
