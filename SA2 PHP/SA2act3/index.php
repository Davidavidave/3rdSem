<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Resume Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <table class="main-container">
        <tr class="header-row">
            <td colspan="2" class="resume-header-cell">
                <h1>Stephen Dave A. Blanza</h1>
                <p class="resume-tagline">Aspiring Application Developer | Structured web solutions | UI-focused build process</p>
            </td>
        </tr>
        <tr>
            <td class="avatar-box">
                <img src="Dave.jpg" alt="Profile photo" class="resume-avatar">
            </td>
            <td class="personal-info-box">
                <?php require('personalinfo.php'); ?>
            </td>
        </tr>
        
        <tr class="section-row">
            <td colspan="2">
                <?php include('objective.php'); ?>
            </td>
        </tr>
        
        <tr class="section-row">
            <td colspan="2">
                <?php require('education.php'); ?>
            </td>
        </tr>
        
        <tr class="section-row">
            <td colspan="2">
                <?php include('skills.php'); ?>
            </td>
        </tr>
        
        <tr class="section-row">
            <td colspan="2">
                <?php include('affiliation.php'); ?>
            </td>
        </tr>
        
        <tr class="section-row">
            <td colspan="2">
                <?php require('experience.php'); ?>
            </td>
        </tr>
    </table>

</body>
</html>