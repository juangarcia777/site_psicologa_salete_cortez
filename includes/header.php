<!DOCTYPE html>
<?php require("class/class.db.php"); ?>
<?php require("class/class.seguranca.php"); ?>


<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href="<?php echo PATH; ?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="<?php echo PATH; ?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo PATH; ?>assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo PATH; ?>assets/css/zabuto_calendar.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo PATH; ?>assets/css/bootstrap-select.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo PATH; ?>assets/revolution/css/settings.css" type="text/css">
    <link rel="stylesheet" href="<?php echo PATH; ?>assets/revolution/css/layers.css" type="text/css">
    <link rel="stylesheet" href="<?php echo PATH; ?>assets/revolution/css/navigation.css" type="text/css">
    <link rel="stylesheet" href="<?php echo PATH; ?>assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo PATH; ?>assets/css/owl.carousel.css" type="text/css">

    <base href="<?php echo PATH; ?>">

    <title>Salete Cortez - Psicóloga Especialista</title>

</head>

<body class="homepage">
<div class="overlay"></div>

<div class="outer-wrapper">
<div class="page-wrapper">

      <?php
            $name_page = basename($_SERVER['PHP_SELF']);
        ?>

    <header class="navigation" id="top">
        <div class="container">
            <div class="secondary-nav">
                <span></span>
                <span></span>
            </div>
            <!--/.secondary-nav-->
            <div class="main-nav">
                <div class="brand"><a href="pagina-inicial"><img src="imagens/salete_logo_branco.png" style="max-width: 300px;" alt=""></a></div><!--/.brand-->
               <div class="collapse navbar-collapse" id="nav-open-btn">
            <ul class="nav">

              <li
              <?php if($name_page=='index.php'){echo 'class="active"';} ?>
              > 
              <a href="home">Home</a>
              </li>


            <li role="presentation" class="dropdown" style="margin-right: -20px;">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sobre Mim <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
            <li><a href="sobre_mim">Sobre</a></li>
            <li><a href="psicoterapia">Psicoterapia pra que ?</a></li>
            <li><a href="pensamento">O que penso ?</a></li>
            </ul>
            </li>

              <li
              <?php if($name_page=='mude_sua_vida.php'){echo 'class="active"';}
              
              ?>
              >
              <a href="mude-sua-vida">Agendar Consulta</a>
              </li>

              <li
              <?php if($name_page=='materias.php'){echo 'class="active"';} ?>
              >
              <a <?php echo 'href="materias-e-noticias/0/Artigos"'; ?> >Meus Artigos</a>
              </li>

              <li
              <?php if($name_page=='entrandoemcontato.php'){echo 'class="active"';} ?>
              > 
              <a href="contato">Converse Comigo</a>
              </li>

            </ul>
          </div>
                <a href="contato" class="icon-shortcut"><i class="icon_phone" title="Agendar Consulta"></i></a><!--/.icon-->
            </div>
            <!--/.main-nav-->
        </div>
        <!--/.container-->
    </header>
    <!--/.header-->

