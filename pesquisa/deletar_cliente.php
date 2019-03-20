<?php
require_once("../conexao/conexao.php"); 
header('Content-Type: text/html; charset=utf-8');

$clienteID = filter_input(INPUT_GET, 'clienteID', FILTER_SANITIZE_NUMBER_INT);
if(!empty($clienteID)){
    
	$result_cliente = "DELETE FROM cadastro WHERE clienteID='$clienteID'";
	$resultado_cliente = mysqli_query($conecta, $result_cliente);
	if(mysqli_affected_rows($conecta)){
		$_SESSION['msg'] = "<p style='color:green;'>Usuário apagado com sucesso</p>";
		header("Location: index.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
		echo "Erro";
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário</p>";
	header("Location: index.php");
}



    // Fechar conexao
    mysqli_close($conecta);
?>