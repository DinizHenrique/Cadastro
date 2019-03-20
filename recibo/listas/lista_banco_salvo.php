<ul id="lista-parcelas" class="list-group col-md-3">
    <!-- lista de banco -->

    <?php
     $i=1;
    $banco = array();
    $parcelas = $row_recibo["parcelas"];                                                               
    while($i <= $parcelas){ 
                    
                $index_p = "banco{$i}";
                $banco[$i] = $row_recibo["$index_p"];
            
            ?>



    <li class="list-group-item">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Banco</span>
            </div>
            <input type="text" class="form-control banco" name="banco<?php echo $i ?>" id="banco" value="<?php echo $banco[$i]; ?>" />
        </div>
    </li>





    <?php    
                $i++;
                }
                ?>

</ul>
