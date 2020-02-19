 <div class="container">
        <div class="clearfix">
            <h2 class="pull-left">Artigos</h2>
        </div>

        <div  class="container">
        <div class="box">
            <div class="owl-carousel owl-theme">



                <?php 

                $sql = $db->select("SELECT * FROM noticias ORDER BY data");
                while($row = $db->expand($sql)){



                ?>

                <div class="col-md-12 col-sm-4" style="text-align:left;">
                    <img src="imagens/<?php echo $row['imagem']; ?>" style="max-width: 200px; max-height: 180px;">
                            <div class="place"><strong><?php echo $row['subtitulo']; ?></strong></div>
                            <div class="date"><?php echo data_mysql_para_user($row['data']); ?></div>
                            <h4><a <?php echo 'href="noticias/'.$row['id_noticia'].'/'.normaliza($row['titulo']).'"'; ?> ><?php echo $row['titulo'] ?></a></h4>
                            <div class="audio">
                                <audio style="max-width: 230px; margin-left: -15px; margin-top: 7px; margin-bottom: 7px;" controls><source src="" type="audio/mpeg"></audio>
                            </div>
                         <p>
                            <?php echo substr($row['noticia'],0,125); ?>
                        </p>
                        <a <?php echo 'href="noticias/'.$row['id_noticia'].'/'.normaliza($row['titulo']).'"'; ?> >Leia mais sobre</a>
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