<?php
        $nome                  = $_POST["nome"];
        $clienteID             = $_POST["clienteID"];
        $data_recibo           = date("Y-m-d  H:i:s");
        $referente             = $_POST["referente"];
        $cheque_bool           = $_POST["cheque_bool"];
        $parcelas              = $_POST["parcelas"];
        $valor_entrada         = $_POST["valor_entrada"];
        $valor_restante        = $_POST["valor_restante"];
        $valor_total           = $_POST["valor_total"];
        //$valor_total           = round($valor_total, 2, PHP_ROUND_HALF_UP);
        $valor_br              = number_format($valor_total, 2, ',', '.');  
        //$valor_ext            = $_POST["valor_ext"];

        

        if(($_POST["cheque_bool"]) == 1){
        $parcela        = array();
        $parcela_br     = array();
        $cheque         = array();
        $banco          = array();
        $data_cheque    = array();
        $data_cheque_ok = array();
        
            for($i = 1 ; $i <= $parcelas ; $i++){
            
            $index_p = "parcela{$i}";
            $index_c = "cheque{$i}";
            $index_b = "banco{$i}";
            $index_d = "data_cheque{$i}";
            
            
            
            $parcela[$i]        = $_POST[$index_p];
            $parcela_br[$i]     = number_format($parcela[$i], 2, ',', '.');
            $cheque[$i]         = $_POST[$index_c];
            $banco[$i]          = $_POST[$index_b];
            $data_cheque[$i]    = $_POST[$index_d];
            $data_cheque_ok[$i] = date_create($data_cheque[$i]);
            $data_cheque_ok[$i] = date_format($data_cheque_ok[$i], "d/m/Y");
            
            
            
            
            }
        } else {
            $parcela = array();
            $parcela_br = array();
        
            for($i = 1 ; $i <= $parcelas ; $i++){
            
            $index_p = "parcela{$i}";
                    
            
            $parcela[$i] = $_POST[$index_p];
            $parcela_br[$i]     = number_format($parcela[$i], 2, ',', '.');
            
            
            
            
            }
        }
        
?>
