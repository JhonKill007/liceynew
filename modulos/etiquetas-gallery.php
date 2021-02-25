

                
                <?php
                while($art = $resultado->fetch_array()){
                    ?>
                    <!-- posicion 1 -->
                    <li>
                        <img src=<?php echo $art['foto']; ?> alt="Portfolio item" />
                    </li>
                            
                        
                    <?php
                }
                ?>
                


            
    

                 
