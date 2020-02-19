<?php require("includes/header.php") ?>

<div class="block" id="about-me">
        <div class="container">
            <h2>Sobre</h2>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="center">
                        <img src="imagens/salete_foto_sobre.jpg" class="circle" alt="">
                    </div>
                </div>
                <div class="col-md-8 col-sm-8" style="text-align: justify;">
                    <h3 class="no-bottom-margin"><strong>Salete Cortez</strong></h3>
                    <h5>Uma mentora pessoal</h5>

                      <?php 

                        $sql = $db->select("SELECT * FROM sobre");
                        while($row = $db->expand($sql)){



                        ?>

                    <p style="text-align:justify;"> 
                         <?php echo $row['texto'];?>
                    </p>

                    <?php

                        }
                        
                    ?>

                    <hr>
                </div>
                <!--/ .col-sm-6-->
            </div>
            <!--/ .row-->
        </div>
        <!--/ .container-->
    </div>
    <!--/ .block-->


 <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6" style="text-align: justify;">
                    <h2>SOBRE MIM</h2>
                    <p>
                        <ul>
                            <li class="text text-dark">Especialista em Sexualidade Humana pela Faculdade de Medicina da USP- Brasil </li><br>
                            <li class="text text-dark">Especialista em Formative Psychology- USA, como metodologia reorganizadora em processos fóbicos, ansiosos e depressivos.</li><br>
                            <li class="text text-dark">Licenciada em Ciência Psicológica pela Universidade do Minho – Portugal</li><br>
                            <li class="text text-dark">Palestrante em Congressos, Coordenadora de projetos de inclusão social e profissional em diversos setores da sociedade.</li><br>
                             <li class="text text-dark">Ampla experiência em psicoterapia individual e de casal</li><br>
                              <li class="text text-dark">Depressão.</li><br>
                              <li class="text text-dark">Transtornos de Ansiedade e crises de pânico.</li><br>
                              <li class="text text-dark">Terapia Familiar</li><br>
                              <li class="text text-dark">Disfunções sexuais psicogênicas.</li><br>
                        </ul>
                    </p>
                </div>
                <!--/ .col-md-6-->
                <div class="col-md-6 col-sm-6">
                    <h2>Deixe eu me apresentar</h2>
                    <div class="video">
                        <img src="imagens/salete_foto_sobre_v2.jpg" class="circle" alt="">
                        
                    </div>
                </div>
                <!--/ .col-md-6-->
            </div>
            <!--/ .row-->

        </div>
        <!--/ .container-->
        <div class="bg"></div><!--/ .bg-->
    </div>
    <!--/ .block-->

<?php require("includes/rodape.php") ?>

