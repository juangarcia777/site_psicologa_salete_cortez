<?php require("includes/header.php"); ?>

  <div class="heading">
        <div class="container">
            <h1>Artigos</h1>
        </div>
    </div>


 <div class="container">
        <div class="clearfix">
            <h2 class="pull-left">Leia ou escute</h2>

            <div class="pull-right">
                <span>Quer uma consulta individual ?&nbsp;</span>
                <a href="contato" class="btn btn-default">Contato</a>
            </div>
        </div>
        <div class="workshop-list">
    
            <div class="row">

                <div class="col-md-9" style="border-right: 1px solid #999">


                <?php 


                    if ($id == 0) {
                         $pega = '';
                    }else{
                        $pega = "WHERE cat_pai ='$id'";
                    }
                    
                    
                      $sql = $db->select("SELECT * FROM noticias $pega ORDER BY data");
                        while($row = $db->expand($sql)){
                ?>

                <div class="col-md-6 col-sm-6">
                    <div class="workshop">
                        <div class="date-info">
                             <img src="imagens/<?php echo $row['imagem']; ?>" style="max-width: 340px;">
                            <!--<div class="date"><?php //echo data_mysql_para_user($row['data']);?></div>
                            <div class="place"><?php //echo $row['subtitulo'];?></div>-->
                            <h4><a <?php echo 'href="noticias/'.$row['id_noticia'].'/'.normaliza($row['titulo']).'"'; ?> ><?php echo $row['titulo'] ?></a></h4>
                            <div style="margin-bottom: 15px;" class="audio">
                                <audio style="width: 330px;" controls><source src="" type="audio/mpeg"></audio>
                            </div>
                            <p>
                            <?php echo substr($row['noticia'],0,125); ?>
                        </p>
                         <a <?php echo 'href="noticias/'.$row['id_noticia'].'/'.normaliza($row['titulo']).'"'; ?> >Leia mais sobre</a>
                        </div>
                    </div>
                    <!--/ .workshop-->
                </div>
                <!--/ .col-md-4-->

                <?php 
                    }
                ?>
                </div>

            <!-- sidebar -->
            <div class="col-md-3 col-sm-3">
                <section id="sidebar" class="sidebar">

                    <aside id="categories">
                        <header><h3>Categorias</h3></header>
                        <ul class="list-links">

                            <?php 
                            $sql = $db->select("SELECT * FROM categorias ORDER BY id");
                            while($row = $db->expand($sql)){
                            ?>
                                 <li> <a <?php echo 'href="materias-e-noticias/'.$row['id'].'/'.normaliza($row['nome']).'"'; ?> class="ee" ><?php echo $row['nome'];?></a></li><br>

                            <?php  } ?>
                           
                        </ul>
                    </aside><!-- /#categories -->
                </section><!-- /#sidebar -->
            </div><!-- /.col-md-3 -->
            </div>
            <!--/ .row-->
        </div>
        <!--/ .workshop-list-->
<?php require("includes/rodape.php"); ?>



