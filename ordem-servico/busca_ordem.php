<?php

    //Busca
        if(isset($_POST["nome"])){
        
            $nome_pesquisa      = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
            $pesquisa           = "SELECT * FROM ordem WHERE nome LIKE '%$nome_pesquisa%' ";
            $resultado_pesquisa = mysqli_query($conecta, $pesquisa); 
            
        } elseif(isset($_POST["ordemID"])) {
            $ordem_pesquisa     = filter_input(INPUT_POST, 'ordemID', FILTER_SANITIZE_STRING);
            $pesquisa           = "SELECT * FROM ordem WHERE ordemID LIKE '%$ordem_pesquisa%' ";
            $resultado_pesquisa = mysqli_query($conecta, $pesquisa); 
        }

            
            
          
            

            while($row_ordem = mysqli_fetch_assoc($resultado_pesquisa)){ 
            
                $cadastro_pesquisa      = $row_ordem['clienteID'];
                $pesquisa_cadastro      = "SELECT * FROM cadastro WHERE clienteID LIKE '%$cadastro_pesquisa%' ";
                $resultado_cadastro     = mysqli_query($conecta, $pesquisa_cadastro); 
                $row_cadastro = mysqli_fetch_assoc($resultado_cadastro);
                $row_pesquisa = array_merge($row_ordem, $row_cadastro);
                $data = $row_ordem["data_ordem"];
                $data = date_create($data);
                $data = date_format($data, "Y-m-d");
                
                
                
            ?>


<div class="card" style="margin: 10px;">
    <div class="card-header">
        <h2>Resultado - Ordem N° <?php echo $row_ordem["ordemID"] ?> </h2>
    </div>

    <form style="padding:10px" action="ordem_salvo.php" method="post" target="_blank">

        <input type="hidden" name="clienteID" value="<?php echo $row_pesquisa['clienteID']?>" />
        <input type="hidden" name="ordemID" value="<?php echo $row_ordem['ordemID']?>" />


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


        <div class="form-row" id="formrow">

            <div class="form-group col-md-2">
                <label for="telefone1">Telefone 1</label>
                <input type="tel" class="form-control" name="telefone1" value="<?php echo $row_pesquisa['telefone1'] ?>" />
            </div>

            <div class="form-group col-md-2">
                <label for="telefone2">Telefone 2</label>
                <input type="tel" class="form-control" name="telefone2" value="<?php echo $row_pesquisa['telefone2'] ?>" />
            </div>

            <div class="form-group col-md-2">
                <label for="nascimento">Nascimento</label>
                <input type="date" class="form-control" name="nascimento" value="<?php echo $row_pesquisa['nascimento'] ?>" />
            </div>

            <div class="form-group col-md-2">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name="cpf" value="<?php echo $row_pesquisa['cpf'] ?>" />
            </div>

            <div class="form-group col-md-2">
                <label for="responsavel">Responsável</label>
                <input type="text" class="form-control" name="responsavel" value="<?php echo $row_pesquisa['responsavel'] ?>" />
            </div>

        </div>

        <div class="form-row" id="formrow">

            <div class="form-group col-md-2">
                <label for="modelo1">1) Modelo</label>
                <input type="text" class="form-control" name="modelo1" value="<?php echo $row_pesquisa['modelo1'] ?>" />
            </div>

            <div class="form-group col-md-2">
                <label for="numero_aparelho1">N°</label>
                <input type="text" class="form-control" name="numero_aparelho1" value="<?php echo $row_pesquisa['numero_aparelho1'] ?>" />
            </div>

            <div class="form-group col-md-2">
                <label for="marca_aparelho1">Marca</label>
                <input type="text" class="form-control" name="marca_aparelho1" value="<?php echo $row_pesquisa['marca_aparelho1'] ?>" />
            </div>

            <div class="form-group col-md-2">
                <label for="data_compra1">Data da Compra</label>
                <input type="date" class="form-control" name="data_compra1" value="<?php echo $row_pesquisa['data_compra1'] ?>" />
            </div>

            <div class="form-group col-md-2">
                <label for="nota_fiscal1">NF.</label>
                <input type="text" class="form-control" name="nota_fiscal1" value="<?php echo $row_pesquisa['nota_fiscal1'] ?>" />
            </div>




        </div>

        <div class="form-row" id="formrow">

            <div class="form-group col-md-2">
                <label for="modelo2">2) Modelo</label>
                <input type="text" class="form-control" name="modelo2" value="<?php echo $row_pesquisa['modelo2'] ?>" />
            </div>

            <div class="form-group col-md-2">
                <label for="numero_aparelho2">N°</label>
                <input type="text" class="form-control" name="numero_aparelho2" value="<?php echo $row_pesquisa['numero_aparelho2'] ?>" />
            </div>

            <div class="form-group col-md-2">
                <label for="marca_aparelho2">Marca</label>
                <input type="text" class="form-control" name="marca_aparelho2" value="<?php echo $row_pesquisa['marca_aparelho2'] ?>" />
            </div>

            <div class="form-group col-md-2">
                <label for="data_compra2">Data da Compra</label>
                <input type="date" class="form-control" name="data_compra2" value="<?php echo $row_pesquisa['data_compra2'] ?>" />
            </div>

            <div class="form-group col-md-2">
                <label for="nota_fiscal2">NF.</label>
                <input type="text" class="form-control" name="nota_fiscal2" value="<?php echo $row_pesquisa['nota_fiscal2'] ?>" />
            </div>

        </div>


        <div class="form-row" id="formrow">
            <div class="form-group col-md-4">
                <label for="defeito">Defeito Reclamado</label>
                <input type="text" class="form-control" name="defeito" value="<?php echo $row_pesquisa['defeito'] ?>" />
            </div>

            <div class="form-group col-md-2">
                <label for="orcamento">Orçamento</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">R$</span>
                    </div>
                    <input type="number" step="0.01" class="form-control" name="orcamento" value="<?php echo $row_pesquisa['orcamento'] ?>" />

                </div>
            </div>
        </div>

        <div class="form-row" id="formrow">

            <div class="form-group col-md-4">
                <label for="estado_aparelho">Estado Geral do Aparelho:</label>
                <input type="text" class="form-control" name="estado_aparelho" value="<?php echo $row_pesquisa['estado_aparelho'] ?>" />
            </div>
            <div class="form-group col-md-2">
                <label for="data_ordem">Data da Ordem</label>
                <input type="date" class="form-control" name="data_ordem" value="<?php echo $data ?>" />
            </div>




        </div>




        <input class="btn btn-primary" type="submit" id="button-addon1" value="Gerar Ordem de Serviço">

    </form>
</div>

<?php
                
            
        
        }

mysqli_close($conecta);
?>
