<?php
     
     $dbHost = 'Localhost';
     $dbUsername = 'root';
     $dbPassword ='';
     $dbName = 'user_datas';

     $conexao = new mysqli ($dbHost, $dbUsername, $dbPassword,$dbName);

     if($conexao->connect_errno)
     {
          echo "Erro";
     }

       
    

?>