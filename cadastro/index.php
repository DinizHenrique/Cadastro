<?php require_once("../conexao/conexao.php"); ?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Cadastro de Clientes - UniSom</title>
    <meta name="language" content="portuguese" />
    <meta name="format-detection" content="telephone=yes" />
    <meta name="HandheldFriendly" content="true" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1">

    <link href="../resource/css/bootstrap.min.css" rel="stylesheet">
    <link href="../_css/estilo.css" rel="stylesheet">




</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-default navbar-fixed-top navbar-light" style="background-color: #e3f2fd">
            <section class="container">
                <a href="index.html" class="navbar-brand"><img src="../_img/logo.png" width="160px"> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#movelmenu" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="movelmenu">
                    <ul class="nav navbar-nav ">
                        <li class="nav-item"><a class="nav-link" href="../relatorio/checkRelatorio.php ">Relatório</a></li>
                        <li class="nav-item active"><a class="nav-link" href="../cadastro/index.php ">Cadastro</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pesquisa/index.php">Pesquisa</a></li>
                        <li class="nav-item"><a class="nav-link" href="../ordem-servico/index.php">Ordem de Serviço</a></li>
                        <li class="nav-item"><a class="nav-link" href="../recibo/index.php">Recibo</a></li>
                        <li class="nav-item"><a class="nav-link" href="../etiqueta/index.php">Etiqueta</a></li>
                        <li class="nav-item"><a class="nav-link" href="../backup/index.php">Backup</a></li>

                    </ul>
                </div>

            </section>
        </nav>

        <!-- Digite abaixo seu codigo -->

        <div class="container-fluid">

            <div class="card" id="box-cadastro">
                <div class="card-header">
                    <h2>Cadastro: Novo Cliente</h2>
                </div>

                <form id="cadastro" action="inserir-cadastro.php" method="POST">
                    <div class="form-row" id="formrow">
                        <div class="form-group col-md-8">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cep">CEP</label>
                            <input type="text" class="form-control" name="cep" id="cep">
                        </div>
                    </div>

                    <div class="form-row" id="formrow">
                        <div class="form-group col-md-8">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" name="endereco" id="endereco">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="numero">Número</label>
                            <input type="text" class="form-control" name="numero">
                        </div>
                    </div>
                    <div class="form-row" id="formrow">
                        <div class="form-group col-md-4">
                            <label for="complemento">Complemento</label>
                            <input type="text" class="form-control" name="complemento" placeholder="Ex. Casa, Apartamento...">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-control" name="bairro" id="bairro">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="cidade">Cidade</label>
                            <input type="text" class="form-control" name="cidade" id="cidade">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="estado">Estado</label>
                            <input type="text" class="form-control" name="estado" id="estado" />
                        </div>

                    </div>


                    <div class="form-row" id="formrow">

                        <div class="form-group col-md-2">
                            <label for="telefone1">Telefone 1</label>
                            <input type="tel" class="form-control" name="telefone1">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="telefone2">Telefone 2</label>
                            <input type="tel" class="form-control" name="telefone2">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="nascimento">Nascimento</label>
                            <input type="date" class="form-control" name="nascimento">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" name="cpf">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="responsavel">Responsável</label>
                            <input type="text" class="form-control" name="responsavel" />
                        </div>

                    </div>



                    <div class="form-row" id="formrow">

                        <div class="form-group col-md-2">
                            <label for="modelo1">1) Modelo</label>
                            <input type="text" class="form-control" name="modelo1" />
                        </div>

                        <div class="form-group col-md-2">
                            <label for="numero_aparelho1">N°</label>
                            <input type="text" class="form-control" name="numero_aparelho1" />
                        </div>

                        <div class="form-group col-md-2">
                            <label for="marca_aparelho1">Marca</label>
                            <input type="text" class="form-control" name="marca_aparelho1" />
                        </div>

                        <div class="form-group col-md-2">
                            <label for="data_compra1">Data da Compra</label>
                            <input type="date" class="form-control" name="data_compra1" />
                        </div>

                        <div class="form-group col-md-2">
                            <label for="nota_fiscal1">NF.</label>
                            <input type="text" class="form-control" name="nota_fiscal1" />
                        </div>




                    </div>

                    <div class="form-row" id="formrow">

                        <div class="form-group col-md-2">
                            <label for="modelo2">2) Modelo</label>
                            <input type="text" class="form-control" name="modelo2" />
                        </div>

                        <div class="form-group col-md-2">
                            <label for="numero_aparelho2">N°</label>
                            <input type="text" class="form-control" name="numero_aparelho2" />
                        </div>

                        <div class="form-group col-md-2">
                            <label for="marca_aparelho2">Marca</label>
                            <input type="text" class="form-control" name="marca_aparelho2" />
                        </div>

                        <div class="form-group col-md-2">
                            <label for="data_compra2">Data da Compra</label>
                            <input type="date" class="form-control" name="data_compra2" />
                        </div>

                        <div class="form-group col-md-2">
                            <label for="nota_fiscal2">NF.</label>
                            <input type="text" class="form-control" name="nota_fiscal2" />
                        </div>

                    </div>

                    <div class="form-row" id="formrow">
                        <div class="form-group col-md-10">
                            <label for="old_ap">Aparelhos Antigos</label>
                            <textarea class="form-control" name="old_ap" rows="6"></textarea>
                        </div>

                    </div>

                    <div class="form-row" id="formrow">
                        <div class="form-group col-md-10">
                            <label for="relatorio-cliente">Relatório</label>
                            <textarea class="form-control" name="relatorio" rows="6"></textarea>
                        </div>

                        <div class="form-group col-md-2">
                            <input type="submit" value="Inserir" class="btn btn-primary" id="botao" />
                        </div>
                    </div>
                </form>

            </div>




        </div>

    </main>

    <?php include_once("../resource/elementos/footer.html"); ?>


    <!-- Fim do seu codigo -->
    <script src="../resource/js/jquery.js"></script>
    <script src="../resource/js/bootstrap.bundle.js"></script>
    <script src="../resource/js/bootstrap.min.js"></script>

    <script src="../_js/script.js"></script>

</body>

</html>


<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
