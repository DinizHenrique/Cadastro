<?php
$date = date('d-m-Y');
require_once("../conexao/conexao.php");
        
$day = date('Y-m-d');
$result_day = "SELECT * FROM relatorio WHERE dia = '$day'";
$resultado_day = mysqli_query($conecta, $result_day);
$row_day = mysqli_fetch_assoc($resultado_day);

if($row_day){
    header("Location: relatorioUpdate.php");
}elseif(!$row_day){
    header("Location: index.php");
}
