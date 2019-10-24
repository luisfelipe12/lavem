		<?php $this->load->view('administracao/headAdm')?>
		function confirma_excluir(idServidor){
		var apagar = confirm('Você deseja excluir este servidor');
			if (apagar){
			location.href = '<?php echo base_url('Servidores/deleteservidor') ?>/'+ idServidor;
			}
		}
</script>
</head>
<body>
	<?php $this->load->view('administracao/menuAdm')?>
	<div class = "container">
		<div class = "panel-heading">
			<div class = "panel-title">Projetos</div>

			<div style = "float: right;" ><a href = "<?php echo base_url('Servidores/Novo_servidor') ?>" class = "btn btn-info">Cadastrar Novo Projeto</a> </div>
		</div>
		<br><br>
		<?php
		//se existe uma mensagem vinda do controller
		if($msg = get_msg()){
		echo '<div class="msg-box"><center> <b>'.$msg.'</b></center></div>';
	}
	?>
	<br><br>
	<section>
		<div   class = "demo-html"></div>
		<table id    = "example" class = "display" style = "width:100%; font-size: 12px;">
			<thead>
				<tr>
					<th>Descrição</th>
					<th>Cargo</th>
					<th>Atualizar</th>
					<th>Excluir</th>
				</tr>
			</thead>
			<tbody>

			</tbody>
			<tfoot>
				<tr>
					<th>Descrição</th>
					<th>Cargo</th>
					<th>Atualizar</th>
					<th>Excluir</th>
				</tr>
			</tfoot>
		</table>
	</section>
</div>
</body>
</html>
