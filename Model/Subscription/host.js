var criarLoja = document.getElementById('form-Conteiner');
var publicidade = document.getElementById('form-Conteiner2');

var btn_CriarLoja = document.getElementById('criarLoja');
var btn_publicidade = document.getElementById('pub');

var paragrafo_aside = document.getElementById('TextoAside');
var formSlide = true;
var formSlide2 = true;


function toogle_publicidade(){
    if(formSlide){
        criarLoja.style.marginLeft = '900px';
        publicidade.style.marginLeft = '40px';

        btn_publicidade.style.border = '0px solid #ffff';
        btn_CriarLoja.style.border = 'none';
        btn_publicidade.style.boxShadow = '0px 0px 10px var(--formas)';
        btn_CriarLoja.style.boxShadow = 'none';
        btn_publicidade.style.color = 'white';
        btn_CriarLoja.style.color = '#003333';

        paragrafo_aside.style.marginTop = '-780px';
        paragrafo_aside.style.transition = '1s';
    }
}

function toogle_criarLoja(){
    if(formSlide2){
        criarLoja.style.marginLeft = '40px';
        publicidade.style.marginLeft = '900px';

        btn_publicidade.style.border = 'none';
        btn_CriarLoja.style.border = '0px solid #ffff';
        btn_CriarLoja.style.boxShadow = '0px 0px 10px var(--formas)';
        btn_publicidade.style.boxShadow = 'none';
        btn_CriarLoja.style.color = 'white';
        btn_publicidade.style.color = '#003333';
        paragrafo_aside.style.marginTop = '0px';
    }
}

