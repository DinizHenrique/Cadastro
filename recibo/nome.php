<?php

    //Busca
        if(isset($_POST["nome"])){
        
            $nome_pesquisa      = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
            $pesquisa           = "SELECT * FROM cadastro WHERE nome LIKE '%$nome_pesquisa%' ";
            $resultado_pesquisa = mysqli_query($conecta, $pesquisa);
            

            while($row_pesquisa = mysqli_fetch_assoc($resultado_pesquisa)){ ?>


<div class="card" style="margin: 10px;">
    <div class="card-header">
        <h2>Recibo</h2>
    </div>




    <?php
        if(isset($_POST["cheque"])){
            $cheque = true;
            
        } else {
            $cheque = 0;
            
        }
                
        if($_POST["parcelas"] == 1){?>

    <form style="padding:10px" action="recibo_vista.php" method="post" target="_blank">

        <input type="hidden" name="clienteID" value="<?php echo $row_pesquisa['clienteID']?>" />
        <input type="hidden" name="cheque_bool" value="<?php echo $cheque?>" />
        <?php
            require_once("../recibo/form/form_vista.php");
                                    
            } else {?>

        <form style="padding:10px" action="recibo_prazo.php" method="post" target="_blank">

            <input type="hidden" name="clienteID" value="<?php echo $row_pesquisa['clienteID']?>" />
            <input type="hidden" name="cheque_bool" value="<?php echo $cheque?>" />
            <?php
            require_once("../recibo/form/form_prazo.php");
            }
            ?>



            <div class="form-row" id="formrow">



                <?php
            if(isset($_POST["cheque"])){
                require_once("../recibo/listas/lista_parcela.php");
                require_once("../recibo/listas/lista_cheque.php");
                require_once("../recibo/listas/lista_banco.php");
                require_once("../recibo/listas/lista_data.php");
            
                
            } elseif(!isset($_POST["cheque"]) && $_POST["parcelas"] != 1) {
                
                $i=1;
                $parcelas = $_POST["parcelas"];                                                               
                while($i <= $parcelas){   
                    
            ?>

                <div class="form-group col-md-2">
                    <label for="parcela<?php echo $i ?>">Parcela <?php echo $i ?></label>
                    <input id="parcela" type="text" class="form-control parcela" name="parcela<?php echo $i ?>" />
                </div>

                <?php
                $i++;    
                }
            }
        
        ?>
            </div>



            <input class="btn btn-primary" type="submit" id="button-addon1" value="Gerar Recibo">

        </form>
</div>

<?php
                
            }
        
        }


?>
