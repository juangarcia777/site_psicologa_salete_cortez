 <div class="hero-slider" style="min-height: 100px">
        <div class="rev-slider">
            <ul>


                <?php 

                $sql = $db->select("SELECT * FROM banners ORDER BY id");
                while($row = $db->expand($sql)){



                ?>
               
               <li>
                
            <img src="imagens/<?php echo $row['img'] ?>" alt="">
                   <div class="tp-caption"
                        data-x="left" data-hoffset="0"
                        data-y="top" data-voffset="150"
                        data-transform_idle="o:1;"
                        data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                        data-start="500">
                   </div>
                
               </li>

        <?php
            }

                 ?>
            </ul>
        </div>
    </div>
    <!--/.hero-slider-->