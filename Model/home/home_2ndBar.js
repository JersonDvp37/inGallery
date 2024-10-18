/*header box aside*/
var boxAside = document.getElementById('BoxAside');
var dropDown_Icon = document.getElementById('dropDown_Icon');
var dropDown = false;

function toogle_asideDown(){
    dropDown = !dropDown;
    if(dropDown){
        boxAside.style.height = '745px';
        boxAside.style.transition = '1s';
        dropDown_Icon.style.transform = 'rotate(180deg)';
    }else{
        dropDown_Icon.style.transform = 'rotate(0deg)';
        boxAside.style.height = '590px';
    }
}

/*Contactar*/
var contentBox = document.getElementById('contentBox');
var imgSelection = document.getElementById('imgSelection');
var showContactBox = false;

function toogle_contactar(){
  
    if(showContactBox = !showContactBox){
        contentBox.style.display = 'block';
        imgSelection.style.transform = 'rotate(180deg)';
        contentBox.style.transition = '1s';
        contactosClicks.style.color = 'white';

    }else if('mouseclick'){
        contentBox.style.display = 'none';
        imgSelection.style.transform = 'rotate(0deg)'
        contentBox.style.transition = '1s';
        contactosClicks.style.color = '#003333';
    }
}
/*
*/ 

/*Principal navbar*/
var homeClick = document.getElementById('home');
var menuGeral = document.getElementById('menuGeral');
var subescrever = document.getElementById('subescrever');
var contactosClicks = document.getElementById('contactos');
var barClick = true;

function toogle_navClick(){
    if('mouseclick'){
        homeClick.style.color = 'white';
    }else{
        homeClick.style.color = '#003333';
    }

}

let prevScrollpos = window.pageYOffset;

window.onscroll = function() {
  let currentScrollPos = window.pageYOffset;

  if (prevScrollpos > currentScrollPos) {
    document.querySelector('.navBar').style.top = "0";
    document.querySelector('.navBar').style.transition = '1s';

  } else {
    document.querySelector('.navBar').style.top = "-60px"; // Adjust according to header height
    document.querySelector('.navBar').style.transition = '1s';

  }
  prevScrollpos = currentScrollPos;
}

//Second Navbar
var ndNav = document.getElementById('2ndNav-bar');
var ndnav_content = document.getElementById('ndNavbar_conteiner');
var mozart = document.getElementById('MozArt2');

var showSideBar = false;
var slidin = true;

function toogle_sideBar(){   
    showSideBar = !showSideBar;
    if(showSideBar & slidin){
        ndNav.style.width = '245px';
        ndnav_content.style.display = 'flex';
    }else{
        ndNav.style.width = '67px';
        ndnav_content.style.display = 'flex';
    }
}

function toogle_CloseSideBar(){ 
    if(showSideBar){
        ndNav.style.width = '67px';
        ndnav_content.style.display = 'flex';
    }
}

//sIDE BAR OPENNING FRAMES
var mensagens_frame = document.getElementById('mensagens_frame');
var closes = document.getElementById('close');

var tendencia_frame = document.getElementById('tendencias_frame');
var closes1 = document.getElementById('close1');

var galeria_frame = document.getElementById('galerias_frame');
var closes2 = document.getElementById('close2');

var evento_frame = document.getElementById('eventos_frame');
var portifolio_frame = document.getElementById('portifolio_frame');
var contacto_frame = document.getElementById('contactos_frame');
var sobre_frame = document.getElementById('sobre_frame');
var closes7 = document.getElementById('close7');

var content = document.getElementById('content');
var display = 0;

function toogle_mensagem(){

    if(display == 0){
       mensagens_frame.style.display = 'block';
       closes.style.display = 'block';
       mensagens_frame.style.animationDuration = '1s';
       content.style.filter = 'blur(2px)';
       mensagens_frame.style.position = "fixed"
       display = 1;
    }
}
function fechar(){
    if(display == 1){
       mensagens_frame.style.display = 'none';
       closes.style.display = 'none';
       mensagens_frame.style.animationName = 'display';
       mensagens_frame.style.transition = '1s'
       content.style.filter = 'none'
       display = 0;
    }
}
//tendencia
function toogle_tendencia(){

    if(display == 0){
        tendencias_frame.style.display = 'block';
       closes.style.display = 'block';
       tendencias_frame.style.animationDuration = '1s';
       content.style.filter = 'blur(2px)';
       tendencia_frame.style.position = "fixed"
       display = 1;
    }
}
function toogle_fechar1(){
    if(display == 1){
        tendencias_frame.style.display = 'none';
       tendencias_frame.style.animationName = 'display';
       tendencias_frame.style.transition = '1s'
       content.style.filter = 'none'
       display = 0;
    }
}
//galeria
function toogle_galeria(){

    if(display == 0){
        galeria_frame.style.display = 'block';
        closes.style.display = 'block';
        galeria_frame.style.animationDuration = '1s';
        content.style.filter = 'blur(2px)';
        galeria_frame.style.position = "fixed"
        display = 1;
    }
}
function toogle_fechar2(){
    if(display == 1){
        galeria_frame.style.display = 'none';
        galeria_frame.style.animationName = 'display';
        galeria_frame.style.transition = '1s'
        content.style.filter = 'none'
        display = 0;
    }
}
//eventos
function toogle_evento(){

    if(display == 0){
        evento_frame.style.display = 'block';
        closes.style.display = 'block';
        evento_frame.style.animationDuration = '1s';
        content.style.filter = 'blur(2px)';
        evento_frame.style.position = "fixed"
        display = 1;
    }
}
function toogle_fechar3(){
    if(display == 1){
        evento_frame.style.display = 'none';
        evento_frame.style.animationName = 'display';
        evento_frame.style.transition = '1s'
        content.style.filter = 'none'
        display = 0;
    }
}
//portifolio
function toogle_portifolio(){

    if(display == 0){
        portifolio_frame.style.display = 'block';
        closes.style.display = 'block';
        portifolio_frame.style.animationDuration = '1s';
        content.style.filter = 'blur(2px)';
        portifolio_frame.style.position = "fixed"
        display = 1;
    }
}
function toogle_fechar4(){
    if(display == 1){
        portifolio_frame.style.display = 'none';
        portifolio_frame.style.animationName = 'display';
        portifolio_frame.style.transition = '1s'
        content.style.filter = 'none'
        display = 0;
    }
}
//contactos
function toogle_contacto(){

    if(display == 0){
        contacto_frame.style.display = 'block';
        closes.style.display = 'block';
        contacto_frame.style.animationDuration = '1s';
        content.style.filter = 'blur(2px)';
        contacto_frame.style.position = "fixed"
        display = 1;
    }
}
function toogle_fechar5(){
    if(display == 1){
        contacto_frame.style.display = 'none';
        contacto_frame.style.animationName = 'display';
        contacto_frame.style.transition = '1s'
        content.style.filter = 'none'
        display = 0;
    }
}
//sobre
function toogle_sobre(){

    if(display == 0){
        sobre_frame.style.display = 'block';
        closes7.style.display = 'block';
        sobre_frame.style.display = 'block';
        sobre_frame.style.animationDuration = '1s';
        content.style.filter = 'blur(2px)';
        sobre_frame.style.position = "fixed"
        display = 1;
    }
}
function toogle_fechar6(){
    if(display == 1){
        sobre_frame.style.display = 'none';
        sobre_frame.style.animationName = 'display';
        sobre_frame.style.transition = '1s'
        content.style.filter = 'none'
        display = 0;
    }
}

//LIKING AND EVENT ATRIBUTE
var clicked = true;
function like_btn(){
    clicked = !clicked;
    if(clicked){
        document.getElementById('like_btn').setAttribute('src', '/Link_Shop_Updated/Model/home/Icons/coracaoRed.png');
    }else{
        document.getElementById('like_btn').setAttribute('src', '/Link_Shop_Updated/Model/home/Icons/coracao.png');
    }
}

