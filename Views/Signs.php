<?php

    if(isset($_POST['Cadastrar_submit'])){

        include_once('connectionDb.php');

                $base_url = "https://www.example.com/";

                $numUrl = rand(30, 570);
                
        
            function randomString($tamanho = 20){
                $caracteres = "abcdefgijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
                $comprimentosCaracteres = strlen($caracteres);
                $stringAleatoria = '';
        
                    for( $x = 0; $x < $tamanho; $x++){
                        $stringAleatoria .= $caracteres[random_int(0, $comprimentosCaracteres - 1)];
                    }        
                return $stringAleatoria;
            }

            $nomeCompleto = $_POST['nome_Completo'];
            $Gemail = $_POST['email_Cadastro'];
            $Password = $_POST['senha_Cadastro'];
            $senha_confirmar = $_POST['confirmar_senha'];
        
            if($Password == $senha_confirmar){
                //Do nome completo ele pega o primero nome antes do espacamento
                $NomeCompleto = explode(" ", $nomeCompleto)[0]; 
                //removendo osnespacos no inicio e nom fim das strings
                $nomeFormatado = trim($nomeCompleto);
                $email = trim($Gemail);
                $senha = trim($Password);

                //criptografia
                $hashing_senha = password_hash($senha, PASSWORD_BCRYPT);
                  //$hashed_password = $hashing_senha . " " . randomString();
                //senha (criptografia) separada do random string
                //$hashed_password2 = explode(" ", $hashed_password)[0];
                
                $url = $base_url . $NomeCompleto. "-" . randomString() . $numUrl . "/" . randomString();

                $stmt = $conexao->prepare("INSERT INTO cadastros (nome, email, senha, url_adress)
                                            VALUES (?, ? , ?, ?) ");
                $stmt->bind_param("ssss", $nomeFormatado, $email, $hashing_senha, $url);
                $stmt->execute();

            }else{
                echo "ERRO";
            }
    }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">                                                           
    <title>Signs</title>
    <link rel="stylesheet" href="/Link_Shop_Updated/model/Signs/SignsStyle.css">
     <script defer src="/Link_Shop_Updated/model/Signs/Signs.js"></script>
</head>
<body style="overflow: hidden">

<form action="StesteLogin.php" method="POST">
        <img src="/Link_Shop_Updated/model/home/MediaFiles/MozArt blue.png" alt="" class="logoMz">
    <div class="Box1">
        <div class="display" id="display">
            <span class="txtEntrar">Log in</span>
            <div class="icons">
                <a href=""><img src="/Link_Shop_Updated/model/home/MediaFiles/facebook (1).png" alt=""></a>
                <a href=""><img src="/Link_Shop_Updated/model/home/MediaFiles/pesquisa.png" alt="" class="iconGoogle"></a>

                <span class="contaExistente">Acesse a tua conta exitente.</span>
            <ul class="icons-input">
                <img src="Link_Shop_Updated/model/home/MediaFiles/o-email.png" alt="" class="email">
                <img src="Link_Shop_Updated/model/home/MediaFiles/cadeado-trancado.png" alt="" class="cadeado">
            </ul>
                <ul class="inputs">
                   <input name="usuMail" type="text" class="usEmail" id="usuMail" placeholder="Email ou usuario" required>
                   <input name="passwords" type="password" class="password" id="passwords" placeholder="Senha" required>
                </ul>

                <a href=""><span class="recuperarSenha">Esqueceu a palavra-passe?</span></a>
                <input name="submitLog" class="btn_entrar3" type="submit" value="enviar4" onclick="LoginTeste()">
            </div>  
        </div>
    </form>
    
       
    <form action="Signs.php" method="post" id="loginForm">
        <div class="displays2" id="displays2">
            <span class="txtEntrar2">Crie uma nova Conta</span>
            <div class="icons3">
                <a href=""><img src="/Link_Shop_Updated/model/home/MediaFiles/facebook (1).png" alt=""></a>
                <a href=""><img src="/Link_Shop_Updated/model/home/MediaFiles/pesquisa.png" alt="" class="iconGoogle"></a>

                <span class="contaExistente2" id="advise-camp">Preencha os campos com precisao</span>
            <ul class="icons-input3">
                <img src="/Link_Shop_Updated/model/home/MediaFiles/do-utilizador - Cópia.png" alt="" class="2">
                <img src="/Link_Shop_Updated/model/home/MediaFiles/o-email.png" alt="" class="email2">
                <img src="/Link_Shop_Updated/model/home/MediaFiles/cadeado-trancado.png" alt="" class="cadeado2">
                <img src="/Link_Shop_Updated/model/home/MediaFiles/cadeado-trancado.png" alt="" class="cadeado3">
            </ul>
                <ul class="inputs3">
                   <input name="nome_Completo" type="text" class="nome2" id="nome_Completo" placeholder="Nome completo" required>
                   <input name="email_Cadastro" type="text" class="usEmail2" id="email_cadastro" placeholder="Email" required>
                   <input name="senha_Cadastro" type="text" class="password2" id="newPassword" placeholder="Nova senha" required>
                   <input name="confirmar_senha" type="password" class="password3" id="confirmPassword" placeholder="Confirmar senha" required>
                </ul>
                <button name="Cadastrar_submit" class="btn_entrar3" id="signUp_btn" type="submit" onclick="reloadPage()">Cadastrar</button>

            </div>        
        </div>
</div>

                    <div name="BoxMessage" class="BoxMessage" id="popUp" > 
                        <img src="/Link_Shop_Updated/model/home/MediaFiles/atencao.png" alt="" class="imgAlert">
                        <img src="/Link_Shop_Updated/model/home/MediaFiles/x.png" alt="" class="popupX" onclick="fechar_PopUp()">
                        <span id="popText" class="popText"><b>Email ou senha incorrectos</b>
                            <br> A senha inserida deve concidir para confirmacao</span>
                    </div>

                    <div name="BoxMessage" class="BoxMessage3" id="popUps" > 
                        <img src="/Link_Shop_Updated/model/home/MediaFiles/atencao.png" alt="" class="imgAlert3">
                        <img src="/Link_Shop_Updated/model/home/MediaFiles/x.png" alt="" class="popupX3" onclick="fechar_PopUp()">
                        <span id="popText" class="popText3 "><b>Senha nao confirmada. </b>
                            <br> Verifique se o email e a senha estao devidamente correctos</span>
                    </div>

                    <div name="BoxMessage" class="BoxMessage3" id="popEmpty" > 
                        <img src="/Link_Shop_Updated/model/home/MediaFiles/atencao.png" alt="" class="imgAlert3">
                        <img src="/Link_Shop_Updated/model/home/MediaFiles/x.png" alt="" class="popupX3" onclick="fechar_PopUp()">
                        <span id="popText" class="popText4 "><b> Os campos estao vazios</b>
                            <br> Por favor, preencha os campos</span>
                    </div>

                <div name="BoxMessage" class="BoxMessage2" id="popUp_sucess" > 
                    <img src="/Link_Shop_Updated/model/home/MediaFiles/sucesso.png" alt="" class="ImgSucess">
                    <span src="/Link_Shop_Updated/model/home/MediaFiles/x.png" alt="" class="Join_btn2" onclick="fechar_PopUp()" ><a href="Signs.php">Prosseguir</a></span> 
                    <span id="popText2" class="popText2"> Sucesso!</span>
                    <span class="popDsc">Parabens, a sua conta foi criada com sucesso</span>
                    <span class="membrasia">Membro</span>
                </div>
                

        <div class="box_btn" id="darkBlueBox">
            <div class="darkBlue_content" id="darkBlue_content">
                <span class="titleBox">Bem-Vindo</span>
                <span class="signText">Cadastre-se agora, seja membro</span>
                <span class="btn_entrar4" onclick="toogle_Cadastro()">Cadastrar</span>
            </div>
            <div class="darkBlue_content2" id="darkBlue_content2">
                <span class="titleBox2">Bem-Vindo</span>
                <span class="signText2">Voce ja possue uma conta?
                    continue <br>conectado a nos.
                </span>
                <span class="btn_entrar2" id="btn_entrar2" onclick="toogle_Login()">Entrar</span>
            </div>

        </div>
                <li class="round-element00" id="round-blurElements" onclick="toogle_styleClick()"></li>
                <li class="round-element22" id="round-blurElements2" onclick="toogle_styleClick()"></li>
    </form>

</body>
</html>