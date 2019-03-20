<?php 
require_once("../conexao/conexao.php"); 
$date = date('d/m/Y');

$day = date('Y-m-d');
$result_day = "SELECT * FROM relatorio WHERE dia = '$day'";
$resultado_day = mysqli_query($conecta, $result_day);
$row_day = mysqli_fetch_assoc($resultado_day);

?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Relatório Diário - UniSom</title>
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
                        <li class="nav-item active"><a class="nav-link" href="../relatorio/checkRelatorio.php">Relatório</a></li>
                        <li class="nav-item"><a class="nav-link" href="../cadastro/index.php ">Cadastro</a></li>
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

        <!-- Digite abaixo seu codigo -->

        <div class="container-fluid">

            <div class="card" id="box-cadastro">
                <div class="card-header">
                    <h2>Relatório Diário -
                        <?php echo $date ?>
                    </h2>
                </div>

                <form method="post" action="saveDayUpdate.php">
                    <div class="form-row" id="formrow">
                        <div class="form-group col-md-10">
                            <label for="relatorioDiario"></label>
                            <textarea class="form-control" name="relatorioDiario" rows="6"><?php echo $row_day['relatorioDiario']; ?></textarea>
                        </div>

                        <div class="form-group col-md-2">
                            <input type="submit" value="Inserir" class="btn btn-primary" id="botao" />
                        </div>
                    </div>
                </form>

            </div>
            
            <div class="card" id="box-cadastro">
                <div class="card-header">
                    <h2>Pesquisa de Clientes</h2>
                </div>

                <form id="cadastro" class="form-inline" action="../pesquisa/pesquisa.php" method="POST">
                    <div class="form-group mb-2">
                        <label for="staticEmail2" class="sr-only">Nome</label>
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Nome">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="nome">
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
