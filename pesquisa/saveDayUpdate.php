<?php
header('Content-Type: text/html; charset=utf-8');
require_once("../conexao/conexao.php");


$dia = $_POST['dia'];
$relatorioDiario = filter_input(INPUT_POST, 'relatorioDiario', FILTER_SANITIZE_STRING);



$result_relatorio = "UPDATE relatorio SET relatorioDiario='$relatorioDiario' WHERE dia='$dia'";

$resultado_relatorio = mysqli_query($conecta, $result_relatorio);



mysqli_close($conecta);
header("Location: index.php");




