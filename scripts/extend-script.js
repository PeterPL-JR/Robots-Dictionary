var inputs = [
    getId("content"),
    getId("translated")
];

var icons = [
    getId("dict1"),
    getId("dict2"),
];

var levelIndex = -1;

var typeInput = getId("type-input");
var levelInput = getId("level-input");
var toolsIcon = getId("tools-icon");

loadPage();
inputs[0].focus();

function addWord() {
}

function loadPage() {
    var typeSelected = localStorage.getItem("dict_typeIndex");
    if(typeSelected) {
        typeInput.selectedIndex = parseInt(typeSelected);
        toolsIcon.style.display = (typeSelected == 0 || typeSelected == 1) ? "inline-block" : "none";
    }

    var levelSelected = localStorage.getItem("dict_levelIndex");
    if(levelSelected) {
        levelIndex = parseInt(levelSelected);
        setLevelInput();
    }
}


function setLevelInput() {
    if(levelIndex >= 6) levelIndex = -1;
    if(levelIndex == -1) {
        levelInput.innerHTML = "Brak";
        levelInput.style.color = "#b9b9b9";
    } else {
        levelInput.innerHTML = levelIndex;
        levelInput.style.color = "gray";
    }
}

function changeInput(index) {
}

function changeTypeInput() {
    var selected = typeInput.selectedIndex;
    localStorage.setItem("dict_typeIndex", selected);   
    toolsIcon.style.display = (selected == 0 || selected == 1) ? "inline-block" : "none";
}

function changeLevelInput() {
    levelIndex++;
    setLevelInput();
    localStorage.setItem("dict_levelIndex", levelIndex);
}