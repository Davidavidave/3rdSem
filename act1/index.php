<?php

$name = "Stephen Dave Blanza";
$title = "Web Developer";
$email = "stephendavealvarezblanza@email.com";
$phone = "09123456789";
$location = "Manila, Philippines";
 
$summary = "Motivated IT student with knowledge in HTML, CSS, and PHP. Passionate about building modern and responsive web applications.";
 

$experience1 = "Created personal portfolio using HTML, CSS, and PHP.";
$experience2 = "Created a responsive website for a local business.";
$experience3 = "Developed simple web applications for school projects.";

$Certtification = "Information Technology Specialist In JAVA(2024)";

$education = "Bachelor of Science in Information Technology, FEU Institute of Technology, 2024-2028";
 
$skills = ["HTML", "CSS", "PHP", "JavaScript"];
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Resume Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
<div class="resume">
 
    <div class="sidebar">
        <div class="profile">
            <img src="Media.jpg" alt="Profile">
            <h2><?php echo $name; ?></h2>
            <p><?php echo $title; ?></p>
        </div>
 
        <div class="section">
            <h3>Contact</h3>
            <p><?php echo $email; ?></p>
            <p><?php echo $phone; ?></p>
            <p><?php echo $location; ?></p>
        </div>
 
        <div class="section">
            <h3>Skills</h3>
            <ul>
                <?php
                foreach($skills as $skill){
                    echo "<li>$skill</li>";
                }
                ?>
            </ul>
        </div>
 
        <div class="section">
            <h3>Education</h3>
            <p><?php echo $education; ?></p>
        </div>
    </div>
 
    <div class="main">
        
        <h4><?php echo $title; ?></h4>
 
        <div class="content">
            <h3>Summary</h3>
            <p><?php echo $summary; ?></p>
        </div>
 
        <div class="content">
            <h3>Experience</h3>
            <ul>
                <li><?php echo $experience1; ?></li>
                <li><?php echo $experience2; ?></li>
                <li><?php echo $experience3; ?></li>
            </ul>
        </div>

        <div class="content">
            <h3>Certifications</h3>
            <ul>
                <li><?php echo $Certtification; ?></li>
            </ul>
        </div>


    </div>
 
</div>
 
</body>
</html>