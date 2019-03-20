<?php require_once("../conexao/conexao.php"); ?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Gerar Etiquetas - UniSom</title>
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
                <a href="#" class="navbar-brand"><img src="../_img/logo.png" width="160px"> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#movelmenu" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="movelmenu">
                    <ul class="nav navbar-nav ">
                        <li class="nav-item"><a class="nav-link" href="../relatorio/checkRelatorio.php ">Relatório</a></li>
                        <li class="nav-item"><a class="nav-link" href="../cadastro/index.php ">Cadastro</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pesquisa/index.php">Pesquisa</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">Ordem de Serviço</a></li>
                        <li class="nav-item"><a class="nav-link" href="../recibo/index.php">Recibo</a></li>
                        <li class="nav-item active"><a class="nav-link" href="../etiqueta/index.php">Etiqueta</a></li>
                        <li class="nav-item"><a class="nav-link" href="../backup/index.php">Backup</a></li>

                    </ul>
                </div>

            </section>
        </nav>

        <!-- Digite abaixo seu codigo -->

        <!-- Digite abaixo seu codigo -->

        <div class="container-fluid">

            <div class="card" id="box-cadastro">
                <div class="card-header">
                    <h2>Gerar Lista de Etiquetas Completa</h2>
                </div>

                <form id="cadastro" class="form-inline" action="etiqueta.php" method="POST" target="_blank">
                    
                    <div class="input-group mb-3">
                        
                        <div class="input-group-prepend">
                            <input class="btn btn-primary" type="submit" id="button-addon1" value="Gerar">
                        </div>
                    </div>
                </form>


            </div>
            
            
            <div class="card" id="box-cadastro">
                <div class="card-header">
                    <h2>Selecionar Clientes Para Criar Lista </h2>
                </div>

                            
                <form id="cadastro" class="form-inline" action="pesquisa_etiqueta.php" method="POST">
                    
                    <div class="input-group mb-3">
                        <input type="hidden" class="form-control" name="nome">
                        <div class="input-group-prepend">
                            <input class="btn btn-primary" type="submit" id="button-addon1" value="Pesquisar">
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
