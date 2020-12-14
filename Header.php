<!DOCTYPE html>
<html lang="de">
<head> 
    <title> Christian Hackbarth-Johnson -
        <?php
        echo $pageName;
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $description; ?>" >
    <meta name="keywords" content="<?php echo $keywords_text; ?>" >
    <meta name="author" content="Christian Hackbarth-Johnson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Christian.css">
    <script src="ChristianFunctions.js" type="text/javascript"></script>
</head>
<body> 
    <div class="container"><!--Closing tags will be in footer file-->
        <div class="header">
            <a href="Home.php">
                <img src="logo.jpg" alt="Logo: Skizze von einem meditierenden Menschen" id="logo">
            </a>
            <div>
                <h1>Christian Hackbarth-Johnson</h1>
                <h2>
                    <?= $pageName ?>
                </h2>
            </div>
        </div>
    
    