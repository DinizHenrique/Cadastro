<ul id="lista-parcelas" class="list-group col-md-3"> <!-- lista de cheques -->
                
                <?php
                $i=1;
                $parcelas = $_POST["parcelas"];                                                               
                while($i <= $parcelas){ 
                
            ?>
            
            
            
                <li class="list-group-item">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Cheque n°<?php echo $i ?></span>
                        </div>
                        <input type="number" class="form-control" name="cheque<?php echo $i ?>" id="cheque" />
                    </div>
                </li>

                
            


            <?php    
                $i++;
                }
                ?>
                
            </ul>