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
  


// insercao no banco
    if(isset($_POST["nome"])) {
        
          require_once("../recibo/pdf/dados_vista_salvo.php");
        
        
       
        
        
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
                <td id='cab_right' style='text-align: right; border:none;'> Recibo n° $reciboID </td>
            </tr>
            <tr id='tr_cab'>
                <td id='cab_left'> Recebemos: </td>
                <td id='cab_right' style='text-align: right; border:none;'> R$ $valor_br </td>
            </tr>
            <tr id='tr_cab'>
                <td id='cab_left'> <b>Do Sr.(a):</b> <u>$nome</u>   </td>
                <td id='cab_right' style='text-align: right; border:none;'></td>
            </tr>
            <tr id='tr_cab'>
                <td id='cab_left'> <b>A Importância de R$</b> <u>$valor_ext</u>  </td>
                <td id='cab_right' style='text-align: right; border:none;'></td>
            </tr>
            <tr id='tr_cab'>
                <td id='cab_left'> <b>Referente:</b> <u>$referente</u>  </td>
                <td id='cab_right' style='text-align: right; border:none;'></td>
            </tr>
        </table>
        
        </section> ";
        
        if(($_POST["cheque_bool"]) == 1){
        
            $html .= "        
        <table style='width:100%;'>     ";
                    
                                                                            
                for($i = 1 ; $i <= $parcelas ; $i++){
                
                            
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
                
                
            
        
            $html .= "     
        </table> 
        ";
        }
        
$html .= "        
        
        
       
        
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
