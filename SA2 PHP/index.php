<?php

$fruitDirectory = [
    "Banana" => [
        "image" => "https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?w=150",
        "description" => "Color Yellow",
        "facts" => "Bananas are a healthful addition to a balanced diet, as they provide a range of vital nutrients and are a good source of fiber."
    ],
    "Apple" => [
        "image" => "https://images.unsplash.com/photo-1560806887-1e4cd0b6cbd6?w=150",
        "description" => "Color Red or Green",
        "facts" => "Apples are high in fiber and Vitamin C, and they contain polyphenols, which have numerous health benefits."
    ],
    "Cherry" => [
        "image" => "https://images.unsplash.com/photo-1527661591475-527312dd65f5?w=150",
        "description" => "Color Deep Red",
        "facts" => "Cherries are packed with antioxidants and anti-inflammatory compounds that may reduce muscle soreness after exercise."
    ],
    "Date" => [
        "image" => "https://images.unsplash.com/photo-1566393028639-d108a42c46a7?w=150",
        "description" => "Color Brown",
        "facts" => "Dates are very sweet fruits containing essential nutrients like vitamins, minerals, and a rich amount of dietary fiber."
    ],
    "Elderberry" => [
        "image" => "OIP.jpg",
        "description" => "Color Dark Purple",
        "facts" => "Elderberries are often used to boost the immune system and relieve symptoms of the common cold and flu."
    ],
    "Fig" => [
        "image" => "https://images.unsplash.com/photo-1541432901042-2d8bd64b4a9b?w=150",
        "description" => "Color Purple/Green",
        "facts" => "Figs are unique fruits resembling a teardrop. They are filled with hundreds of tiny seeds and have a mild, sweet taste."
    ],
    "Grape" => [
        "image" => "https://images.unsplash.com/photo-1537640538966-79f369143f8f?w=150",
        "description" => "Color Green or Purple",
        "facts" => "Grapes are a good source of potassium, a mineral that helps balance fluids in your body and lower high blood pressure."
    ],
    "Kiwi" => [
        "image" => "kiwi.jpg",
        "description" => "Color Brown Fuzzy Skin",
        "facts" => "Kiwi contains high amounts of Vitamin C and dietary fiber, which can support cardiovascular and digestive health."
    ],
    "Mango" => [
        "image" => "https://images.unsplash.com/photo-1553279768-865429fa0078?w=150",
        "description" => "Color Vibrant Yellow",
        "facts" => "Known as the king of fruits, mangoes are rich in vitamins A and C, which are crucial for immune function and skin health."
    ],
    "Orange" => [
        "image" => "https://images.unsplash.com/photo-1547514701-42782101795e?w=150",
        "description" => "Color Orange",
        "facts" => "Oranges are widely known for their high vitamin C content, a powerful antioxidant that protects cells from damage."
    ]
];


ksort($fruitDirectory);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fruit Directory</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        table, th, td {
            border: 2px double #888;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .header-main {
            text-align: center;
            font-size: 1.2em;
        }
        .img-container {
            text-align: center;
            width: 160px;
        }
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
        .col-name { width: 15%; }
        .col-desc { width: 15%; }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th colspan="4" class="header-main">My Fruits</th>
            </tr>
            <tr>
                <th>Image</th>
                <th class="col-name">Name</th>
                <th class="col-desc">Description</th>
                <th>Facts</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fruitDirectory as $name => $details): ?>
            <tr>
                <td class="img-container">
                    <img src="<?php echo htmlspecialchars($details['image']); ?>" alt="<?php echo htmlspecialchars($name); ?>">
                </td>
                <td><?php echo htmlspecialchars($name); ?></td>
                <td><?php echo htmlspecialchars($details['description']); ?></td>
                <td><?php echo htmlspecialchars($details['facts']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>