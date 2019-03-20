<?php

    //Busca
        if(isset($_POST["nome"])){
        
            $nome_pesquisa      = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
            $pesquisa           = "SELECT  nome, clienteID  FROM cadastro ORDER BY nome ASC ; ";
            $resultado_pesquisa = mysqli_query($conecta, $pesquisa); 
            
        } ?>


<div class="card" style="margin: 10px;">
    <div class="card-header">
        <h2>Resultado</h2>
    </div>

    <form style="padding:10px" action="etiqueta_selecionado.php" method="post" target="_blank">

        <input type="hidden" name="clienteID" value="<?php echo $row_pesquisa['clienteID']?>" />

        <?php


            while($row_pesquisa = mysqli_fetch_assoc($resultado_pesquisa)){ 
            
                
            ?>


        <div class="form-row" id="formrow">
            <div class="input-group col-md-4">

                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="checkbox" name="cliente[]" value="<?php echo $row_pesquisa['clienteID']?>">
                    </div>
                </div>

                <input type="text" readonly class="form-control" name="nome" value="<?php echo $row_pesquisa['nome']?> " />
            </div>

        </div>

        <?php
        
        } ?>


        <input class="btn btn-primary" type="submit" id="button-addon1" value="Gerar Etiquetas">

    </form>
</div>

<?php
                
         

mysqli_close($conecta);
?>
