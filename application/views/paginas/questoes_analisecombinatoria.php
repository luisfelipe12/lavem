<?php $this->load->view('menu')?>
	<!-- Page Content -->
	<div class="container">

		<!-- Page Heading/Breadcrumbs -->
		<h1 class="mt-4 mb-3" style="text-align:center;">ENEM- Análise Combinatória</h1>

		<!-- Intro Content -->
		<div class="row">
			<div class="col-lg-12" style="text-align: justify;">
				<p><b>(ENEM-2013)</b> Um artesão de joias tem à sua disposição pedras brasileiras de três cores: vermelhas, azuis e verdes.
					Ele pretende produzir joias constituídas por uma liga metálica, a partir de um molde no formato de um losango não quadrado com pedras nos seus vértices, de modo que dois vértices consecutivos tenham sempre pedras de cores diferentes.
				A figura ilustra uma joia, produzida por esse artesão, cujos vértices A, B, C e D correspondem às posições ocupadas pelas pedras.</p>
				
				
				<div class="col-lg-4" style="margin: 0 auto;">
					<figure style="text-align: center;">
						<img class="img-fluid rounded mb-4" style="width:200px; height:200px;" src="<?=base_url()?>assets/imagens/questoes_enem/analise_combinatoria/losango.png" alt="">
					</figure>
				</div>
				
				
				<p>Com base nas informações fornecidas, quantas joias diferentes, nesse formato, o artesão poderá obter?</p>
				<p>A) 6</p>
				<p>B) 12</p>
				<p>C) 18</p>
				<p>D) 24</p>
				<p>E) 36</p>
				
				<!-- Trigger the modal with a button -->
				<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Conferir resposta</button>
			</br></br>
			
			<p><b>(ENEM-2010)</b> João mora na cidade A e precisa visitar cinco clientes, localizados em cidades diferentes da sua. Cada trajeto possível pode ser representado por uma sequência de 7 letras. Por exemplo, o trajeto ABCDEFA, 
				informa que ele sairá da cidade A, visitando as cidades B, C, D, E e F nesta ordem, voltando para a cidade A. Além disso, o número indicado entre as letras informa o custo do deslocamento entre as cidades. A figura mostra o
			custo de deslocamento entre cada uma das cidades.</p>
			
			
			
			<div class="col-lg-4" style="margin: 0 auto;">
				<figure style="text-align: center;">
					<img class="img-fluid rounded mb-4" style="width:400px; height:300px;" src="<?=base_url()?>assets/imagens/questoes_enem/analise_combinatoria/redes.png" alt="">
				</figure>
			</div>
			
			
			
			
			<p>Como João quer economizar, ele precisa determinar qual o trajeto de menor custo para visitar os cinco clientes. somente parte das sequências, pois os trajetos ABCDEFA e AFEDCBA têm o mesmo custo. Ele gasta 1min30s para examinar 
			uma sequência e descartar sua simétrica, conforme apresentado.</p>
			<p>O tempo mínimo necessário para João verificar todas as sequências possíveis no problema é de:</p>
			<p>A) 60 min.</p>
			<p>B) 90 min.</p>
			<p>C) 120 min.</p>
			<p>D) 180 min.</p>
			<p>E) 360 min.</p>
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Conferir resposta</button>
		</br></br>
		
		<p><b>(ENEM-2005)</b>A escrita Braile para cegos é um sistema de símbolos no qual cada caráter é um conjunto de seis pontos dispostos em forma retangular, dos quais pelo menos um se destaca em relação aos demais.
		Por exemplo, a letra A é representada por:</p>
		
		
		
		<div class="col-lg-4" style="margin: 0 auto;">
			<figure style="text-align: center;">
				<img class="img-fluid rounded mb-4" style="width:100px; height:100px;" src="<?=base_url()?>assets/imagens/questoes_enem/analise_combinatoria/braile.png" alt="">
			</figure>
		</div>
		
		
		<p>O número total de caracteres que podem ser representados no sistema Braile é:</p>
		<p>A) 12</p>
		<p>B) 31</p>
		<p>C) 36</p>
		<p>D) 63</p>
		<p>E) 720</p>
		<!-- Trigger the modal with a button -->
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">Conferir resposta</button>
	</br></br>
	
</div>

<!-- Modal -->


<div id="myModal1" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Resposta</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<p>Letra A</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			</div>
		</div>

	</div>
</div>

<div id="myModal2" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Resposta</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<p>Letra B</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			</div>
		</div>

	</div>
</div>

<div id="myModal3" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Resposta</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<p>Letra C</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			</div>
		</div>

	</div>
</div>

<div id="myModal4" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Resposta</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<p>Letra D</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			</div>
		</div>

	</div>
</div>

<div id="myModal5" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Resposta</h4>
			</div>
			<div class="modal-body">
				<p>Letra E</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			</div>
		</div>

	</div>
</div>
</div>
</div>



<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-default rodape">
	<div class="container">
		<p class="m-0 text-center text-white">Todos os direitos reservados© </br>
		Laboratório Virtual de Educação Matemática - LAVEM</br>
	IFSULDEMINAS Campus Passos - 2018 </p>		  </div>
	<!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->



</body>

</html>
