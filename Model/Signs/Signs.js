var display = document.getElementById('display');
var darkBlueBox = document.getElementById('darkBlueBox');
var darkBlue_content = document.getElementById('darkBlue_content');
var darkBlue_content2 = document.getElementById('darkBlue_content2');
var displays2 = document.getElementById('displays2');

var loginSlide = false;
var login = true;

var blur_elements = document.getElementById('round-blurElements');
var blur_elements2 = document.getElementById('round-blurElements2');

function toogle_Cadastro(){
    if(login){
        display.style.transition = '1s';
        display.style.display = 'none';
        
        loginSlide = !loginSlide;
        if(loginSlide){ 
            darkBlue_content2.style.display = 'block';
            darkBlue_content.style.display = 'none';
            darkBlueBox.style.marginLeft = '-450px';
            darkBlueBox.style.transition = '1s';

            displays2.style.display = 'block';
            displays2.style.transitionDelay = '2s';
            displays2.style.marginLeft = '345px';
        }
        blur_elements.style.background = 'linear-gradient(to right,  rgb(6, 255, 247), rgb(224, 0, 216))';
        blur_elements2.style.background = 'linear-gradient(to right,  rgb(6, 255, 247), rgb(224, 0, 216))';
    }
}
function toogle_Login(){      
        if(login){
            darkBlue_content.style.display = 'block';
            darkBlueBox.style.marginLeft = '450px';
            darkBlueBox.style.transition = '1s';

            displays2.style.display = 'none';
            displays2.style.marginLeft = '345px';
            display.style.display = 'block';

            if(darkBlueBox.style.marginleft = '450px'){
                darkBlue_content2.style.display = 'none';
            } 
            loginSlide = !loginSlide;
            if(loginSlide){
                display.style.transition = '1s';
                display.style.display = 'block';
        }
        blur_elements.style.background = 'linear-gradient(to right, #b9dada, #00ffcc)';
        blur_elements2.style.background = 'linear-gradient(to right, #b9dada, #00ffcc)';
    }
}

//POPUP CLOSE FUNCTION
function fechar_PopUp(){

    document.getElementById('popUp').style.display = 'none';
    document.getElementById('popUps').style.display = 'none';
    document.getElementById('confirmPassword');  
    document.getElementById('popUp_sucess').style.display = 'none';   
    document.getElementById('popEmpty').style.display = 'none';  
    }


        document.getElementById('loginForm').addEventListener('submit', function(event) {    
            const novaSenha = document.getElementById('newPassword').value;
            const ConfirmSenha = document.getElementById('confirmPassword').value;

            if(novaSenha !== ConfirmSenha){
               
                event.preventDefault();
                document.getElementById('popUp').style.display = 'block';  

            //piscar duas vezes quando a senha nao estuver correctamente confirmada
            function piscaErro(){
                let numPiscas = 0;
                const maxPiscas = 6;

                const intervalId = setInterval(() =>{
                        
                        document.getElementById('confirmPassword').style.borderColor = (numPiscas % 2 === 0) ?
                        'rgba(255, 0, 0, 0.9)' : '';
                        numPiscas ++;

                        if(numPiscas >= maxPiscas){
                             clearInterval(intervalId);
                        }
                    }, 200);
            }    
            piscaErro();
            
        }else{
            document.getElementById('popUp_sucess').style.display = 'block';

        }     
    });   

    //LOGIN VALIDATION FORM
    const email = document.getElementById('usuMail').value;
    const password = document.getElementById('passwords').value;
    /*function LoginTeste(){

        if(document.getElementById('usuMail') == document.getElementById('passwords')){
                
        }else{
            document.getElementById('popUps').style.display = 'block';
            event.preventDefault();
        }
    }*/

   /* function reloadPage(){
        setTimeout(function() {
            location.reload();
        }, 9000);
    }*/

    
                         
  

