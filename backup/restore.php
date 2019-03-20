<?php
require_once("../conexao/conexao.php"); 


if (! empty($_FILES["backup_file"])) {
    // Validating SQL file type by extensions
    if (! in_array(strtolower(pathinfo($_FILES["backup_file"]["name"], PATHINFO_EXTENSION)), array(
        "sql"
    ))) {
        $response = array(
            "type" => "error",
            "message" => "Invalid File Type"
        );
    } else {
        if (is_uploaded_file($_FILES["backup_file"]["tmp_name"])) {
            move_uploaded_file($_FILES["backup_file"]["tmp_name"], $_FILES["backup_file"]["name"]);
            $response = restoreMysqlDB($_FILES["backup_file"]["name"], $conecta);
        }
    }
}

if (isset($_GET['restaurar'])) {
                        // Faz as alterações necessárias
                        echo '<script type="text/javascript">
                        alert("Backup restaurado com sucesso!");
                        location.href="index.php";    
                        </script>';
                        
                    }

function restoreMysqlDB($filePath, $conecta)
{
    $sql = '';
    $error = '';
    
    if (file_exists($filePath)) {
        $lines = file($filePath);
        
        foreach ($lines as $line) {
            
            // Ignoring comments from the SQL script
            if (substr($line, 0, 2) == '--' || $line == '') {
                continue;
            }
            
            $sql .= $line;
            
            if (substr(trim($line), - 1, 1) == ';') {
                $result = mysqli_query($conecta, $sql);
                if (! $result) {
                    $error .= mysqli_error($conecta) . "\n";
                }
                $sql = '';
            }
        } // end foreach
        
        if ($error) {
            $response = array(
                "type" => "error",
                "message" => $error
            );
        } else {
            $response = array(
                "type" => "success",
                "message" => "Database Restore Completed Successfully."
                
            );
            if (isset($_GET['restaurar'])) {
                        // Faz as alterações necessárias
                        echo '<script type="text/javascript">
                        alert("Backup restaurado com sucesso!");
                        location.href="index.php";    
                        </script>';
                        
                    }
        }
    } // end if file exists
    
    
    return $response;
}

?>