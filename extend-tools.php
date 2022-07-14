<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Słownik - Dodaj Hasła</title>
    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/extend-styles.css" type="text/css">
    <script src="scripts/library.js"></script>
</head>
<body>
<!-- Logo -->
<div id="logo">
    <div id="image-div">
        <img src="images/logo.png">
    </div>
    <div id="name-div">
        <div>Lang Store</div>
        <div id="page-name">
            <div id="page-icon">
                <img src="images/tools.png">
                <div>Dodaj Hasła</div>
            </div>
        </div>
    </div>
    <div style="clear: both;"></div>
</div>

<div class="word-div">
    <!-- Word - Robots -->
    <div class='desc'>Słowo</div><br>
    <div class="decoration">
        <img src="images/dictionary.png"><br>
    </div>
    <input id="content" class="text-input" onkeyup="changeInput(0)" placeholder="Wpisz Hasło">
    <img src="images/dictionary.png" id="dict1"><br>
    
    <!-- Translated - Polish -->
    <div class='desc'>Znaczenie</div><br>
    <div class="decoration">
        <img src="images/examples.png"><br>
    </div>
    <input id="translated" class="text-input" onkeyup="changeInput(1)" placeholder="Wpisz Znaczenie">
    <img src="images/dictionary.png" id="dict2"><br>
</div>
</body>
</html>