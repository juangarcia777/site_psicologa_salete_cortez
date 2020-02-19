    <div style="margin-top: -50px; margin-bottom: -50px;" class="block" id="successful-stories">
        <div class="container">
            <h2>Depoimentos</h2>
 <div class="container">


        <div class="container">
        <div class="box">
            <div class="owl-carousel owl-theme">



                <?php 

                $sql = $db->select("SELECT * FROM depoimentos ORDER BY id");
                while($row = $db->expand($sql)){



                ?>

                <div class="col-12" style="text-align:left">
                         <p>
                            "<?php echo substr($row['texto'],0,255); ?>"
                        </p>
                        <a><?php echo $row['nome']; ?></a>
                </div>

                <?php
            }

                 ?>
                    
            </div>
            <!--/ .gallery-->
        </div>
        <!--/ .block-->
    </div>
    <!--/ .container-->

       </div>
        </div>
        <!--/ .container-->
        <div class="bg"></div><!--/ .bg-->
    </div>
    <!--/ .block-->