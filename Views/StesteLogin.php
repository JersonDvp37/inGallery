<?php
    session_start();
    
        include_once('connectionDb.php');

        $usuMail = $_POST['usuMail'];
        $passwords = $_POST['passwords'];

        
        $stmt = $conexao->prepare("SELECT id_user, nome, senha FROM cadastros WHERE email = ?");
        $stmt ->bind_param("s", $usuMail);
        $stmt ->execute();
        $stmt ->bind_result($idUser, $nomeUser, $password_hashed);
        $stmt ->fetch();

        //$senha = explode(" ", $senhaSalt)[0];

            if($password_hashed && password_verify($passwords, $password_hashed)){
               
                $_SESSION['id_user'] = $idUser;
                $_SESSION['nome'] = $nomeUser;
                $_SESSION['email'] = $usuMail;

                header('Location: home.php');
            }else{

                unset($_SESSION['id_user']);
                unset($_SESSION['nome']);
                unset($_SESSION['email']);

                header('Location: /Link_Shop_Updated/Views/Signs.php');
            }
       

    $stmt->close();
    $conexao->close(); 

?>