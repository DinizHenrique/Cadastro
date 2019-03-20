<?php
require_once("../conexao/conexao.php"); 
header('Content-Type: text/html; charset=utf-8');
require_once __DIR__ . '/vendor/autoload.php';

 
    $teste =  $_POST['cliente'];
        
        
        $mesq = "10"; // Margem Esquerda (mm)
        $mdir = "10"; // Margem Direita (mm)
        $msup = "10"; // Margem Superior (mm)
        $leti = "89"; // Largura da Etiqueta (mm)
        $aeti = "24"; // Altura da Etiqueta (mm)
        $ehet = "2"; // Espaço horizontal entre as Etiquetas (mm)
        $mpdf= new \Mpdf\Mpdf([
                'mode' => 'utf-8', 
                'format' => [210, 297], 
                'orientation' => 'P'
                ]); // Cria um arquivo novo tipo carta, na vertical.
        $mpdf->Open(); // inicia documento
        $mpdf->AddPage(); // adiciona a primeira pagina
        //$mpdf->SetMargins('5','12,7', '5'); // Define as margens do documento
        $mpdf->SetFont('helvetica',7); // Define a fonte
        $mpdf->SetDisplayMode('fullpage');//Adicinei uma fullpage
        $coluna = 0;
        $linha = 0;

    foreach($teste as $cliente){
        
        $pesquisa           = "SELECT nome, cep, endereco, numero, complemento, bairro, cidade, estado FROM cadastro WHERE clienteID LIKE '%$cliente%' ";
        $res = mysqli_query($conecta, $pesquisa); /*Executa o comando SQL e retorna o valor da consulta em uma variavel ($res) */
        //MONTA A ARRAY PARA ETIQUETAS
        //while($dados = mysqli_fetch_array($res)) {
        $dados = mysqli_fetch_array($res); 

        $nome = $dados["nome"];
        $ende = $dados["endereco"];
        if(!empty($dados["complemento"])){
        $ende = $ende . " - n°" . $dados["numero"] . " - " . $dados["complemento"] ;
        } else {
            $ende = $ende . " - n°" . $dados["numero"];
        }
        $bairro = $dados["bairro"];
        $estado = $dados["estado"];
        $cida = $dados["cidade"];
        $local = $bairro . " – " . $cida . " – " . $estado;
        $cep = "CEP: " . $dados["cep"];
        if($linha == "10") {
        $mpdf->AddPage();
        $linha = 0;
        }
        if($coluna == "2") { // Se for a terceira coluna
        $coluna = 0; // $coluna volta para o valor inicial
        $linha = $linha +1; // $linha é igual ela mesma +1
        }
        if($linha == "10") { // Se for a última linha da página
        $mpdf->AddPage(); // Adiciona uma nova página
        $linha = 0; // $linha volta ao seu valor inicial
        }
        $posicaoV = $linha*$aeti;
        $posicaoH = $coluna*$leti;
        if($coluna == "0") { // Se a coluna for 0
        $somaH = $mesq; // Soma Horizontal é apenas a margem da esquerda inicial
        } else { // Senão
        $somaH = $mesq+$posicaoH; // Soma Horizontal é a margem inicial mais a posiçãoH
        }
        if($linha =="0") { // Se a linha for 0
        $somaV = $msup; // Soma Vertical é apenas a margem superior inicial
        } else { // Senão
        $somaV = $msup+$posicaoV; // Soma Vertical é a margem superior inicial mais a posiçãoV
        }
        $mpdf->WriteText($somaH,$somaV,$nome); // Imprime o nome da pessoa de acordo com as coordenadas
        $mpdf->WriteText($somaH,$somaV+4,$ende); // Imprime o endereço da pessoa de acordo com as coordenadas
        $mpdf->WriteText($somaH,$somaV+8,$local); // Imprime a localidade da pessoa de acordo com as coordenadas
        $mpdf->WriteText($somaH,$somaV+12,$cep); // Imprime o cep da pessoa de acordo com as coordenadas
        $coluna = $coluna+1;
        

        


        
    }

        
        $mpdf->Output();
        
        mysqli_close($conecta);
?>
