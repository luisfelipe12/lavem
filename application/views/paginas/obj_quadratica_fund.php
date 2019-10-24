<?php $this->load->view('menu')?>

	<!-- Page Heading/Breadcrumbs -->
	<br/>
	<h1 class="mt-4 mb-3" id=titulo style="text-align:center;">Estudo do Comportamento da Função Quadrática</h1>
	<br/><br/>
	<div id="ggbApplet" style="margin:0 auto;"></div>

	<script>
		var parameters = {
			"id": "ggbApplet",
			"width":1000,
			"height":574,
			"showMenuBar":true,
			"showAlgebraInput":true,
			"showToolBar":true,
			"customToolBar":"0 39 73 62 | 1 501 67 , 5 19 , 72 75 76 | 2 15 45 , 18 65 , 7 37 | 4 3 8 9 , 13 44 , 58 , 47 | 16 51 64 , 70 | 10 34 53 11 , 24  20 22 , 21 23 | 55 56 57 , 12 | 36 46 , 38 49  50 , 71  14  68 | 30 29 54 32 31 33 | 25 17 26 60 52 61 | 40 41 42 , 27 28 35 , 6",
			"showToolBarHelp":false,
			"showResetIcon":false,
			"enableLabelDrags":false,
			"enableShiftDragZoom":true,
			"enableRightClick":false,
			"errorDialogsActive":false,
			"useBrowserForJS":false,
			"allowStyleBar":false,
			"preventFocus":false,
			"showZoomButtons":true,
			"capturingThreshold":3,
			// add code here to run when the applet starts
		"appletOnLoad":function(api){ /* api.evalCommand('Segment((1,2),(3,4))');*/ },
		"showFullscreenButton":true,
		"scale":1,
		"disableAutoScale":false,
		"allowUpscale":false,
		"clickToLoad":false,
		"appName":"classic",
		"showSuggestionButtons":true,
		"buttonRounding":0.7,
		"buttonShadows":false,
		"language":"pt",
			// use this instead of ggbBase64 to load a material from geogebra.org
			// "material_id":"RHYH3UQ8",
			// use this instead of ggbBase64 to load a .ggb file
			// "filename":"myfile.ggb",
			"ggbBase64":"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",
		};
			// is3D=is 3D applet using 3D view, AV=Algebra View, SV=Spreadsheet View, CV=CAS View, EV2=Graphics View 2, CP=Construction Protocol, PC=Probability Calculator DA=Data Analysis, FI=Function Inspector, macro=Macros
			var views = {'is3D': 0,'AV': 0,'SV': 0,'CV': 0,'EV2': 0,'CP': 0,'PC': 0,'DA': 0,'FI': 0,'macro': 0};
			var applet = new GGBApplet(parameters, '5.0', views);
			window.onload = function() {applet.inject('ggbApplet')};
			applet.setPreviewImage('data:image/gif;base64,R0lGODlhAQABAAAAADs=','https://www.geogebra.org/images/GeoGebra_loading.png','https://www.geogebra.org/images/applet_play.png');
		</script>	  <br/><br/><br/><br/>

		
		<div class="container">
			<div class="row">
				<div class="col-lg-12" style="text-align: justify;"> 
					<a class="btn btn-primary" href="<?=base_url()?>assets/atividades_obj/funcao_quadratica/atividade_funcaoquadratica_fundamental.pdf" target="_blank">Ver atividade
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
				
			</div>
		</div>
		<br><br>
		
		
		
		
		
		
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