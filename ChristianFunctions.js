/*Functions to show an item. 
Used to hide and show Kontaktform by button click*/
function showObject(IDName) {
    if (document.getElementById(IDName)) {
        document.getElementById(IDName).style.display = "block";
    }
}
/*Function shows the Kontaktform and chenged the Betreff to the name of the button*/
function showKontaktform(button) {
    var betreffName = button.innerHTML.trim();
    
    showObject("hiddenKontakt");
    document.getElementById("Betreff").value = betreffName;
}


/*Functions related to the slideshow*/
var slideImages;
var index = 0;
var active = "slideshowFigure activeFigure";
var inactive = "slideshowFigure";

function changeClass(newClass, i) {
    slideImages[i].className = newClass;
}
function cycleIndex() {
    if (index >= slideImages.length) {
        index = 0;
    } else if (index < 0) {
        index = slideImages.length - 1;
    }
}
function switchImage(x) {
    slideImages = document.getElementsByClassName("slideshowFigure");
    changeClass(inactive, index);
    index += x;
    cycleIndex();
    changeClass(active, index);
}


function toggleMenu(button, menuID) {
    var n = document.getElementById(menuID);
    var menuclass;
    if (menuID == "nav"){
        menuclass = menuID;
    } else {
        menuclass = "dropdown";
    }
    if (n.className == menuclass) {
        n.className += " open";
        button.setAttribute("aria-expanded", "true");
    } else {
        n.className = menuclass;
        button.setAttribute("aria-expanded", "false");
    }
}
