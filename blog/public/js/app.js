/**
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
/**
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
/*var tabs = document.querySelectorAll('.tabs a');
for (var i = 0;i<tabs.length; i++){
    tabs[i].addEventListener('click', function(){
        var li = this.parentNode;
        var div = this.parentNode.parentNode.parentNode;

        div.querySelector('.tabs .active').classList.remove('active');
        li.classList.add('active');
        div.querySelector('.lorem.active').classList.toggle('active');

        div.querySelector(this.getAttribute('href')).classList.toggle('active');
    });
}*/

function show(id) {
    var d = document.getElementById(id);
    for (var i = 1; i<=3; i++) {
        if (document.getElementById('content_'+i))
        {
            document.getElementById('content_'+i).classList.remove('active');
        }
    }
    if (d){
        d.classList.toggle('active')
    }
}
function tabs(id) {
    var c = document.getElementById(id);
    for (var i = 1; i<=3; i++) {
        if (document.getElementById('tab_'+i))
        {
            document.getElementById('tab_'+i).classList.remove('active');
        }
    }
    if (c){
        c.classList.toggle('active')
    }
}

/**
 *
 *
 * chrono
 *
 *
 **/
var centi=0; // initialise les dixièmes
var secon=0;//initialise les secondes
var minu=0; //initialise les minutes
var chrono = function () {
    var dixiem = document.querySelector('#dixiem');//Je récup l'affichage des dixièmes
    var seconde = document.querySelector('#seconde');//Je récup l'affichage des secondes
    var minute = document.querySelector('#minutes');//Je récup l'affichage des minutes
    centi++// J'incrémente les centièmes
    //quand les centièmes arrive a 9 je remets le à 0 et j'incrémente les secondes
    if(centi>9){
        centi = 0;
        secon++
    }
    //quand les secondes arrive a 59 je remets le à 0 et j'incrémente les minutes
    if (secon>59){
        secon = 0;
        minu++
    }
    //j'initialise mon chrono pour qu'il démarre avec 100 centièmes de secondes
    setTimeout(chrono,100);
    //Je renvoie l'info dans mon html
    dixiem.innerHTML = centi
    seconde.innerHTML = secon + " secondes"
    minute.innerHTML = "Temps passé sur la page: "+ minu + " Minutes"
}
//J'injecte ma fonction dans mon html
setTimeout(chrono,100);

/**
 *
 *
 * date
 *
 **/
var a = new Date().toLocaleDateString();// Je récup la date actuelle et je la converti au format fr
document.querySelector('.date').innerHTML = "Nous sommes le: "+ a //je renvoie dans le html
/**
 *
 *
 * horloge
 *
 **/
var date = new Date();
var hour = date.getHours();
var minute = date.getMinutes();
var seconde = date.getSeconds();
var time = function() {
    if(seconde<59){
        seconde++;
    }else{
        minute++;
        seconde=00;
    }
    if(minute>59){
        hour++;
        minute=0;
    }
    document.getElementById("hours").innerHTML = "Il est "+ hour+":"+minute+":"+seconde;
    setTimeout(time, 1000);
}
setTimeout(time, 1000);
