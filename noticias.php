        <?php require("includes/header.php"); ?>   

             <div class="container">
            <div class="row">    
            <div class="col-md-9 col-sm-9">

                <?php 

                    $sql = $db->select("SELECT * FROM noticias WHERE id_noticia='$id'");
                    while($row = $db->expand($sql)){


                ?>

                <section id="content">
                    <article class="blog-post">
                        <br>
                        <img src="imagens/<?php echo $row['imagem']; ?>">
                        <header><a href=""><h2><?php echo $row['titulo']; ?></h2></a></header>
                        <figure class="meta">
                            <a href="#" class="link-icon"><i class="fa fa-map-marker"></i><?php echo $row['cidade']; ?></a>
                            <a href="#" class="link-icon"><i class="fa fa-calendar"></i><?php echo data_mysql_para_user($row['data']);?></a>
                        </figure>
                        <p style="text-align:justify;" >
                             <?php echo $row['noticia']; ?>
                        </p>
                    </article><!-- /.blog-post -->
                </section><!-- /#content -->
           
            <!-- end Content -->              
                        <?php
            }

                 ?> </div><!-- /.col-md-9 -->
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
            <!-- end Sidebar -->
        </div><!-- /.row -->
    </div><!-- /.container -->

        <?php require("includes/rodape.php"); ?>