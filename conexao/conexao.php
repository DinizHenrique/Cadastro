<?php

        //Passo 1 - Abrir conexao
        $conecta = mysqli_connect("localhost", "root", "", "unisom");

        //Passo 2 - Testar conexão
        if(mysqli_connect_errno()){
            die("Conexão Falhou: " . mysqli_connect_errno() );
        }
        
    
        mysqli_set_charset($conecta, "utf8");


?>
