var img = document.getElementsByTagName("img");
var text = document.getElementById("text");
var title = document.querySelector(".title")

for (var i = 0; i < img.length; i++) {
    img[i].addEventListener("mouseover", function () {
        var alt = this.alt;
        text.textContent = alt;
        var x = this.title
        title.textContent = x
    });
    img[i].addEventListener('mouseout', function () {
        text.textContent = ''
        title.textContent = ''
    })
}
var d = new Date()
var ds = d.getSeconds(1000)
document.write(ds).setTimeout((0,1000))