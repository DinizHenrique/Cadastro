<?php
header('Content-Type: text/html; charset=utf-8');
require_once("../conexao/conexao.php"); 


$dia = date('Y-m-d');
$relatorioDiario = filter_input(INPUT_POST, 'relatorioDiario', FILTER_SANITIZE_STRING);



$result_relatorio = "INSERT INTO relatorio (dia, relatorioDiario) VALUES ('$dia', '$relatorioDiario')";

$resultado_relatorio = mysqli_query($conecta, $result_relatorio);


mysqli_close($conecta);
header("Location: relatorioUpdate.php");
