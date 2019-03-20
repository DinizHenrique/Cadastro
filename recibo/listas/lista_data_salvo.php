<ul id="lista-parcelas" class="list-group col-md-3">
    <!-- lista de datas -->

    <?php
     $i=1;
    $data_cheque = array();
    $parcelas = $row_recibo["parcelas"];                                                               
    while($i <= $parcelas){ 
                    
                $index_p = "data_cheque{$i}";
                $data_cheque[$i] = $row_recibo["$index_p"];
            
            ?>



    <li class="list-group-item">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Bom para</span>
            </div>
            <input type="date" class="form-control" name="data_cheque<?php echo $i ?>" id="data_cheque" value="<?php echo $data_cheque[$i]; ?>" />
        </div>
    </li>





    <?php    
                $i++;
                }
                ?>

</ul>
