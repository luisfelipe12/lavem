<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name=viewport content="width=device-width,initial-scale=1"><script src="https://cdn.geogebra.org/apps/deployggb.js"></script>

  <title>LAVEM - IFSULDEMINAS, Campus Passos</title>

  <!-- Bootstrap core CSS -->
  <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?=base_url()?>assets/css/estiloIndex.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/css/modern-business.css" rel="stylesheet">

  <!-- Bootstrap core JavaScript -->
  <script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>

<body>

	<div class="navbar navbar-expand-lg" id="logo"><a class="navbar-brand" href="index">
		<img id="lavemLogo" src="<?=base_url()?>assets/imagens/logoLavem.png"/></a>
		<div class="navbar navbar-expand-lg d-none d-sm-block" id="titulo">
			Laboratório Virtual de Educação Matemática
		</div>
		<a href="<?php echo base_url('Geral/indexAdm'); ?>"><img id="logoIF" src="<?=base_url()?>assets/imagens/logoIF.jpg"/></a>
	</div>
 <div class="navbar navbar-expand-lg d-block d-sm-none text-center" id="titulo">
  Laboratório Virtual de Educação Matemática
</div>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-primary bg-primary menu">
  <div class="container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><img id="imgMenu" src="<?=base_url()?>assets/imagens/iconMenu.png"/></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url()?>Geral/index"> Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            História da Matemática
          </a>
          <div class="dropdown-menu dropdown-menu-right bg-primary" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="<?=base_url()?>Geral/hist_da_mat">CINEMAT</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Jogos Matemáticos
          </a>
          <div class="dropdown-menu dropdown-menu-right bg-primary" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="<?=base_url()?>Geral/apresentacao_J">Apresentação</a>
            <a class="dropdown-item" href="<?=base_url()?>Geral/jogos">Jogos</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="apresentacao_RP" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Resolução de Problemas
          </a>
          <div class="dropdown-menu dropdown-menu-right bg-primary" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="<?=base_url()?>Geral/apresentacao_RP">Apresentação</a>
            <a class="dropdown-item" href="<?=base_url()?>Geral/questoes_enemof">Questões do Enem</a>
            <a class="dropdown-item" href="<?=base_url()?>Geral/questoes_obmep">Questões da OBMEP</a>
            <a class="dropdown-item" href="<?=base_url()?>Geral/questoes_vestibulares">Questões Vestibulares</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Objetos de Aprendizagem
          </a>
          <div class="dropdown-menu dropdown-menu-right bg-primary" aria-labelledby="navbarDropdownBlog">
            <a class="dropdown-item" href="<?=base_url()?>Geral/ensino_fundamental">Ensino Fundamental</a>
            <a class="dropdown-item" href="<?=base_url()?>Geral/ensino_medio">Ensino Médio</a>
            <a class="dropdown-item" href="<?=base_url()?>Geral/ensino_superior">Ensino Superior</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Projetos Licenciatura
          </a>
          <div class="dropdown-menu dropdown-menu-right bg-primary" aria-labelledby="navbarDropdownBlog">
            <a class="dropdown-item" href="<?=base_url()?>Geral/pibid">PIBID</a>
            <a class="dropdown-item" href="<?=base_url()?>Geral/residencia">Residência Pedagógica</a>
            <a class="dropdown-item" href="<?=base_url()?>Geral/sematoficial">SEMAT</a>
            <a class="dropdown-item" href="<?=base_url()?>Geral/publicacoes">Publicações</a>
            <a class="dropdown-item" href="<?php echo base_url('Geral/projetos');?>">Projetos</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>