
<div class="block" id="about-me">
        <div class="container">
            <h2>Sobre</h2>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="center">
                        <img src="imagens/autor1.jpg" class="circle" alt="">
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3 class="no-bottom-margin"><strong>Salete Cortez</strong></h3>
                    <h5>Uma mentora pessoal</h5>
                    <br>

                <?php 

                $sql = $db->select("SELECT * FROM sobre");
                while($row = $db->expand($sql)){



                ?>

                    <p style="text-align:justify;">
                         <?php echo substr($row['texto'],0,511); ?>
                    </p>

                    <?php
                            }
                    ?>       
                    
                    <hr>
                    <a href="sobre" class="link arrow">Saiba Mais</a>
                </div>
                <!--/ .col-sm-6-->
            </div>
            <!--/ .row-->
        </div>
        <!--/ .container-->
    </div>
    <!--/ .block-->




