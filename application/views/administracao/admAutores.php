 <?php $this->load->view('administracao/headAdm')?> 
<script>	
	function confirma_excluir(id){
	var apagar = confirm('Você deseja excluir?');
	if (apagar){
	location.href = '<?php echo base_url('Questoes/deleteQuestoes') ?>/'+ id;
}
}
</script>
</head>
<body>
<?php $this->load->view('administracao/menuAdm'); ?>


<div class = "container">
	<div class = "panel-heading">
		<div class = "panel-title">Questões</div>
		<div style = "float: right;" ><button style="border: none;" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modalCadastro">Cadastrar Questão</button></div>
	</div>
	<br><br>
	<?php
	if($msg = get_msg()){
		echo '<strong><div style="text-align: center; font-size: 16px;" class="msg-box">'.$msg.'</div></strong>';
	}
	?>
	<br><br>
	<section>
		<div   class = "demo-html"></div>
		<table id    = "example" class = "display" style = "width:100%; font-size: 12px;">
			<thead>
				<tr>
					<th>Problema</th>
					<th>Resposta</th>
					<th>Resolução</th>
					<th>Tipo</th>
					<th>Editar</th>
					<th>Excluir</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($questoes as $questao) {
					echo '<tr class="odd gradeX">';
					echo '<td>' . $questao->problema . '</td>';
					echo '<td>' . $Questao->resposta . '</td>';
					echo '<td>' . $Questao->resolucao . '</td>';
					foreach($tipoquestoes as $tipoquestao){
						if($tipoquestao->idTipo == $questao->idTipo){
							echo '<td>'. $tipoquestao->nome . '</td>';
							break;
						}
					}
					echo '<td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalEdita'. $questao->idQuestao .'"><i class="glyphicon glyphicon-pencil"></i> Editar</button></td>';
					echo '<td><a class="btn btn-danger btn-xs" onclick="confirma_excluir(' . $questao->idQuestao . ');"><i class="glyphicon glyphicon-remove"></i> Excluir</a></td>';
					echo '</tr>';

					echo '<div onclick="data();" class = "modal fade" id = "modalEdita'. $questao->idQuestao .'" role       = "dialog">
					<div    class = "modal-dialog modal-sm">
					<div    class = "modal-content">
					<div    class = "modal-header">
					<button type  = "button" class  = "close" data-dismiss = "modal">&times;</button>
					<h4     class = "modal-title">Edita Questao</h4>
					</div>
					<div class = "modal-body">';

					echo form_open_multipart('Questao/updateQuestao');
					echo '<input maxlength="150"  class = "form-control" type = "hidden" id = "idQuestao" name = "idQuestao" placeholder = "idQuestao" value = "'. $Questao->idQuestao .'" required>
					<p>Número</p>
					<input maxlength="10"  class = "form-control" type = "text" id = "numero" name ="numero"  value  = "'. $Questao->numero . '"placeholder = "Número" required>
					<p>Descrição</p>
					<input maxlength="150"  class = "form-control" type = "text" id = "descricao" name = "descricao" placeholder = "Nome da Questao" value = "'. $Questao->descricao . '" required>
					<br>
					<p>Data Início</p>
					<input class = "form-control calendario" type = "text" id="dataInicio" name = "dataInicio" placeholder = "DD/MM/AAAA" value = "'. $Questao->dataInicio . '" required>
					<br>
					<p>Data Término</p>
					<input class = "form-control calendario" type = "text" id = "dataFim" name = "dataFim" placeholder = "DD/MM/AAAA" value = "'. $Questao->dataFim . '" required>
					<br>
					<p>Unidade</p>
					<select class = "form-control" type = "select" id = "idUnidade" name = "idUnidade">
						<option value = "" > Selecione Unidade </option>';
						foreach ($tipoquestoes as $tipoquestao ) { ?>
							<option value="<?= $tipoquestao->idTipo; ?>" <?=($tipoquestao->idTipo == $questao->idTipo) ? 'selected' : '' ?>> <?= $tipoquestao->nome; ?> </option>
						<?php
						}  
					echo '</select>
					<br>
					<div    class = "action">
					<button class = "btn btn-primary signup" type = "submit"  id = "cadastrar" class = "cadastrar" name = "cadastrar"  >Atualizar</button>
					</div>';
					echo form_close();
					echo '</div>
					<div    class = "modal-footer">
					<button type  = "button" class = "btn btn-default" data-dismiss = "modal">Fechar</button>
					</div>
					</div>
					</div>
					</div>';
				}
				?>

			</tbody>
			<tfoot>
				<tr>
					<th>Problema</th>
					<th>Resposta</th>
					<th>Resolução</th>
					<th>Tipo</th>
					<th>Editar</th>
					<th>Excluir</th>
				</tr>
			</tfoot>
		</table>
	</section>
</div>
<div    class = "modal fade" id = "modalCadastro" role       = "dialog">
	<div    class = "modal-dialog modal-sm">
		<div    class = "modal-content">
			<div    class = "modal-header">
				<button type  = "button" class  = "close" data-dismiss = "modal">&times;</button>
				<h4     class = "modal-title">Cadastro de Questao</h4>
			</div>
			<div class = "modal-body">
				<!-- Select de Diretores -->
				<?php
				echo form_open_multipart('Questao_Controller/addQuestao'); ?>
				<p>Número</p>
				<input maxlength="10"  class = "form-control" type = "text" id = "numeroC" name = "numeroC"  value  = "<?php echo isset($numero) ? $numero : ''; ?>"placeholder = "Número" required>
				<p>Descrição</p>
				<input maxlength="150"  class = "form-control" type = "text" id = "descricaoC" name = "descricaoC"  value  = "<?php echo isset($descricao) ? $descricao : ''; ?>"placeholder = "Descrição do Questao" required>
				<br>
				<p>Data Início</p>
				<input class = "form-control calendario" type = "text" id = "dataInicioC" name = "dataInicioC" placeholder = "DD/MM/AAAA" value = "<?php echo isset($dataInicio) ? $dataInicio : ''; ?>" required>
				<br>
				<p>Data Término</p>
				<input class = "form-control calendario" type = "text" id = "dataFimC" name = "dataFimC"  placeholder = "DD/MM/AAAA" value = "<?php echo isset($dataFim) ? $dataFim : ''; ?>" required>
				<br>
				<p>Unidade</p>
				<select class = "form-control" type = "select" id = "idUnidadeC" name = "idUnidadeC" required>
					<option value = "" > Selecione Unidade </option>
					<?php foreach ($unidades as $unidade ) { ?>
						<option value = "<?= $unidade->idUnidade; ?>"> <?= $unidade->nome ?></option>
					<?php  } ?>
				</select>
				<br><br>
				<div    class = "action">
					<button class = "btn btn-primary signup" type = "submit"  id = "cadastrar" class = "cadastrar" name = "cadastrar"  >Cadastrar</button>
				</div>
				<?php echo form_close(); ?>
			</div>
			<div    class = "modal-footer">
				<button type  = "button" class = "btn btn-default" data-dismiss = "modal">Fechar</button>
			</div>
		</div>
	</div>
</div>
</body>

</html>