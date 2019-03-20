<?php
$dia = filter_input(INPUT_POST, 'dia');
$day = date_create(filter_input(INPUT_POST, 'dia'));
                    
                    
$result_relatorio = "SELECT * FROM relatorio  WHERE DATE_FORMAT(dia,'%Y-%m-%d') = DATE_FORMAT('$dia', '%Y-%m-%d')";
$resultado_relatorio = mysqli_query($conecta, $result_relatorio);
$row_relatorio = mysqli_fetch_assoc($resultado_relatorio);
?>


<div class="card" id="box-cadastro">
    <div class="card-header">
        <h2>Relatório Diário -
            <?php echo date_format($day, 'd/m/Y'); ?>
        </h2>
    </div>

    <form method="post" action="saveDayUpdate.php">
        <div class="form-row" id="formrow">
            <div class="form-group col-md-10">
                <label for="relatorioDiario"></label>
                <textarea class="form-control" name="relatorioDiario" rows="6"><?php echo ($row_relatorio['relatorioDiario']); ?></textarea>
            </div>
            <div class="form-group col-md-2">


                <input type="submit" value="Inserir" class="btn btn-primary" id="botao" />
            </div>
            <input type="date" name="dia" readonly class="form-control" value="<?php echo $dia ?>" />

        </div>

    </form>

</div>
