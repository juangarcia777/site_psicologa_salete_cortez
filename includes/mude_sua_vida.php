<?php require("includes/header.php") ?>
    
    <div class="container">
        <h2 class="center">O que você espera da sua vida ?</h2>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="feature-circle">
                    <div class="image">
                        <img src="imagens/circle1.jpg" alt="">
                        <i class="arrow"><img src="assets/img/arrow-right-02.png" alt=""></i>
                    </div>
                    <h3>Quer uma vida feliz ?</h3>
                </div> 
                <!--/ .feature-circle-->
            </div>
            <!--/ .col-sm-4-->
            <div class="col-md-4 col-sm-4">
                <div class="feature-circle">
                    <div class="image">
                        <img src="imagens/circle2.jpg" alt="">
                        <i class="arrow"><img src="assets/img/arrow-right-02.png" alt=""></i>
                    </div>
                    <h3>Deseja sucesso ?</h3>
                </div>
                <!--/ .feature-circle-->
            </div>
            <!--/ .col-sm-4-->
            <div class="col-md-4 col-sm-4">
                <div class="feature-circle">
                    <div class="image">
                        <img src="imagens/circle3.jpg" alt="">
                    </div>
                    <h3>Por quê não consegue ?</h3>
                </div>
                <!--/ .feature-circle-->
            </div>
            <!--/ .col-sm-4-->
        </div>
        <!--/ .row-->
    </div>
    <!--/ .container-->
        <div class="container" style="text-align:justify;">
        <hr>
        <h2>Essas pessoas mudaram suas vidas completamente</h2>
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
        <div class="bg"></div><!--/ .bg-->
    </div>
    <!--/ .block-->
    </div>
    <!--/ .container-->

    <div class="container">
        <div class="block">
            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <div class="center">
                    <h2 class="text-color-white half-bottom-margin"><strong>Não desperdice sua felicidade, porque alguém a capturará</strong></h2>
                    <a href="contato" class="btn btn-default btn-white btn-big">Quero mudar!</a>
                </div>
            </div>
            <div class="bg bg-color-default"></div><!--/ .bg-->
        </div>
    </div>

    <br>
    <br>

    <?php require("includes/rodape.php") ?>

   