<ul id="lista-parcelas" class="list-group col-md-3"> <!-- lista de banco -->
                
                <?php
                $i=1;
                $parcelas = $_POST["parcelas"];                                                               
                while($i <= $parcelas){ 
                
            ?>
            
            
            
                <li class="list-group-item">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Banco</span>
                        </div>
                        <input type="text" class="form-control banco" name="banco<?php echo $i ?>" id="banco" />
                    </div>
                </li>

                
            


            <?php    
                $i++;
                }
                ?>
                
            </ul>