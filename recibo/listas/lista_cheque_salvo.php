<ul id="lista-parcelas" class="list-group col-md-3">
    <!-- lista de cheques -->


    <?php
     $i=1;
    $cheque = array();
    $parcelas = $row_recibo["parcelas"];                                                               
    while($i <= $parcelas){ 
                    
                $index_p = "cheque{$i}";
                $cheque[$i] = $row_recibo["$index_p"];
            
            ?>



    <li class="list-group-item">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Cheque n°<?php echo $i ?></span>
            </div>
            <input type="number" class="form-control" name="cheque<?php echo $i ?>" id="cheque" value="<?php echo $cheque[$i]; ?>" />
        </div>
    </li>





    <?php    
                $i++;
                }
                ?>

</ul>
