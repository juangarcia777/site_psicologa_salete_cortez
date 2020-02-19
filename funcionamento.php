<?php require("includes/header.php") ?>  


    <div class="heading">
        <div class="container">
            <h1>Passo a passo de como marcar sua consulta</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Content -->



            <div class="col-md-8 col-sm-8">

                 <?php 

                $sql = $db->select("SELECT * FROM funcionamento ORDER BY id");
                while($row = $db->expand($sql)){



                ?>

                <section id="content">
                    <article class="blog-post">
                         <div>
                            <img src="imagens/<?php echo $row['img'] ?>" style="max-height: 90px;">
                        </div>
                        <header><h2><?php echo $row['titulo']; ?> </h2></header>
                        <p style="text-align: justify;">
                            <?php echo $row['texto'] ?>
                        </p>
                    </article><!-- /.blog-post -->
                </section><!-- /#content -->

                <?php 
                    }
                ?>

            </div><!-- /.col-md-9 -->


            <!-- end Content -->
            <div class="col-md-4 col-sm-4">
                <section id="sidebar" class="sidebar">
                    <aside id="post-archive">
                        <header><h3>Dúvidas Frequentes</h3></header>
                        <ul class="list-links">
                            <li><a href="funcionamento.php">Agendamento</a></li>
                            <li><a href="funcionamento.php">Pagamento</a></li>
                            <li><a href="funcionamento.php">Consulta</a></li>
                        </ul>
                    </aside><!-- /#post-archive -->
                </section><!-- /#sidebar -->
            </div><!-- /.col-md-3 -->
            <!-- end Sidebar -->
        </div><!-- /.row -->
    </div><!-- /.container -->

<?php require("includes/rodape.php") ?>