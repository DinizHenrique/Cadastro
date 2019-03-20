<?php
require_once("../conexao/conexao.php"); 
header('Content-Type: text/html; charset=utf-8');

// insercao no banco
    if(isset($_POST["nome"])) {
        $clienteID      = $_POST["clienteID"];
        $nome           = $_POST["nome"];
        $cep            = $_POST["cep"];
        $endereco       = $_POST["endereco"];
        $numero         = $_POST["numero"];
        $complemento    = $_POST["complemento"];
        $bairro         = $_POST["bairro"];
        $cidade         = $_POST["cidade"];
        $estado         = $_POST["estado"];
        $telefone1      = $_POST["telefone1"];
        $telefone2      = $_POST["telefone2"];
        $nascimento     = $_POST["nascimento"];
        $cpf            = $_POST["cpf"];
        $responsavel    = $_POST["responsavel"];
        $old_ap         = $_POST["old_ap"];
        $relatorio      = $_POST["relatorio"];
        
        $modelo1            = $_POST["modelo1"];
        $numero_aparelho1   = $_POST["numero_aparelho1"];
        $marca_aparelho1    = $_POST["marca_aparelho1"];
        $data_compra1       = $_POST["data_compra1"];
        $nota_fiscal1       = $_POST["nota_fiscal1"];
        
        
        $modelo2            = $_POST["modelo2"];
        $numero_aparelho2   = $_POST["numero_aparelho2"];
        $marca_aparelho2    = $_POST["marca_aparelho2"];
        $data_compra2       = $_POST["data_compra2"];
        $nota_fiscal2       = $_POST["nota_fiscal2"];
        
        
        $alterar     = "UPDATE cadastro SET ";
        $alterar    .= " nome='$nome', cep='$cep', endereco='$endereco', numero='$numero', complemento='$complemento', bairro='$bairro', cidade='$cidade', estado='$estado', telefone1='$telefone1', telefone2='$telefone2', nascimento='$nascimento', cpf='$cpf', responsavel='$responsavel', modelo1='$modelo1', numero_aparelho1='$numero_aparelho1', marca_aparelho1='$marca_aparelho1', data_compra1='$data_compra1', nota_fiscal1='$nota_fiscal1', modelo2='$modelo2', numero_aparelho2='$numero_aparelho2', marca_aparelho2='$marca_aparelho2', data_compra2='$data_compra2', nota_fiscal2='$nota_fiscal2', old_ap='$old_ap', relatorio='$relatorio' ";
        $alterar    .= "WHERE clienteID='$clienteID' ";
        
        
        $operacao_alterar = mysqli_query($conecta, $alterar);
        if(!$operacao_alterar) {
            die("Erro no banco");
        }  
    } else {
        echo "Erro";
    }
    header("Location: index.php");
    


?>
