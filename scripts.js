var dieTabOpen = false;
var userTabOpen = false;

function toggleRollTabOpen() {
    dietab = document.getElementById("rollingArea");
    dieButton = document.getElementById("rollTab");
    
    if (dieTabOpen) {
        dietab.style.left = "100vw";
        dieButton.style.right = "0vw";
        dieTabOpen = false;
    } else {
        dietab.style.left = "80vw";
        dieButton.style.right = "20vw";
        dieTabOpen = true;
    }
}

function toggleUserTabOpen() {
    usertab = document.getElementById("userInfoArea");
    userButton = document.getElementById("userTab");

    if (userTabOpen) {
        usertab.style.right = "100vw";
        userButton.style.left = "0vw";
        userTabOpen = false;
    } else {
        usertab.style.right = "80vw";
        userButton.style.left = "20vw";
        userTabOpen = true;
    }
}

function minus(quantityArea) {
    
    if (Number(quantityArea.value) > 0) {
        quantityArea.value = Number(quantityArea.value) - 1;
    }
} 

function plus(quantityArea) {

    quantityArea.value = Number(quantityArea.value) + 1;
}

function rollDSix() {
    quantityToRoll = Number(document.getElementById("quantityAread6").value);
    resultsArea = document.getElementById("results");
    totalArea = document.getElementById("total");
    var total = 0;

    resultsArea.innerHTML = "Results: (D6) <br>";
    totalArea.innerHTML = "Total: ";
    
    for (var i = 0; i < quantityToRoll; i++) {
        value = Math.floor((Math.random() * 6) + 1);

        total += value;

        resultsArea.innerHTML += value + " ";
    }

    totalArea.innerHTML += total;
}

function rollDTen() {
    quantityToRoll = Number(document.getElementById("quantityAread10").value);
    resultsArea = document.getElementById("results");
    totalArea = document.getElementById("total");
    var total = 0;

    resultsArea.innerHTML = "Results: (D10) <br>";
    totalArea.innerHTML = "Total: ";
    
    for (var i = 0; i < quantityToRoll; i++) {
        value = Math.floor((Math.random() * 10) + 1);

        total += value;

        resultsArea.innerHTML += value + " ";
    }

    totalArea.innerHTML += total;
}

function rollDTwelve() {
    quantityToRoll = Number(document.getElementById("quantityAread12").value);
    resultsArea = document.getElementById("results");
    totalArea = document.getElementById("total");
    var total = 0;

    resultsArea.innerHTML = "Results: (D12) <br>";
    totalArea.innerHTML = "Total: ";
    
    for (var i = 0; i < quantityToRoll; i++) {
        value = Math.floor((Math.random() * 12) + 1);

        total += value;

        resultsArea.innerHTML += value + " ";
    }

    totalArea.innerHTML += total;
}

function setUpButtons() {
    rollTabOpenButton = document.getElementById("rollTab");
    userTabOpenButton = document.getElementById("userTab");

    minusd6Button = document.getElementById("minusd6");
    plusd6Button = document.getElementById("plusd6");
    rollDSixButton = document.getElementById("submitD6");

    minusd10Button = document.getElementById("minusd10");
    plusd10Button = document.getElementById("plusd10");
    rollDTenButton = document.getElementById("submitD10");

    minusd12Button = document.getElementById("minusd12");
    plusd12Button = document.getElementById("plusd12");
    rollDTwelveButton = document.getElementById("submitD12");

    /*-----------------------------------------*/

    rollTabOpenButton.addEventListener("click", function(){toggleRollTabOpen()});
    userTabOpenButton.addEventListener("click", function(){toggleUserTabOpen()});

    minusd6Button.addEventListener("click", function(){minus(document.getElementById("quantityAread6"))});
    plusd6Button.addEventListener("click", function(){plus(document.getElementById("quantityAread6"))});
    rollDSixButton.addEventListener("click", function(){rollDSix()});

    minusd10Button.addEventListener("click", function(){minus(document.getElementById("quantityAread10"))});
    plusd10Button.addEventListener("click", function(){plus(document.getElementById("quantityAread10"))});
    rollDTenButton.addEventListener("click", function(){rollDTen()});

    minusd12Button.addEventListener("click", function(){minus(document.getElementById("quantityAread12"))});
    plusd12Button.addEventListener("click", function(){plus(document.getElementById("quantityAread12"))});
    rollDTwelveButton.addEventListener("click", function(){rollDTwelve()});
}


function pageLoaded() {
    setUpButtons();
}


document.addEventListener("DOMContentLoaded", function(){
    pageLoaded();
});