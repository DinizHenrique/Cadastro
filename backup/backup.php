<?php 
require_once("../conexao/conexao.php"); 
date_default_timezone_set('America/Sao_Paulo');
define("BACKUP_PATH", "C:/teste/");


$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "unisom";
$date_string   = date("Ymd_H-i");
$backupName = "cadastro_".date('Y-m-d');

$cmd='C:\Xampp\mysql\bin\mysqldump.exe --user='.$usuario.' --password='.$senha .' --host=localhost unisom > C:\teste\unisom_'. date('Y-m-d_H-i').'.sql';
     

$arr_out = array(); 
unset($return);

exec($cmd, $arr_out, $return);


    // Fechar conexao
mysqli_close($conecta);


                    if (isset($_GET['salvar'])) {
                        // Faz as alterações necessárias
                        echo '<script type="text/javascript">
                        alert("Backup salvo com sucesso!");
                        location.href="index.php";    
                        </script>';
                        
                    }
                   






?>
