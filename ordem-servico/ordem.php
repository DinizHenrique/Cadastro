<?php
require_once("../conexao/conexao.php"); 
header('Content-Type: text/html; charset=utf-8');
require_once __DIR__ . '/vendor/autoload.php';
date_default_timezone_set('America/Sao_Paulo');
$data_ordem = date("Y-m-d  H:i:s");
$data = date("d-m-Y");


// insercao no banco
    if(isset($_POST["nome"])) {
        $clienteID          = $_POST["clienteID"];
        $nome               = $_POST["nome"];
        $cep                = $_POST["cep"];
        $endereco           = $_POST["endereco"];
        $numero             = $_POST["numero"];
        $complemento        = $_POST["complemento"];
        $bairro             = $_POST["bairro"];
        $cidade             = $_POST["cidade"];
        $estado             = $_POST["estado"];
        $telefone1          = $_POST["telefone1"];
        $telefone2          = $_POST["telefone2"];
        $nascimento         = $_POST["nascimento"];
        $cpf                = $_POST["cpf"];
        $responsavel        = $_POST["responsavel"];
        
        $modelo1            = $_POST["modelo1"];
        $numero_aparelho1   = $_POST["numero_aparelho1"];
        $marca_aparelho1    = $_POST["marca_aparelho1"];
        $data_compra1       = date_create($_POST["data_compra1"]);
        $data_compra1       = date_format($data_compra1, "d-m-Y");
        $nota_fiscal1       = $_POST["nota_fiscal1"];
        
        
        $modelo2            = $_POST["modelo2"];
        $numero_aparelho2   = $_POST["numero_aparelho2"];
        $marca_aparelho2    = $_POST["marca_aparelho2"];
        $data_compra2       = date_create($_POST["data_compra2"]);
        $data_compra2       = date_format($data_compra2, "d-m-Y");
        $nota_fiscal2       = $_POST["nota_fiscal2"];
        
        
        $defeito            = $_POST["defeito"];
        $orcamento          = $_POST["orcamento"];
        $orcamento_br       = number_format($orcamento, 2, ',', '.'); 
        $estado_aparelho    = $_POST["estado_aparelho"];
        
        
        //$relatorio      = $_POST["relatorio"];
        //$imagem1      = $_POST["imagem1"];
        //$imagem2      = $_POST["imagem2"];
       
        $inserir     = "INSERT INTO ordem ";
        $inserir    .= "(clienteID, nome, defeito, orcamento, estado_aparelho, data_ordem) ";
        $inserir    .= "VALUES ";
        $inserir    .= "('$clienteID', '$nome', '$defeito', '$orcamento', '$estado_aparelho', '$data_ordem') ";
        
        $operacao_inserir = mysqli_query($conecta, $inserir);
        if(!$operacao_inserir) {
            die("Erro no banco");}
        
        
        $pesquisa           = "SELECT * FROM ordem WHERE clienteID LIKE '%$clienteID%' AND data_ordem='$data_ordem' ";
        $resultado_ordem    = mysqli_query($conecta, $pesquisa);
        $row_ordem          = mysqli_fetch_assoc($resultado_ordem);
        $ordemID            = $row_ordem['ordemID'];
        
        
        
$html =         
"<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8' />
    
    <link href='../ordem-servico/pdf.css' rel='stylesheet'>
</head>

<body>
    <main>
        <section id='topo'>
            <br/>
            <h1>Ordem de Serviço - N° $ordemID</h1>

        </section>
        
        
        
        <p><b>Data: </b>$data</p>
        <p><b>Nome:</b> $nome </p>
        <p><b>Endereço:</b> $endereco, $numero - $bairro, $cidade - $estado </p>
        <p><b>Telefone para contato:</b> $telefone1 - <b> Falar com: </b> $responsavel </p>
        <br>
        
        <p><b>1) Modelo: </b> $modelo1 - <b>N°</b> $numero_aparelho1 - <b>Marca: </b> $marca_aparelho1  </p> 
        <p><b>Data da Compra </b> $data_compra1 - <b>NF</b> $nota_fiscal1 </p> 
        <br> ";
        
        if(!empty($_POST["modelo2"])){
            $html .= "
            <p><b>2) Modelo: </b> $modelo2 - <b>N°</b> $numero_aparelho2 - <b>Marca: </b> $marca_aparelho2  </p> 
            <p><b>Data da Compra </b> $data_compra2 - <b>NF</b> $nota_fiscal2 </p> 
            <br> ";
        }
        
$html .= "        
        <p><b>Defeito Reclamado: </b> $defeito </p>
        
        <p><b>Orçamento: </b>R$: $orcamento_br </p> 
        
        
        <p><b>Estado geral do aparelho: </b> $estado_aparelho </p>
        
        
        
        <hr>
        
        <section id='rodape'>
        
        <p><img src='../ordem-servico/img/logo.png' width='20%'> Ordem de Serviço N°: $ordemID </p>
        <p>Leia Atentamente as Instruções Abaixo</p>
        <ol>
            <li>O proprietário deve estar ciente que a UNI-SOM recebeu apenas o aparelho sem pilhas, moldes ou estojo;</li>
            <li>O orçamento tem um prazo de 30 dias para aprovação. Após esse período os valores poderão ser reajustados;</li>
            <li>Os aparelhos consertados ou não, devem ser retirados no prazo máximo de 90 dias;</li>
            <li>A garantia será de 90 dias apenas sobre as peças orçadas efetivamente trocadas;</li>
            <li>O aparelho somente será devolvido mediante a apresentação desde comprovante;</li>
            
        </ol>
        <p>Procure saber o valor desde orçamento através dos telefones: 11 2959-5235 ou 2281-9731</p>
        
        
        </section>
        
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
    

mysqli_close($conecta);
?>
