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
<body style="text-align: center;">
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

<div id="word-div">
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

<div id="properties-div">
    <!-- Type -->
    <div class='desc'>Typ</div><br>
    <select onchange="changeTypeInput();" id="type-input" style="width: 240px;">
    <?php
        include 'php/database.php';
        $types_query = mysqli_query($base, "SELECT name_pl FROM types ORDER BY id;");

        while($row = mysqli_fetch_row($types_query)) {
            echo "<option>".ucwords($row[0])."</option>";
        }
    ?>
    </select>
    <img src="images/settings.png" id="tools-icon"><br>

     <!-- Level -->
    <div class='desc'>Poziom</div><br>
    <div onclick="changeLevelInput();" id="level-input" style="width: 150px;">Brak</div>
</div>

<button class="extend-button" onclick="addWord();" style="margin-top: 15px;">Dodaj</button>
<script src="scripts/extend-script.js"></script>

</body>
</html>