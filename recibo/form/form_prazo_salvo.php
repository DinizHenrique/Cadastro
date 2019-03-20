<div class="form-row" id="formrow">
    <div class="form-group col-md-2">
        <label for="nome">Nome</label>
        <input type="text" readonly class="form-control" name="nome" value="<?php echo $row_recibo['nome'] ?>" />
    </div>
    <div class="form-group col-md-3">
        <label for="referente">Referente</label>
        <input type="text" class="form-control" name="referente" value="<?php echo $row_recibo['referente'] ?>" />
    </div>
    <div class="form-group col-md-1">
        <label for="parcelas">Parcelas</label>
        <div class="input-group mb-3">
            <input id="parcelas" type="text" readonly class="form-control" name="parcelas" value="<?php echo $row_recibo['parcelas'] ?>" />
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">vezes</span>
            </div>
        </div>
    </div>

    <div class="form-group col-md-1">
        <label for="valor_entrada">Entrada</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">R$</span>
            </div>
            <input type="number" step="0.01" readonly class="form-control valor_entrada" name="valor_entrada" id="valor_entrada" value="<?php echo $row_recibo['valor_entrada']; ?>" />
        </div>
    </div>

    <div class="form-group col-md-1">
        <label for="valor_restante">Restante</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">R$</span>
            </div>
            <input type="number" step="0.01" class="form-control valor_restante" name="valor_restante" id="valor_restante" value="<?php echo $row_recibo['valor_restante']; ?>" />
        </div>
    </div>

    <div class="form-group col-md-1">
        <label for="valor_total">Total</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">R$</span>
            </div>
            <input type="number" step="0.01" class="form-control valor_total" name="valor_total" id="valor_total" value="<?php echo $row_recibo["valor_total"];?>" />
        </div>
    </div>
    <div class="form-group col-md-2">
        <label for="data_recibo">Data do Recibo</label>
        <input type="date" class="form-control" name="data_recibo" value="<?php echo $data ?>" />
    </div>

</div>
