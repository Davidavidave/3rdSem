
<?php
$active_friend = isset($_GET['friend']) ? intval($_GET['friend']) : 0;
$friends = [
    1 => 'story1.php',
    2 => 'story2.php',
    3 => 'story3.php',
    4 => 'story4.php',
    5 => 'story5.php'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Friends Anthology</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <div>
                <h1>Circle of Friends</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Stories</a></li>
                    <li><a href="#">Gallery</a></li>
                </ul>
            </nav>
        </header>

        <main class="story-grid">
            <?php foreach ($friends as $id => $file): ?>
                <a href="?friend=<?php echo $id; ?>" class="story-card">
                    <?php include($file); ?>
                </a>
            <?php endforeach; ?>
        </main>

        <?php if ($active_friend && isset($friends[$active_friend])): ?>
            <section class="story-detail">
                <?php include("fren1{$active_friend}.php"); ?>
            </section>
        <?php endif; ?>

        <footer class="footer">
            <p>Copyright &copy; <?php echo date("Y"); ?> Friends Memory Book</p>
        </footer>
    </div>
</body>
</html>