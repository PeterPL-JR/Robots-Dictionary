<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Słownik - Narzędzia</title>
    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/tools-styles.css" type="text/css">
    <script src="scripts/library.js"></script>
    <style>
        button {
            width: 260px;
            padding: 6px;
            font: normal 20px 'Verdana';
            margin-bottom: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div style="text-align: center;">

<!-- Logo -->
<div id="logo">
    <div id="image-div">
        <img src="images/logo.png">
    </div>
    <div id="name-div">
        <div>Lang Store</div>
        <div id="page-name">
            <div id="page-icon">
                <img src="images/settings.png">
                <div>Narzędzia</div>
            </div>
        </div>
    </div>
    <div style="clear: both;"></div>
</div>

<?php 

include 'php/database.php';
$query = mysqli_query($base, "SELECT * FROM pages;");

$links = [];
$tools = [];

// Get buttons data from DB
$counter = 0;
while($row = mysqli_fetch_assoc($query)) {

    $content = $row['content'];
    $link = $row['link'];
    $image = $row['image'];

    if($counter < 2) {
        echo <<<LINK
        <div class='main-tool-button' style="">
            <a href="$link" target="_blank">
                <div class='image-div'>
                    <img src='images/$image'>
                </div>
                <div class='link-div'>
                    $content
                </div>
            </a>
        </div>
        LINK;
    } else {
        array_push($tools, <<<LINK
            <a href="$link" target="_blank">
            <div class='tool-button' style="">
                <div class='image-div'>
                    <img src='images/$image'>
                </div>
                <div class='link-div'>
                    $content
                </div>
            </div></a>
        LINK);
    }
    array_push($links, $link);
    $counter++;
}
echo "<div style='height: 20px;'></div>";

// Generate buttons
for($i = 0; $i < count($tools); $i += 2) {
    
    $tool1 = $tools[$i];
    $tool2 = $tools[$i + 1];
    
    echo <<<TOOL
        <div class='tools-group'>
            $tool1 $tool2 <div style='clear: both;'></div>
        </div>
    TOOL;
}
?>
</div>
</body>
</html>