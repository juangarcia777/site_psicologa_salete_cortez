 <div style="margin-bottom: 150px;" class="container">
        <div class="block center">
            <h2 class="text-color-white half-bottom-margin"><strong>Receba seu conteúdo exclusivo todo mês</strong></h2>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                    <form id="form-daily-motivation">
                        <div class="form-group input-group">
                            <div class="form-status text-color-white"></div>
                            <input type="text" class="form-control" name="email" placeholder="Cadastre seu WhatsApp">
                            <span class="input-group-btn"><button class="btn btn-white" type="submit"><i class="arrow_right"></i></button></span>
                        </div>
                    </form>
                    <!--/ form-->
                </div>
                <!--/ .col-md-6-->
            </div>
            <!--/ .row-->
            
             <?php 

                $sql = $db->select("SELECT * FROM banners ORDER BY id DESC LIMIT 1");
                while($row = $db->expand($sql)){



                ?>

            <div class="bg">
                <img src="imagens/salete_fundo_newsletter.png" alt="">
            </div><!--/ .bg-->
            
            <?php
                }
            ?>

        </div>
        <!--/ .block-->
    </div>
    <!--/ .container-->