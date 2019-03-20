<ul id="lista-parcelas" class="list-group col-md-3"> <!-- lista de datas -->
                
                <?php
                $i=1;
                $parcelas = $_POST["parcelas"];                                                               
                while($i <= $parcelas){ 
                
            ?>
            
            
            
                <li class="list-group-item">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Bom para</span>
                        </div>
                        <input type="date" class="form-control" name="data_cheque<?php echo $i ?>" id="data_cheque" />
                    </div>
                </li>

                
            


            <?php    
                $i++;
                }
                ?>
                
            </ul>