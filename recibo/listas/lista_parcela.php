<ul id="lista-parcelas" class="list-group col-md-3"> <!-- lista de parcelas -->
                
                <?php
                $i=1;
                $parcelas = $_POST["parcelas"];                                                               
                while($i <= $parcelas){ 
                
            ?>
            
            
            
                <li class="list-group-item">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Parcela <?php echo $i ?></span>
                        </div>
                        <input type="text" class="form-control parcela" name="parcela<?php echo $i ?>" id="parcela" />
                    </div>
                </li>

                
            


            <?php    
                $i++;
                }
                ?>
                
            </ul>