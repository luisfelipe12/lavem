<?php $this->load->view('menu')?>

	<!-- Page Heading/Breadcrumbs -->
	<br/>
	<h1 class="mt-4 mb-3" id=titulo style="text-align:center;">Estudo do Comportamento da Função Afim</h1>
	<br/><br/>

	<div id="ggbApplet" style="margin:0 auto;"></div>

	<script>
		var parameters = {
			"id": "ggbApplet",
			"width":998,
			"height":574,
			"showMenuBar":true,
			"showAlgebraInput":true,
			"showToolBar":true,
			"customToolBar":"0 39 73 62 | 1 501 67 , 5 19 , 72 75 76 | 2 15 45 , 18 65 , 7 37 | 4 3 8 9 , 13 44 , 58 , 47 | 16 51 64 , 70 | 10 34 53 11 , 24  20 22 , 21 23 | 55 56 57 , 12 | 36 46 , 38 49  50 , 71  14  68 | 30 29 54 32 31 33 | 25 17 26 60 52 61 | 40 41 42 , 27 28 35 , 6",
			"showToolBarHelp":true,
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
		</script> 	  <br/><br/><br/><br/>
		<div class="container">
			<div class="row">
				<div class="col-lg-12" style="text-align: justify;"> 
					<a class="btn btn-primary" href="<?=base_url()?>assets/atividades_obj/funcao_afim/atividade_funcaoafim_fundamental.pdf" target="_blank">Ver atividade
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