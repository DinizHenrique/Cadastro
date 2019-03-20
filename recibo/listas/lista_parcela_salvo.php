<ul id="lista-parcelas" class="list-group col-md-3">
    <!-- lista de parcelas -->

    <?php
     $i=1;
    $parcela = array();
    $parcelas = $row_recibo["parcelas"];                                                               
    while($i <= $parcelas){ 
                    
                $index_p = "parcela{$i}";
                $parcela[$i] = $row_recibo["$index_p"];
            
            ?>



    <li class="list-group-item">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Parcela <?php echo $i ?></span>
            </div>
            <input type="text" class="form-control parcela" name="parcela<?php echo $i ?>" id="parcela" value="<?php echo $parcela[$i]; ?>" />
        </div>
    </li>

    <?php    
                $i++;
                }
                ?>

</ul>
