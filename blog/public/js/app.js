/*
 *
 * alt
 *
 * */

var img = document.getElementsByTagName("img")
var text = document.getElementById("text")

for (var i = 0; i < img.length; i++) {
    img[i].addEventListener("mouseover", function () {
        var alt = this.alt
        text.textContent = alt
    });
    img[i].addEventListener('mouseout', function () {
        text.textContent = ''
    })
}
/*
 *
 * slide
 *
 *
 * */
var index = 0;

function slide() {
    var x = document.getElementsByClassName("slide");
    for (var i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    index++;
    if (index > x.length) {
        index = 1
    }
    x[index - 1].style.display = "block";
    setTimeout(slide, 3000);
}
slide();
/**
 *
 *
 *tabs
 *
 * */
var tab = document.querySelector('.list')
var texte = document.querySelector('.lorem')
for (var i = 0; i < tab.length; i++) {
    tab.addEventListener('click', function () {

        texte.classList.toggle('active')

    });
}

/**
 * *
 * *
 * *date
 * *
 * */
var a = new Date().toLocaleDateString();
document.querySelector('.date').innerHTML = a

