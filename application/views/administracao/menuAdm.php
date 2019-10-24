	<nav class = "navbar navbar-inverse" style = "border-radius: 0px;">
		<div class = "container-fluid">
			<div class = "navbar-header">
				<a   class = "navbar-brand" href = "<?php echo base_url('Geral/indexAdm') ?>">Administração do Lavem</a>
			</div>
			<ul class = "nav navbar-nav">
				<li    class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown" href = "#">História da Matemática <span class = "caret"></span></a>
					<ul    class = "dropdown-menu">
						<li><a href  = "<?php echo base_url('Historia/cinemat') ?>">CINEMAT</a></li>
					</ul>
				</li>
				<li    class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown" href = "#">Jogos Matemáticos <span class = "caret"></span></a>
					<ul    class = "dropdown-menu">
						<li><a href  = "<?php echo base_url('') ?>">Apresentação</a></li>
						<li><a href  = "<?php echo base_url('') ?>">Jogos</a></li>
					</ul>
				</li>
				<li    class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown" href = "#">Resolução de Problemas<span class = "caret"></span></a>
					<ul    class = "dropdown-menu">
						<li><a href  = "<?php echo base_url('') ?>">Apresentação</a></li>
						<li><a href  = "<?php echo base_url('Questoes/index') ?>">Questões</a></li>
					</ul>
				</li>
				<li    class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown" href = "#">Resolução de Problemas<span class = "caret"></span></a>
					<ul    class = "dropdown-menu">
						<li><a href  = "<?php echo base_url('') ?>">Ensino Fundamental</a></li>
						<li><a href  = "<?php echo base_url('') ?>">Ensino Médio</a></li>
						<li><a href  = "<?php echo base_url('') ?>">Ensino Superior</a></li>
					</ul>
				</li>
				<li    class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown" href = "#">Projetos de Licenciatura <span class = "caret"></span></a>
					<ul    class = "dropdown-menu">
						<li><a href  = "<?php echo base_url('') ?>">PIBID</a></li>
						<li><a href  = "<?php echo base_url('') ?>">Residência Pedagógica</a></li>
						<li><a href  = "<?php echo base_url('') ?>">SEMAT</a></li>
						<li><a href  = "<?php echo base_url('') ?>">Publicações</a></li>
						<li><a href  = "<?php echo base_url('ProjetosLicenciatura/projetos') ?>">Projetos</a></li>
					</ul>
				</li>
				<li    class = "dropdown"><a class                                         = "dropdown-toggle" data-toggle = "dropdown" href = "#"><i class = "glyphicon glyphicon-user"></i>Usuário<span class = "caret"></span></a>
					<ul    class = "dropdown-menu">
						<li><a href  = "<?php echo base_url('') ?>"><i class    = "glyphicon glyphicon-user"></i> Meu Perfil </a></li>
						<li><a href  = "<?php echo base_url('Autenticacao/logout') ?>"><i class    = "glyphicon glyphicon-off"></i> Sair</a></li><!-- LOGOUT-->
					</ul>
				</li>		
			</ul>
		</div>
	</nav>

