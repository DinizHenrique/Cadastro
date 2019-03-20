<?php

    //Busca
        if(isset($_POST["nome"])){
        
            $nome_pesquisa      = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
            $pesquisa           = "SELECT * FROM recibo WHERE nome LIKE '%$nome_pesquisa%' ORDER BY nome ASC ";
            $resultado_pesquisa = mysqli_query($conecta, $pesquisa); 
            
        } elseif(isset($_POST["reciboID"])) {
            $recibo_pesquisa     = filter_input(INPUT_POST, 'reciboID', FILTER_SANITIZE_STRING);
            $pesquisa           = "SELECT * FROM recibo WHERE reciboID LIKE '%$recibo_pesquisa%' ORDER BY reciboID ASC ";
            $resultado_pesquisa = mysqli_query($conecta, $pesquisa); 
        }

            
            
          
            

            while($row_recibo = mysqli_fetch_assoc($resultado_pesquisa)){
                            
                //$cadastro_pesquisa      = $row_recibo['clienteID'];
                //$pesquisa_cadastro      = "SELECT * FROM cadastro WHERE clienteID LIKE '%$cadastro_pesquisa%' ";
                //$resultado_cadastro     = mysqli_query($conecta, $pesquisa_cadastro); 
                //$row_cadastro = mysqli_fetch_assoc($resultado_cadastro);
                //$row_pesquisa = array_merge($row_recibo, $row_cadastro);
                $data = $row_recibo["data_recibo"];
                $data = date_create($data);
                $data = date_format($data, "Y-m-d");
                
                
                
            ?>


<div class="card" style="margin: 10px;">
    <div class="card-header">
        <h2>Resultado - recibo N° <?php echo $row_recibo["reciboID"] ?> </h2>
    </div>





    <?php
        if($row_recibo["parcelas"] == 1){?>

    <form style="padding:10px" action="recibo_vista_salvo.php" method="post" target="_blank">
        <input type="hidden" name="clienteID" value="<?php echo $row_recibo['clienteID']?>" />
        <input type="hidden" name="reciboID" value="<?php echo $row_recibo['reciboID']?>" />
        <input type="hidden" name="valor_ext" value="<?php echo $row_recibo['valor_ext']?>" />

        <input type="hidden" name="cheque_bool" value="<?php echo $row_recibo['cheque_bool'] ?>" />
        <?php
            require("../recibo/form/form_vista_salvo.php");
                                    
            } else {?>

        <form style="padding:10px" action="recibo_prazo_salvo.php" method="post" target="_blank">
            <input type="hidden" name="clienteID" value="<?php echo $row_recibo['clienteID']?>" />
            <input type="hidden" name="reciboID" value="<?php echo $row_recibo['reciboID']?>" />
            <input type="hidden" name="valor_ext" value="<?php echo $row_recibo['valor_ext']?>" />

            <input type="hidden" name="cheque_bool" value="<?php echo $row_recibo['cheque_bool'] ?>" />
            <?php
            require("../recibo/form/form_prazo_salvo.php");
            }
            ?>



            <div class="form-row" id="formrow">



                <?php
            if($row_recibo["cheque_bool"] == 1){
                require("../recibo/listas/lista_parcela_salvo.php");
                require("../recibo/listas/lista_cheque_salvo.php");
                require("../recibo/listas/lista_banco_salvo.php");
                require("../recibo/listas/lista_data_salvo.php");
            
                
            } elseif($row_recibo["cheque_bool"] == 0 && $row_recibo["parcelas"] != 1) {
                
                $i=1;
                $parcelas = $row_recibo["parcelas"];                                                               
                while($i <= $parcelas){  
                    $index_p = "parcela{$i}";
                    $parcela[$i] = $row_recibo["$index_p"];
                    
            ?>

                <div class="form-group col-md-2">
                    <label for="parcela<?php echo $i ?>">Parcela <?php echo $i ?></label>
                    <input id="parcela" type="text" class="form-control parcela" name="parcela<?php echo $i ?>" value="<?php echo $parcela[$i]; ?>" />
                </div>

                <?php
                $i++;    
                }
            }
        
        ?>
            </div>



            <input class="btn btn-primary" type="submit" id="button-addon1" value="Gerar Recibo">

        </form>

    </form>
</div>

<?php
                
            
        
        }


?>
