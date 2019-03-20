<?php

    //Busca
        if(isset($_POST["nome"])){
        
            $nome_pesquisa      = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
            $pesquisa           = "SELECT * FROM cadastro WHERE nome LIKE '%$nome_pesquisa%' ";
            $resultado_pesquisa = mysqli_query($conecta, $pesquisa);
            

            while($row_pesquisa = mysqli_fetch_assoc($resultado_pesquisa)){ ?>


<div class="card" style="margin: 10px;">
    <div class="card-header">
        <h2>Resultado</h2>
    </div>

    <form style="padding:10px" action="etiqueta.php" method="post" target="_blank">

        <input type="hidden" name="clienteID" value="<?php echo $row_pesquisa['clienteID']?>" />

        <div class="form-row" id="formrow">
            <div class="form-group col-md-8">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?php echo $row_pesquisa['nome'] ?> " />
            </div>
            <div class="form-group col-md-4">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" name="cep" value="<?php echo $row_pesquisa['cep'] ?>" />
            </div>
        </div>

        <div class="form-row" id="formrow">
            <div class="form-group col-md-8">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="endereco" value="<?php echo $row_pesquisa['endereco'] ?>" />
            </div>

            <div class="form-group col-md-4">
                <label for="numero">Número</label>
                <input type="text" class="form-control" name="numero" value="<?php echo $row_pesquisa['numero'] ?>" />
            </div>
        </div>
        <div class="form-row" id="formrow">
            <div class="form-group col-md-4">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" name="complemento" value="<?php echo $row_pesquisa['complemento'] ?>" />
            </div>
            <div class="form-group col-md-2">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" name="bairro" id="bairro" value="<?php echo $row_pesquisa['bairro'] ?>" />
            </div>

            <div class="form-group col-md-4">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade" value="<?php echo $row_pesquisa['cidade'] ?>" />
            </div>
            <div class="form-group col-md-2">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" name="estado" id="estado" value="<?php echo $row_pesquisa['estado'] ?>" />
            </div>

        </div>
        


        <input class="btn btn-primary" type="submit" id="button-addon1" value="Gerar Ordem de Serviço">

    </form>
</div>

<?php
                
            }
        
        }


?>
