<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short Story Web Platform</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        /* Grid layout mirroring the document format */
        .story-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 15px;
            margin-bottom: 30px;
        }
        .story-card {
            background: #ffffff;
            border: 2px solid #bdc3c7;
            border-radius: 8px;
            padding: 40px 10px;
            text-align: center;
            text-decoration: none;
            color: #2c3e50;
            font-weight: bold;
            font-size: 1.1em;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        .story-card:hover {
            border-color: #3498db;
            background-color: #ebf5fb;
            transform: translateY(-5px);
        }
        .story-card.active {
            border-color: #2ecc71;
            background-color: #e8f8f5;
        }
        /* Container where the dynamic story content updates */
        .story-viewer {
            background: #ffffff;
            border: 1px solid #dcdde1;
            border-radius: 8px;
            padding: 30px;
            max-width: 800px;
            margin: 0 auto;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .story-viewer img {
            max-width: 100%;
            height: auto;
            border-radius: 6px;
            margin-bottom: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .story-viewer h2 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .story-viewer p {
            line-height: 1.6;
            font-size: 1.1em;
            text-align: justify;
        }
    </style>
</head>
<body>

    <h1>Interactive Storybook Collection</h1>
    
    <div class="story-grid">
        <a href="?story=1" class="story-card <?php echo (isset($_GET['story']) && $_GET['story'] == '1') ? 'active' : ''; ?>">Story 1</a>
        <a href="?story=2" class="story-card <?php echo (isset($_GET['story']) && $_GET['story'] == '2') ? 'active' : ''; ?>">Story 2</a>
        <a href="?story=3" class="story-card <?php echo (isset($_GET['story']) && $_GET['story'] == '3') ? 'active' : ''; ?>">Story 3</a>
        <a href="?story=4" class="story-card <?php echo (isset($_GET['story']) && $_GET['story'] == '4') ? 'active' : ''; ?>">Story 4</a>
        <a href="?story=5" class="story-card <?php echo (isset($_GET['story']) && $_GET['story'] == '5') ? 'active' : ''; ?>">Story 5</a>
    </div>

    <div class="story-viewer">
        <?php
        // Checks if a specific story parameter was clicked
        if (isset($_GET['story'])) {
            $story = $_GET['story'];
            
            // Validates parameter to ensure it safely includes only files 1 through 5
            if (in_array($story, ['1', '2', '3', '4', '5'])) {
                // Safeguards framework integrity using require for critical execution files
                require "story" . $story . ".php"; 
            } else {
                echo "<p style='text-align:center; color:red;'>Invalid Story Selection.</p>";
            }
        } else {
            // Default placeholder message when no card has been selected yet
            echo "<h3 style='text-align:center; color:#7f8c8d;'>Please click on any story card above to read the tale!</h3>";
        }
        ?>
    </div>

</body>
</html>

