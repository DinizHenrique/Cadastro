<?php
        $nome                  = $_POST["nome"];
        $clienteID             = $_POST["clienteID"];
        $reciboID              = $_POST["reciboID"];
        $data_recibo           = date_create($_POST["data_recibo"]);
        //$data_recibo           = date_format($data_recibo, "d-m-Y") ;
        $dia                   = date_format($data_recibo, "d");
        //$mes                   = date_format($data_recibo, "m");
        $mes = ucfirst( utf8_encode( strftime("%B", $dia)));
        $ano                   = date_format($data_recibo, "Y");
        $referente             = $_POST["referente"];
        $cheque_bool           = $_POST["cheque_bool"];
        $parcelas              = $_POST["parcelas"];
        $valor_total           = $_POST["valor_total"];
        $valor_br              = number_format($valor_total, 2, ',', '.'); 
        $valor_ext             = $_POST["valor_ext"];
        

        if(($_POST["cheque_bool"]) == 1){
        $parcela = array();
        $cheque = array();
        $banco = array();
        $data_cheque = array();
        
        for($i = 1 ; $i <= $parcelas ; $i++){
            $index_p = "parcela{$i}";
            $index_c = "cheque{$i}";
            $index_b = "banco{$i}";
            $index_d = "data_cheque{$i}";
            
            $parcela[$i] = $_POST[$index_p];
            $cheque[$i] = $_POST[$index_c];
            $banco[$i] = $_POST[$index_b];
            $data_cheque[$i] = $_POST[$index_d];
            $data_cheque_ok[$i] = date_create($data_cheque[$i]);
            $data_cheque_ok[$i] = date_format($data_cheque_ok[$i], "d/m/Y");
            
            
        }
        }
        
?>
