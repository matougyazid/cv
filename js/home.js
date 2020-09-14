function showNavElem() {
    var elem1 = document.getElementById('Elem1'),
        elem2 = document.getElementById('Elem2'),
        elem3 = document.getElementById('Elem3'),
        elem4 = document.getElementById('Elem4'),
        elem5 = document.getElementById('Elem5'),
        elem = document.getElementById('menuElem');
    elem.style.display = "block";
    elem1.style.display = "block";
    elem2.style.display = "block";
    elem3.style.display = "block";
    elem4.style.display = "block";
    elem5.style.display = "block";
}
function hideNavElem() {
    var elem1 = document.getElementById('Elem1'),
        elem2 = document.getElementById('Elem2'),
        elem3 = document.getElementById('Elem3'),
        elem4 = document.getElementById('Elem4'),
        elem5 = document.getElementById('Elem5'),
        elem = document.getElementById('menuElem');
    elem.style.display = "none";
    elem1.style.display = "block";
    elem2.style.display = "block";
    elem3.style.display = "block";
    elem4.style.display = "block";
    elem5.style.display = "block";
}
function showinformation() {
    var age = document.getElementById('age'),
        description = document.getElementById('description'),
        photoexplication1 = document.getElementById('photo-explication1');
    age.style.display = "block";
    description.style.display = "block";
    photoexplication1.style.top = "0";
    photoexplication1.style.height = "100%";
}
function hideinformation() {
    var age = document.getElementById('age'),
        description = document.getElementById('description'),
        photoexplication1 = document.getElementById('photo-explication1');
    age.style.display = "none";
    description.style.display = "none";
    photoexplication1.style.top = "63%";
    photoexplication1.style.height = "37%";
}