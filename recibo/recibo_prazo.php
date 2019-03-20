<?php
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
require_once("../conexao/conexao.php"); 
header('Content-Type: text/html; charset=utf-8');
require_once __DIR__ . '/vendor/autoload.php';
use WGenial\NumeroPorExtenso\NumeroPorExtenso;
$extenso = new NumeroPorExtenso;
$n1 = $_POST["valor_total"];  
$valor_ext = $extenso->converter($n1);
$valor_ext = ucfirst($valor_ext);

date_default_timezone_set('America/Sao_Paulo');
$data_recibo = date("Y-m-d H:i:s");
$data = date("d-m-Y");
$dia = utf8_encode(strftime("%d"));
$mes = ucfirst( utf8_encode( strftime(("%B"))));
$ano = utf8_encode(strftime("%Y"));  


// insercao no banco
    if(isset($_POST["nome"])) {
        
          require_once("../recibo/pdf/dados_prazo.php");
        
        
       
        $inserir     = "INSERT INTO recibo ";
        $inserir    .= "(nome, clienteID, data_recibo, referente, cheque_bool, parcelas, valor_entrada, valor_restante, valor_total, valor_ext ";
        
        if(($_POST["cheque_bool"]) == 1){
        
        for($i = 1 ; $i <= $parcelas ; $i++){
            $inserir .= ", parcela{$i} ";
        }
        
        //$inserir    .= " parcela1, parcela2, parcela3, parcela4, parcela5, parcela6, parcela7, parcela8, parcela9, parcela10, parcela11, parcela12, ";
        
        for($i = 1 ; $i <= $parcelas ; $i++){
            $inserir .= ", cheque{$i} ";
        }
        
        //$inserir    .= " cheque1, cheque2, cheque3, cheque4, cheque5, cheque6, cheque7, cheque8, cheque9,  cheque10, cheque11, cheque12, ";
        
        for($i = 1 ; $i <= $parcelas ; $i++){
            $inserir .= ", banco{$i} ";
        }
        
        //$inserir    .= " banco1, banco2, banco3, banco4, banco5, banco6, banco7, banco8, banco9, banco10, banco11, banco12, ";
        
        for($i = 1 ; $i <= $parcelas ; $i++){
            $inserir .= ", data_cheque{$i} ";
        }
        
        //$inserir    .= " data_cheque1, data_cheque2, data_cheque3, data_cheque4, data_cheque5, data_cheque6, data_cheque7, data_cheque8, data_cheque9, data_cheque10, data_cheque11, data_cheque12) ";
        
        $inserir    .= ") VALUES ";
        
        
        
        $inserir    .= "('$nome', '$clienteID', '$data_recibo', '$referente', '$cheque_bool', '$parcelas', '$valor_entrada', '$valor_restante', '$valor_total', '$valor_ext' ";
        
        for($i = 1 ; $i <= $parcelas ; $i++){
            $inserir .= ", '$parcela[$i]' ";
        }
        
        //$inserir    .= " '$parcela1', '$parcela2', '$parcela3', '$parcela4', '$parcela5', '$parcela6', '$parcela7', '$parcela8', '$parcela9', '$parcela10', '$parcela11', '$parcela12',  ";
        
        for($i = 1 ; $i <= $parcelas ; $i++){
            $inserir .= ", '$cheque[$i]' ";
        }
        
        //$inserir    .= " '$cheque1', '$cheque2', '$cheque3', '$cheque4', '$cheque5', '$cheque6', '$cheque7', '$cheque8', '$cheque9', '$cheque10', '$cheque11', '$cheque12', ";
        
        for($i = 1 ; $i <= $parcelas ; $i++){
            $inserir .= ", '$banco[$i]' ";
        }
        
        //$inserir    .= " '$banco1', '$banco2', '$banco3', '$banco4', '$banco5', '$banco6', '$banco7', '$banco8', '$banco9', '$banco10', '$banco11', '$banco12', ";
        
        for($i = 1 ; $i <= $parcelas ; $i++){
            $inserir .= ", '$data_cheque[$i]' ";
        }
        
        //$inserir    .= " '$data_cheque1', '$data_cheque2', '$data_cheque3', '$data_cheque4', '$data_cheque5', '$data_cheque6', '$data_cheque7', '$data_cheque8', '$data_cheque9', '$data_cheque10', '$data_cheque11', '$data_cheque12') ";
        
        $inserir .= ") ";
            
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////            
            
        } else {
            
            
            for($i = 1 ; $i <= $parcelas ; $i++){
            $inserir .= ", parcela{$i} ";
        }
        
        
        
        $inserir    .= ") VALUES ";
        
        
        
        $inserir    .= "('$nome', '$clienteID', '$data_recibo', '$referente', '$cheque_bool', '$parcelas', '$valor_entrada', '$valor_restante', '$valor_total', '$valor_ext' ";
        
        for($i = 1 ; $i <= $parcelas ; $i++){
            $inserir .= ", '$parcela[$i]' ";
        }
        
                
        $inserir .= ") ";
        }
        
        $operacao_inserir = mysqli_query($conecta, $inserir);
        if(!$operacao_inserir) {
            die("Erro no banco");}
        
        
        $pesquisa           = "SELECT * FROM recibo WHERE clienteID LIKE '%$clienteID%' AND data_recibo='$data_recibo' ";
        $resultado_recibo    = mysqli_query($conecta, $pesquisa);
        $row_recibo          = mysqli_fetch_assoc($resultado_recibo);
        $reciboID            = $row_recibo['reciboID'];
        
        
        
$html =         
"<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8' />
    
    <link href='../recibo/pdf/pdf.css' rel='stylesheet'>
</head>

<body>
    <main>
        <section id='topo'>
            
            <h3><img src='../recibo/img/logo.png' width='25%' >   Comércio de Aparelhos Auditivos Santana LTDA.</h3>
            <hr>
            <p>Rua Salete, 243 - CEP 02016-001 - Santana - São Paulo - Fones: 2959-5235 / 2281-9731 </p>

        </section>
        
        
        <section class='corpo'>
        <table>
            <tr id='tr_cab'>
                <td id='cab_left'> São Paulo, <u>$dia</u> de <u>$mes</u> de <u>$ano</u> </td>
                <td id='cab_right' > Recibo n° <b>$reciboID</b> </td>
            </tr>
            <tr id='tr_cab'>
                <td id='cab_left'> Recebemos: </td>
                <td id='cab_right'> R$ $valor_br </td>
            </tr>
            <tr id='tr_cab'>
                <td id='cab_left'> <b>Do Sr.(a):</b> <u>$nome</u>   </td>
                <td id='cab_right'></td>
            </tr>
        </table>
        <table>
            <tr id='tr_cab'>
                <td id='cab_left'> <b>A Importância de R$</b> <u>$valor_ext</u>  </td>
                
            </tr>
            <tr id='tr_cab'>
                <td id='cab_left'> <b>Referente:</b> <u>$referente</u>  </td>
                
            </tr>
        </table>
        
        </section> 
        
        <table style='width:100%;'>     ";
        
        if(($_POST["cheque_bool"]) == 1){
                    
                $i=1;
                $parcelas = $_POST['parcelas'];                                                               
                while($i <= $parcelas){ 
                
                            
            $html .=
                    "
                        <tr>
                            <td><b>Parcela $i:</b></td>
                            <td>R$ $parcela_br[$i]</td>
                            <td><b>Cheque:</b></td>
                            <td>N° $cheque[$i]</td>
                            <td><b>Bco.:</b></td>
                            <td>$banco[$i]</td>
                            <td><b>Bom para</b></td>
                            <td>$data_cheque_ok[$i]</td>
                        </tr>  
                        
                            
                         

                    ";
            
                $i++;
                }
                
                
        } else {
            
                                
                $i=1;
                $parcelas = $_POST['parcelas'];                                                               
                while($i <= $parcelas){ 
                
                            
            $html .=
                    "
                        <tr>
                            <td><b>Parcela $i:</b></td>
                            <td>R$ $parcela_br[$i]</td>
                            
                        </tr>  
                        
                            
                         

                    ";
            
                $i++;
                }
            
            
        }
        
        
$html .= "     
        </table>                  
        
        
        
        
    </main>
    
</body>

</html>";




        
        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => [210, 297], 
        'orientation' => 'P'
        ]);
        
        $mpdf->WriteHTML($html);
        $mpdf->Output();
        
        
    } else {
        header("Location: index.php");
    }
    


?>
