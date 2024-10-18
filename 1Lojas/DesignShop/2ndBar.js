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
        boxAside.style.height = '385px';
    }
}

/*Contactar*/
var contentBox = document.getElementById('contentBox');
var imgSelection = document.getElementById('imgSelection');
var showContactBox = false;

function toogle_contactar(){
  
    if(showContactBox = !showContactBox){
        contentBox.style.display = 'block';
        imgSelection.style.filter = 'invert(100%)';
        imgSelection.style.transform = 'rotate(180deg)';
        contentBox.style.transition = '1s';

    }else if('mouseclick'){
        contentBox.style.display = 'none';
        imgSelection.style.transform = 'rotate(0deg)'
        contentBox.style.transition = '1s';
        imgSelection.style.filter = 'invert(0%)';
    }
}
/*
*/ 

/*Principal navbar*/
let prevScrollpos = window.pageYOffset;

window.onscroll = function() {
  let currentScrollPos = window.pageYOffset;

  if (prevScrollpos > currentScrollPos) {
    document.querySelector('.navBar').style.top = "0";
    document.querySelector('.navBar').style.transition = '1s';
    document.querySelector('.second-navbar-conteiner').style.transition = '1s';
    document.querySelector('.second-navbar-conteiner').style.top = '70px';
    document.querySelector('.second-navbar-conteiner').style.height = '598px';

  } else {
    document.querySelector('.navBar').style.top = "-60px"; // Adjust according to header height
    document.querySelector('.navBar').style.transition = '1s';
    document.querySelector('.second-navbar-conteiner').style.top = '15px';
    document.querySelector('.second-navbar-conteiner').style.height = '650px';
    document.querySelector('.second-navbar-conteiner').style.transition = '1s';
  }
  prevScrollpos = currentScrollPos;
}

//Second Navbar -- Sidebar
var ndNav = document.getElementById('2ndNav-bar');
var ndnav_content = document.getElementById('ndNavbar_conteiner');
var mozart = document.getElementById('MozArt2');

var showSideBar = true;
var showBar = false;

function toogle_sideBar(){   

    if(showSideBar){
        ndNav.style.width = '200px';
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

/*CATEGORIAS PESQUISA*/
var panfletos = document.getElementById('panfletos');
var templates = document.getElementById('templates');
var logotipos = document.getElementById('logotipos');
var cartoesV  = document.getElementById('cartoesVisitas');
var curiculos = document.getElementById('curiculos');
var tshirt    = document.getElementById('tshirt');

var imgPanfletos = document.getElementById('imgPanfletos');
var imgTeplates = document.getElementById('imgPTemplates');
var imgLogotipos = document.getElementById('imgLogotipos');
var imgCartaoV = document.getElementById('imgCartoesV');
var imgCurculos = document.getElementById('imgCuriculos');
var imgTshirt = document.getElementById('imgTshirt');

var img_categoria = document.getElementById('.img_categoria');
var dropDown_Categorias = document.getElementById('caixa_categoria');
var caret = document.getElementById('caret')
var categoria = false;


function categoria_Choose(){    
    categoria = !categoria;
    if(categoria){
        dropDown_Categorias.style.display = 'inline-block';
        dropDown_Categorias.style.height = '250px';
        dropDown_Categorias.style.transition = '0.5s';
        dropDown_Categorias.style.padding = '10px';
        caret.style.transform = 'rotate(180deg)';
    }else{
        dropDown_Categorias.style.height = '0px';
        dropDown_Categorias.style.display = 'block';
        dropDown_Categorias.style.transition = '0.5s';
        dropDown_Categorias.style.padding = '0px';
        caret.style.transform = 'rotate(0deg)';
    }
}
var initialText_categoria = document.getElementById('initialText_categoria');
var initialImg_categoria = document.querySelector('#CategoryImg');
var categorias = true;

function cat_panfleto(){
    if(categorias){
        initialText_categoria.innerHTML = panfletos.innerHTML;
        initialImg_categoria.setAttribute("src", "MediaFiles/folhetos.png");
    }else{
        panfletos.innerHTML = document.getElementById('initialText_categoria').innerHTML;
        initialImg_categoria.setAttribute("src", "MediaFiles/categoria.png");
    }
}

function cat_templates(){
    if(categoria){
        initialText_categoria.innerHTML = templates.innerHTML;
        initialImg_categoria.setAttribute("src", "MediaFiles/modelo.png");
    }else{
        initialImg_categoria.setAttribute("src", "MediaFiles/categoria.png");
    }
}

function cat_logotipos(){
    if(categoria){
        initialText_categoria.innerHTML = logotipos.innerHTML;
        initialImg_categoria.setAttribute("src", "MediaFiles/logo-design.png");
    }else{
        logotipos.innerHTML = initialImg_categoria.innerHTML;
        initialImg_categoria.setAttribute("src", "MediaFiles/categoria.png");
    }
}

var CartaoText = "C. visitas";
function cat_cartoesVisitas(){  
    if(categoria){
        initialText_categoria.innerHTML = CartaoText;
        initialImg_categoria.setAttribute("src", "MediaFiles/cartao-de-visitas.png");
    }else{
        cartoesV.innerHTML = initialImg_categoria.innerHTML;
        initialImg_categoria.setAttribute("src", "MediaFiles/categoria.png");
    }
}

function cat_curiculos(){
    if(categoria){
        initialText_categoria.innerHTML = curiculos.innerHTML;
        initialImg_categoria.setAttribute("src", "MediaFiles/portfolio.png");
    }else{
        initialImg_categoria.setAttribute("src", "MediaFiles/categoria.png");
    }
}

var tshirts = "T-shirts";
function cat_tshirt(){
    if(categoria){
        initialText_categoria.innerHTML = tshirts;
        initialImg_categoria.setAttribute("src", "MediaFiles/camiseta.png");
    }else{
        initialImg_categoria.setAttribute("src", "MediaFiles/categoria.png");
    }
}



//SIDE BAR OPENNING FRAMES
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

var bodyId = document.getElementById('body');


var imgMsgs = document.querySelector('#imgMsgs');
function toogle_mensagem(){
    //TROCAR IMAGEM
    imgMsgs.setAttribute("src", "MediaFiles/mensagens22.png");

    //QUANDO UMA JANELA E ABERTA O SIDEBAR REDUZ A LARGURA
    ndNav.style.width = '67px';

    if(display == 0){
       mensagens_frame.style.display = 'block';
       closes.style.display = 'block';
       mensagens_frame.style.animationDuration = '1s';     
       mensagens_frame.style.position = "fixed"
       document.getElementById('mensagem').style.background = 'linear-gradient(to right,  var(--boxShadow), var(--primaria))';
       display = 1;

       bodyId.style.position = 'fixed';
    }
}
function fechar(){
    imgMsgs.setAttribute("src", "MediaFiles/mensagens.png");

    if(display == 1){
       mensagens_frame.style.display = 'none';
       closes.style.display = 'none';
       mensagens_frame.style.animationName = 'display';
       mensagens_frame.style.transition = '1s'
       content.style.filter = 'none'
       document.getElementById('mensagem').style.background = 'none';
       display = 0;

       bodyId.style.position = 'unset';
       ndNav.style.width = '200px';
    }
}

//tendencia
var tendencia2 = document.querySelector('#imgtendenciass');
function toogle_tendencia(){
    //TROCAR IMAGEM
    tendencia2.setAttribute("src", "MediaFiles/tendencia2.png");

    //QUANDO UMA JANELA E ABERTA O SIDEBAR REDUZ A LARGURA
    ndNav.style.width = '67px';
    if(display == 0){
        tendencias_frame.style.display = 'block';
        closes.style.display = 'block';
        tendencias_frame.style.animationDuration = '1s';
        tendencia_frame.style.position = "fixed";
        document.getElementById('tendencias').style.background = 'linear-gradient(to right,  var(--boxShadow), var(--primaria))';
        display = 1;

        bodyId.style.position = 'fixed';
    }
}
function toogle_fechar1(){
    tendencia2.setAttribute("src", "MediaFiles/tendencia.png");

    //QUANDO UMA JANELA E ABERTA O SIDEBAR REDUZ A LARGURA
    ndNav.style.width = '67px';

    if(display == 1){
        tendencias_frame.style.display = 'none';
        tendencias_frame.style.animationName = 'display';
        tendencias_frame.style.transition = '1s'
        content.style.filter = 'none'
        document.getElementById('tendencias').style.background = 'none';
        document.getElementById('imgtendenciass').style.filter = 'invert(0%)';
        display = 0;

        bodyId.style.position = 'unset';
        ndNav.style.width = '200px';
    }
}

//galeria
var galery = document.querySelector('#imggalerias');
function toogle_galeria(){
    //TROCAR IMAGEM
    galery.setAttribute("src", "MediaFiles/galeria2.png");

    //QUANDO UMA JANELA E ABERTA O SIDEBAR REDUZ A LARGURA
    ndNav.style.width = '67px';

    if(display == 0){
        galeria_frame.style.display = 'block';
        closes.style.display = 'block';
        galeria_frame.style.animationDuration = '1s';
        galeria_frame.style.position = "fixed";
        document.getElementById('galeria').style.background = 'linear-gradient(to right,  var(--boxShadow), var(--primaria))';
        display = 1;

        bodyId.style.position = 'fixed';
    }
}
function toogle_fechar2(){
    galery.setAttribute("src", "MediaFiles/galeria.png");
    if(display == 1){
        galeria_frame.style.display = 'none';
        galeria_frame.style.animationName = 'display';
        galeria_frame.style.transition = '1s'
        content.style.filter = 'none';
        document.getElementById('galeria').style.background = 'none';
        display = 0;

        bodyId.style.position = 'unset';
        ndNav.style.width = '200px';
    }
}

//eventos
var eventoss = document.querySelector('#imgeventos');
function toogle_evento(){
    //TROCAR IMAGEM
    eventoss.setAttribute("src", "MediaFiles/evento2.png");

    //QUANDO UMA JANELA E ABERTA O SIDEBAR REDUZ A LARGURA
    ndNav.style.width = '67px';

    if(display == 0){
        evento_frame.style.display = 'block';
        closes.style.display = 'block';
        evento_frame.style.position = "fixed"
        document.getElementById('eventos').style.background = 'linear-gradient(to right,  var(--boxShadow), var(--primaria))';
        display = 1;

        bodyId.style.position = 'fixed';
    }
}
function toogle_fechar3(){
    //TROCAR IMAGEM
    eventoss.setAttribute("src", "MediaFiles/evento.png");

    if(display == 1){
        evento_frame.style.display = 'none';
        evento_frame.style.animationName = 'display';
        evento_frame.style.transition = '1s'
        content.style.filter = 'none'
        document.getElementById('eventos').style.background = 'none';
        display = 0;

        bodyId.style.position = 'unset';
        ndNav.style.width = '200px';
    }
}

//Portifolio
var portifolios = document.querySelector('#imgContactos');
function toogle_portifolio(){
    //TROCAR IMAGEM
    portifolios.setAttribute("src", "MediaFiles/portfolio2.png");

    //QUANDO UMA JANELA E ABERTA O SIDEBAR REDUZ A LARGURA
    ndNav.style.width = '67px';
    
    if(display == 0){
        portifolio_frame.style.display = 'block';
        closes.style.display = 'block';
        portifolio_frame.style.animationDuration = '1s';
        portifolio_frame.style.position = "fixed";
        display = 1;
        document.getElementById('portifolio').style.background = 'linear-gradient(to right,  var(--boxShadow), var(--primaria))';
        bodyId.style.position = 'fixed';
    }
}
function toogle_fechar4(){
    portifolios.setAttribute("src", "MediaFiles/portfolio.png");
    if(display == 1){
        portifolio_frame.style.display = 'none';
        portifolio_frame.style.animationName = 'display';
        portifolio_frame.style.transition = '1s'
        content.style.filter = 'none'
        display = 0;
        document.getElementById('portifolio').style.background = 'none)';
        bodyId.style.position = 'unset';
        ndNav.style.width = '200px';
    }
}

//Contactos
var contactos = document.querySelector('#imgportifolio');
function toogle_contacto(){
    //TROCAR IMAGEM
    contactos.setAttribute("src", "MediaFiles/telefone2.png");

    //QUANDO UMA JANELA E ABERTA O SIDEBAR REDUZ A LARGURA
    ndNav.style.width = '67px';

    if(display == 0){
        contacto_frame.style.display = 'block';
        closes.style.display = 'block';
        contacto_frame.style.animationDuration = '1s';
        //content.style.filter = 'blur(2px)';
        contacto_frame.style.position = "fixed";
        document.getElementById('contactos').style.background = 'linear-gradient(to right,  var(--boxShadow), var(--primaria))';
        display = 1;
    }
}
function toogle_fechar5(){
    contactos.setAttribute("src", "MediaFiles/telefone.png");
    if(display == 1){
        contacto_frame.style.display = 'none';
        contacto_frame.style.animationName = 'display';
        contacto_frame.style.transition = '1s'
        content.style.filter = 'none';
        document.getElementById('contactos').style.background = 'none';
        display = 0;

        bodyId.style.position = 'unset';
        ndNav.style.width = '200px';
    }
}

//Sobre
var sobreInfo = document.querySelector('#imgsobre');
function toogle_sobre(){
    sobreInfo.setAttribute("src", "MediaFiles/info2.png");

    //QUANDO UMA JANELA E ABERTA O SIDEBAR REDUZ A LARGURA
    ndNav.style.width = '67px';

    if(display == 0){
        sobre_frame.style.display = 'block';
        closes7.style.display = 'block';
        sobre_frame.style.display = 'block';
        sobre_frame.style.animationDuration = '1s';
        //content.style.filter = 'blur(2px)';
        sobre_frame.style.position = "fixed";
        document.getElementById('sobre').style.background = 'linear-gradient(to right,  var(--boxShadow), var(--primaria))';
        display = 1;

        bodyId.style.position = 'fixed';
    }
}
function toogle_fechar6(){
    sobreInfo.setAttribute("src", "MediaFiles/info.png");
    if(display == 1){
        sobre_frame.style.display = 'none';
        sobre_frame.style.animationName = 'display';
        sobre_frame.style.transition = '1s';
        content.style.filter = 'none';
        document.getElementById('sobre').style.background = 'none';
        display = 0;

        bodyId.style.position = 'unset';
        ndNav.style.width = '200px';
    }
}


