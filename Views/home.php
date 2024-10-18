<?php
    session_start();
    if((!isset($_SESSION['id_user']) == true) AND (!isset($_SESSION['nome']) == true) AND 
       (!isset($_SESSION['email']) == true)){

        unset($_SESSION['id_user']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        header('Location: /Link_Shop_Updated/Controlers/Signs.php');
        exit();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/Link_Shop_Updated/Model/home/home_PageProprerties.css">
    <link rel="stylesheet" href="/Link_Shop_Updated/Model/home/home_2ndMenu_bar.css">
    <link rel="stylesheet" href="/Link_Shop_Updated/Model/home/home_main.css">
    <link rel="stylesheet" href="/Link_Shop_Updated/Model/home/home_produtos.css">
    <link rel="stylesheet" href="/Link_Shop_Updated/Model/home/home_footer2.css">
    
    <script defer src="/Link_Shop_Updated/Model/home/home_2ndBar.js"></script>
</head>
<body>

    <header>
    <div class="content" id="content">
        <div class="navBar" id="navBar">
            <img src="/Link_Shop_Updated/Model/home/MediaFiles/MozArt blue.png" alt="" class="logotipo">
            <ul class="navUL" id="navUL">
                <a href="home.html" class="homeSelected" id="home" onclick="toogle_navClick()">Home</a>
                <a class="link2" id="menuGeral" onclick="toogle_navClick2()">Menu Geral</a>
                <a href="Host.html" id="subescrever" class="link3" onclick="toogle_navClick3()">Subescrever</a>
                <a class="link4" id="contactos" onclick="toogle_contactar()">Contactos</a>
                <img src="/Link_Shop_Updated/Model/home/MediaFiles/abaixo.png" alt="" class="imgSelection" id="imgSelection">
                    <ul class="UlSigns">
                        <a class="link5">SignIn</a>
                        <a class="link6">SignUp</a>
                    </ul>   
                    <a href="UserProfile.html"><img src="/Link_Shop_Updated/Model/home/MediaFiles/1DeJunho.jpg" alt="" class="imgProfile"></a> 
            </ul>
            <div class="Contact_btn">

                <div class="contentBox" id="contentBox" onmouseout="toogle_fecharContactar()">
                    <ul class="ulContent">
                        <li class="mensagem1">Jerson Tomas</li>
                        <li class="tendencias2">Gerson Tomas</li>
                        <li class="galeria3">Nenhuma</li>
                        <li class="eventos4">Nenhuma</li>
                        <li class="mozTiktok">MozArt</li>
                        <li class="portifolio5" >842340266</li>
                        <li class="contactos6">873726691</li>
                    </ul>
                    <ul class="imgComunicar">
                        <img src="/Link_Shop_Updated/Model/home/MediaFiles/whatsapp.png" alt="" class="imgWhatsapp" id="imgMsg1">
                        <img src="/Link_Shop_Updated/Model/home/MediaFiles/facebook (1).png" alt="" class="imgFacebook" id="imgtendencia" >
                        <img src="/Link_Shop_Updated/Model/home/MediaFiles/instagram (1).png" alt="" class="imgInstagram" id="imggaleria" >
                        <img src="/Link_Shop_Updated/Model/home/MediaFiles/twitter.png" alt="" class="imgTwiter" id="c">
                        <img src="/Link_Shop_Updated/Model/home/MediaFiles/tik-tok.png" alt="" class="tiktok">
                        <img src="/Link_Shop_Updated/Model/home/MediaFiles/chamar.png" alt="" class="imgChamar" id="imgcontactos">
                        <img src="/Link_Shop_Updated/Model/home/MediaFiles/chamar.png" alt="" class="imgChamar2">
                    </ul>
                </div>
          </div>
        </div>
    </div>

    <div style="position: absolute; background: green; margin-top: 150px; margin-lft: 200px; color: white; z-index: 5;">
        <?php
            echo $user_id = $_SESSION['id_user'];
            echo '<br>';
            echo $nome_User = $_SESSION['nome'];  
            echo '<br>';
            echo $emails = $_SESSION['email'];  
        ?>
    </div>

            <div class="HeaderColor">
                  <img src="/Link_Shop_Updated/Model/home/MediaFiles/vecteezy_pico-da-montanha-na-austria_1223301" alt="" class="ProfileImg2">
                  <li class="boxAside_Shadow" style="list-style: none;"></li>
                  <div class="BoxAside" id="BoxAside">
                    
                      <span class="pubTitle">Adicionar publicidade
                        <!-- <a href="Host.html"><img src="v/Model/home/MediaFiles/mais.png" alt="" class="publicidade_adicionar"></a> -->
                      </span>

                      <ul class="internalBox_aside">
                         
                      </ul>
                      <img src="/Link_Shop_Updated//Model/home/MediaFiles/abaixo.png" alt="" class="dropDown_Icon" id="dropDown_Icon" onclick="toogle_asideDown()">
                  </div>

                 <div class="perfil-conteiner">
                      <img src="/Link_Shop_Updated//Model/home/MediaFiles/3d-house-model-with-modern-architecture.jp" alt="" class="profil">
                  <span for="" class="companyName"><b>Procure e encontre, <br> venda e compre</b> produtos e servicos</span>
                </div>

                <div class="aboutSearch">
                    <ul class="barra_pesquisa">
                        <input type="text" class="input_pesquisar" id="" placeholder="Pesquisar por servicos e produtos">
                        <img src="/Link_Shop_Updated//Model/home/MediaFiles/lupa.png" class="imgPesquisa">
                    </ul>
                        <div>
                             
                        </div>
                </div>                  
            </div>
    
    </header>

    <main>
            <div class="Titulo_principal">
                   <pre>Destaques</pre>
                   <li class="underline-destaque"></li>

                <div class="principais_destaques">
                    <li class="destaque1">
                        <img src="/Link_Shop_Updated/Model/home/produtos/Design promotion Flayer.jpg" alt="" class="destqimg1">
                        <ul class="destaqueDsc">
                            <li><h4 >MozArt</h4></li>
                            <li style="font-size: 15px;">Design</li>
                        </ul>
                        <a href="nnn" class="Destques_explorar"> Explorar </a>
                    </li>
            
                        <li class="destaque2">
                            <img src="/Link_Shop_Updated/Model/home/produtos/3d-house-model-with-modern-architecture.jpg" alt="" class="destqimg2">
                            <ul class="destaqueDsc2">
                                <li><h4 >MozArt</h4></li>
                                <li style="font-size: 15px;">Design</li>
                            </ul>
                            <a href="nnn" class="Destques_explorar2"> Explorar </a>
                        </li>
            
                            <li class="destaque3">
                                <img src="/Link_Shop_Updated/Model/home/produtos/T-shirt design1.jpg" alt="" class="destqimg3">
                                <ul class="destaqueDsc3">
                                    <li><h4 >MozArt</h4></li>
                                    <li style="font-size: 15px;">Design</li>
                                </ul>
                                <a href="nnn" class="Destques_explorar3"> Explorar </a>
                            </li>
            
                                <li class="destaque4">
                                    <img src="/Link_Shop_Updated/Model/home/produtos/colar.jpeg" alt="" class="destqimg4">
                                    <ul class="destaqueDsc4">
                                        <li><h4 >MozArt</h4></li>
                                        <li style="font-size: 15px;">Design</li>
                                    </ul>
                                    <a href="nnn" class="Destques_explorar4"> Explorar </a>
                                </li>
                </div>

                <h2>Virtual Market</h2>
                <li class="underlines"></li>
                <p style="margin-top: 400px;">Procure, encontre e explore produtos e servicos diversos <br>
                   interaja com os fornecedeores e negoceia ativos.<br>
                </p>
                   <ul class="categorias1">
                    <li><img src="/Link_Shop_Updated/Model/home/Icons/vetor (1).png" alt=""></li>
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/garfo.png" alt=""></li>
                    <li><img src="/Link_Shop_Updated/Model/home/Icons/aprendizagem-online.png" alt=""></li>
                    <li><img src="/Link_Shop_Updated/Model/home/Icons/escrita.png" alt=""></li>
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/processador.png" alt=""></li>
                </ul>
                <ul class="categorias2">
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/lampada.png" alt=""></li>
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/adicionar-produto.png" alt=""></li>
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/usuarios-do-grupo.png" alt=""></li>
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/crescimento.png" alt=""></li>
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/alvo.png" alt=""></li>
                </ul>
            </div>
            <ul class="shortBoxes_Dsc">
                <li>Diversas Categorias <br> De diferentes visoes e conquitas</li>
            </ul>
            <img src="/Link_Shop_Updated/Model/home/MediaFiles/3parte.png" alt="" class="imgPhone">
            <span class="phoneText">Just One Click</span>

        <div class="aboutUs">
            <li class="round-element"></li>
            <li class="round-element2"></li>
        </div>


        <label for="" class="prodPopulares">Diversos produtos e servicos</label>
    <div class="maisProd">
        <li class="prod1">
            <div class="">
                <div class="back_btn"><img src="/Link_Shop_Updated/Model/home/Icons/coracao.png" alt="" id="like_btn" class="like_Coracao" onclick="like_btn()"></div>
            </div>
                <img src="/Link_Shop_Updated/Model/home/produtos/Design promotion Flayer.jpg" alt="" class="designGrafico">
                <ul class="prodDsc1">
                    <li><h4 >MozArt</h4></li>
                    <li style="font-size: 15px;">Design</li>
                </ul>
            <a href="nnn" class="Exp"> Explorar </a>
        </li>

            <li class="prod2">
                <div class="">
                    <div class="back_btn"><img src="/Link_Shop_Updated/Model/home/Icons/coracao.png" alt="" id="like_btn" class="like_Coracao" onclick="like_btn()"></div>
                </div>
                    <img src="/Link_Shop_Updated/Model/home/produtos/3d-house-model-with-modern-architecture.jpg" alt="" class="plantas3D">
                    <ul class="prodDsc2">
                        <li><h4 >MozArt</h4></li>
                        <li style="font-size: 15px;">Design</li>
                    </ul>
                <a href="nnn" class="Exp2"> Explorar </a>
            </li>

                <li class="prod3">
                    <div class="">
                        <div class="back_btn"><img src="/Link_Shop_Updated/Model/home/Icons/coracao.png" alt="" id="like_btn" class="like_Coracao" onclick="like_btn()"></div>
                    </div>
                        <div class="">
                            <div class="back_btn"><img src="/Link_Shop_Updated/Model/home/Icons/coracao.png" alt="" id="like_btn" class="like_Coracao" onclick="like_btn()"></div>
                        </div>
                            <img src="/Link_Shop_Updated/Model/home/produtos/T-shirt design1.jpg" alt="" class="designCamisetes">
                            <ul class="prodDsc3">
                                <li><h4 >MozArt</h4></li>
                                <li style="font-size: 15px;">Design</li>
                            </ul>
                    <a href="nnn" class="Exp3"> Explorar </a>
                </li>

                    <li class="prod4">
                        <div class="">
                            <div class="back_btn"><img src="/Link_Shop_Updated/Model/home/Icons/coracao.png" alt="" id="like_btn" class="like_Coracao" onclick="like_btn()"></div>
                        </div>
                            <img src="/Link_Shop_Updated/Model/home/produtos/colar.jpeg" alt="" class="colares">
                            <ul class="prodDsc4">
                                <li><h4 >MozArt</h4></li>
                                <li style="font-size: 15px;">Design</li>
                            </ul>
                        <a href="nnn" class="Exp4"> Explorar </a>
                    </li>

                <li class="prod5">
                    <div class="">
                        <div class="back_btn"><img src="/Link_Shop_Updated/Model/home/Icons/coracao.png" alt="" id="like_btn" class="like_Coracao" onclick="like_btn()"></div>
                    </div>
                        <img src="/Link_Shop_Updated/Model/home/produtos/celulares.jpg" alt="" class="celulares">
                            <ul class="prodDsc5">
                                <li><h4 >MozArt</h4></li>
                                <li style="font-size: 15px;">Design</li>
                            </ul>
                    <a href="nnn" class="Exp5"> Explorar </a>
                </li>
    </div>

    <div class="maisProd2">
        <li class="prod1">
            <div class="">
                <div class="back_btn"><img src="/Link_Shop_Updated/Model/home/Icons/coracao.png" alt="" id="like_btn" class="like_Coracao" onclick="like_btn()"></div>
            </div>
                <img src="/Link_Shop_Updated/Model/home/produtos/Design promotion Flayer.jpg" alt="" class="designGrafico">
                <ul class="prodDsc1">
                    <li><h4 >MozArt</h4></li>
                    <li style="font-size: 15px;">Design</li>
                </ul>
            <a href="nnn" class="Exp"> Explorar </a>
        </li>

            <li class="prod2">
                <div class="">
                    <div class="back_btn"><img src="/Link_Shop_Updated/Link_Shop_Updated/Model/home/Icons/coracao.png" alt="" id="like_btn" class="like_Coracao" onclick="like_btn()"></div>
                </div>
                    <img src="/Link_Shop_Updated/Model/home/produtos/3d-house-model-with-modern-architecture.jpg" alt="" class="plantas3D">
                    <ul class="prodDsc2">
                        <li><h4 >MozArt</h4></li>
                        <li style="font-size: 15px;">Design</li>
                    </ul>
                <a href="nnn" class="Exp2"> Explorar </a>
            </li>

                <li class="prod3">
                    <div class="">
                        <div class="back_btn"><img src="/Link_Shop_Updated/Model/home/Icons/coracao.png" alt="" id="like_btn" class="like_Coracao" onclick="like_btn()"></div>
                    </div>
                        <img src="/Link_Shop_Updated/Model/home/produtos/T-shirt design1.jpg" alt="" class="designCamisetes">
                        <ul class="prodDsc3">
                            <li><h4 >MozArt</h4></li>
                            <li style="font-size: 15px;">Design</li>
                        </ul>
                    <a href="nnn" class="Exp3"> Explorar </a>
                </li>

                    <li class="prod4">
                        <div class="">
                            <div class="back_btn"><img src="/Link_Shop_Updated/Model/home/Icons/coracao.png" alt="" id="like_btn" class="like_Coracao" onclick="like_btn()"></div>
                        </div>
                            <img src="/Link_Shop_Updated/Model/home/produtos/colar.jpeg" alt="" class="colares">
                            <ul class="prodDsc4">
                                <li><h4 >MozArt</h4></li>
                                <li style="font-size: 15px;">Design</li>
                            </ul>
                        <a href="nnn" class="Exp4"> Explorar </a>
                    </li>

                <li class="prod5">
                    <div class="">
                        <div class="back_btn"><img src="/Link_Shop_Updated/Model/home/Icons/coracao.png" alt="" id="like_btn" class="like_Coracao" onclick="like_btn()"></div>
                    </div>
                        <img src="/Link_Shop_Updated/Model/home/produtos/celulares.jpg" alt="" class="celulares">
                            <ul class="prodDsc5">
                                <li><h4 >MozArt</h4></li>
                                <li style="font-size: 15px;">Design</li>
                            </ul>
                    <a href="nnn" class="Exp5"> Explorar </a>
                </li>
    </div>

                    <div>
           <li class="round-element00"></li>
           <li class="round-element22"></li>
                        <span class="templates">Modelos exclusivos que voce pode adquirir
                        </span>
                        
                        <ul class="maisProd3">
                            <li class="temp1">
                                <img src="/Link_Shop_Updated/Model/home/produtos/Bolo.jpeg" alt="" class="imgtemp1">
                                <ul class="prodtempDsc1">
                                    <li><h4 >MozArt</h4></li>
                                    <li style="font-size: 15px;">Design</li>
                                </ul>
                                <a href="nnn" class="tempExp"> Explorar </a>
                            </li>
                    
                                <li class="temp2">
                                    <img src="/Link_Shop_Updated/Model/home/produtos/Katia Salgados.jpg" alt="" class="imgtemp2">
                                    <ul class="prodtempDsc2">
                                        <li><h4 >MozArt</h4></li>
                                        <li style="font-size: 15px;">Design</li>
                                    </ul>
                                    <a href="nnn" class="tempExp2"> Explorar </a>
                                </li>
                    
                                    <li class="temp3">
                                        <img src="/Link_Shop_Updated/Model/home/produtos/pizza.jpg" alt="" class="imgtemp3">
                                           <ul class="prodtempDsc3">
                                                <li><h4 >MozArt</h4></li>
                                                <li style="font-size: 15px;">Design</li>
                                            </ul>
                                        <a href="nnn" class="tempExp3"> Explorar </a>
                                    </li>
                    
                                    <li class="temp4">
                                        <img src="/Link_Shop_Updated/Model/home/produtos/perfume_vermekho.jpg" alt="" class="imgtemp4">
                                        <ul class="prodtempDsc4">
                                            <li><h4 >MozArt</h4></li>
                                            <li style="font-size: 15px;">Design</li>
                                        </ul>
                                       <a href="nnn" class="tempExp4"> Explorar </a>
                                    </li>
                    
                               <li class="temp5">
                                   <img src="/Link_Shop_Updated/Model/home/produtos/LogoArt.jpg" alt="" class="imgtemp5">
                                   <ul class="prodtempDsc5">
                                    <li><h4 >MozArt</h4></li>
                                    <li style="font-size: 15px;">Design</li>
                                </ul>
                                   <a href="nnn" class="tempExp5"> Explorar </a> 
                                </li>
                    
                           <li class="temp6">
                               <img src="/Link_Shop_Updated/Model/home/produtos/men's_shoes.jpeg" alt="" class="imgtemp6">
                               <ul class="prodtempDsc6">
                                <li><h4 >MozArt</h4></li>
                                <li style="font-size: 15px;">Design</li>
                            </ul>
                               <a href="nnn" class="tempExp6"> Explorar </a>
                            </li>
                        </ul>

                    </div>  

                <div class="aboutLinkShop">
                    <li class="round-element"></li>
                    <li class="round-element2"></li>
                    <ul class="DscLinkShop">
                        <li class="MozArt_boxContent">
                            <img src="/Link_Shop_Updated/Model/home/MediaFiles/MozArt blue.png" alt="" class="logoMz">
                            <p class="paragrafo">
                                <b style="font-weight: bold; color: #003333; ">MozArt</b> e plataforma que prove um espaco na internet(web) onde provedores de produtos e servicos dispoem e <br>
                                expoem seus items/recursos e habilidades de forma visual por meio
                                <b>Galerias</b> em diversas Categorias
                            </p>
                        <div class="garant">
                            <b class="pprt">Garantias</b>
                            <p class="paragrafoBullets">
                                <ul class="ulProperties">
                                    <li class="paragrafoBullets">Um espco na internet</li>
                                    <li class="paragrafoBullets">Disposicao de produtos e servicos</li>
                                    <li class="paragrafoBullets">interacao/comunicacao</li>
                                </ul>
                            </p>
                        </div>
                        <div class="comunicacao">
                            <b class="pprt2">Contacto e comunicacao</b>
                            <p class="paragrafo2">
                                A comunicacao ou contacto entre o <b>cliente </b> e o <b>fornecedor</b> dos produtos e servicos
                                nao e feita(o) dentro desta plataforma. <br>
                                Os provedores fornecem links que o redirecionarao ao onde o negocio e as transacoes serao efectuadas.
                            </p>
                        </div>
                        </li>

                        <li></li>
                    </ul>
                </div>    

        <div class="Spaces">
                    <span class="callBox2"></span>
                    <img src="/Link_Shop_Updated/Model/home/produtos/DesignInvite.jpg" alt="" class="callImg">
                    <span  class="callImgback"></span>

                <div class="Logos">
                    <div class="logo_Slide" id="logo_Slide" onclick="toogle_pause()">
                        <img src="/Link_Shop_Updated/Model/home/MediaFiles/garfo.png" alt="">
                        <img src="/Link_Shop_Updated/Model/home/Icons/culinaria.png" alt="">
                        <img src="/Link_Shop_Updated/Model/home/MediaFiles/feijoada.png" alt="">
                        <img src="/Link_Shop_Updated/Model/home/MediaFiles/pedaco-de-bolo.png" alt="">
                        <img src="/Link_Shop_Updated/Model/home/Icons/designer-de-web.png" alt="">
                        <img src="/Link_Shop_Updated/Model/home/MediaFiles/ui.png" alt="">
                        <img src="/Link_Shop_Updated/Model/home/MediaFiles/processador.png" alt="">
                        <img src="/Link_Shop_Updated/Model/home/Icons/sala-de-estar (1).png" alt="">
                        <img src="/Link_Shop_Updated/Model/home/Icons/photo-camera.png" alt="">
                        <img src="/Link_Shop_Updated/Model/home/Icons/photoshop.png" alt="">
                        <img src="/Link_Shop_Updated/Model/home/Icons/adobe-illustrator.png" alt="">
                        <img src="/Link_Shop_Updated/Model/home/Icons/indesign.png" alt="">
                        <img src="/Link_Shop_Updated/Model/home/Icons/icons8-corel-draw-67.png" alt="">
                        <img src="/Link_Shop_Updated/Model/home/Icons/logotipo-do-google-sketchup.png" alt="">
                        <img src="/Link_Shop_Updated/Model/home/Icons/icons8-archicad-24.png" alt="">
                        <img src="/Link_Shop_Updated/Model/home/MediaFiles/aprendizagem-online.png" alt="">
                        <img src="/Link_Shop_Updated/Model/home/Icons/escrita.png" alt="">
                        <img src="/Link_Shop_Updated/Model/home/MediaFiles/colar.png" alt="">
                        <img src="/Link_Shop_Updated/Model/home/MediaFiles/iphone.png" alt="">
                        <img src="/Link_Shop_Updated/Model/home/MediaFiles/roupas-masculinas.png" alt="">
                    </div> 
                </div>
                <script>
                    var copiar_imagens = document.querySelector('.logo_Slide').cloneNode(true);
                    document.querySelector('.Logos').appendChild(copiar_imagens);              
                </script>

            <span class="servicos2">
                <span class="inviteTitle">Melhore a perspectiva dos seu nicho com o MozArt</span><br>
                <span class="underline2"></span>
                <span class="callText">Voce trabalha com Design, culinaria, vendas de diversos, artes(fotografia, escrita,...)
                    e quer tornar conhecido o seu trabalho? <br>
                    O <b>MozArt</b> oferece um espaco especifico para voce.
                    </span>
                <a href="Host.html"><span class="Join_btn"> Junta-te a nos</span></a>
             </span>
        </div> 
    <form action="" method="post">
        <div class="comentSection">

            <li class="round-elementDecor2"></li>
            <li class="round-elementDecor"></li>
            <span class="feedBack">
                Deixe o seu feedback
                <li class="underline_feedbk"></li>
            </span>
            <ul class="inputName">
                <li>Nome</li>
                <li>Email</li>
            </ul>
            <span class="comentNome">Comentarios</span>
            <ul class="inputs">
                <input type="text" class="inputNome" placeholder="Insira o nome">
                <input type="text" name="" id="" class="inputEmail" placeholder="Insira o Email/contacto">
                <textarea type="text" class="inputComentario" placeholder="comentarios"></textarea>
            </ul>
            <input type="submit" class="btn_submit">
        </div>
    </form>
                       <span class="gratidao"></span>

    </main>
             
        <footer>
            <div class="footerLine">
                <span class="footerlogo">
                    <img src="/Link_Shop_Updated/Model/home/MediaFiles/MozArt blue.png" alt="logotipo MozArt" class="logoMArt">
                    <h3 class="mzArt">MozArt</h3>
                    <span class="mzArtDsc">Graphic Design Services</span>
                </span>
                <ul class="ImgAdress">
                    <a href=""><img src="/Link_Shop_Updated/Model/home/MediaFiles/whatsapp.png" alt="" class="img1"></a>
                    <a href=""><img src="/Link_Shop_Updated/Model/home/MediaFiles/facebook (1).png" alt="" class="img2"></a>
                    <a href=""><img src="/Link_Shop_Updated/Model/home/MediaFiles/instagram (1).png" alt="" class="img3"></a>
                    <a href=""><img src="/Link_Shop_Updated/Model/home/MediaFiles/gmail.png" alt="" class="img4"></a> 
                    <a href=""><img src="/Link_Shop_Updated/Model/home/MediaFiles/tik-tok.png" alt="" class="img5"></a>    
                </ul>
                <ul class="contactos2">
                    <li class="nr1">842340266 | 87372691</li>
                </ul>
                <div class="copyright">
                    &copy;<label><b>2024</b></label>
                </div>           
            </div>
        </footer>
</body>
</html>