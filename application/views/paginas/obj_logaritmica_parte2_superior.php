<?php $this->load->view('menu')?>

	<!-- Page Heading/Breadcrumbs -->
	<br/>
	<h1 class="mt-4 mb-3" id=titulo style="text-align:center;">Estudo do Comportamento da Função Logarítmica</h1>
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
</script> <br/><br/><br/><br/>

			

			
			
			
			
			<div class="container">
				<div class="row">
					<div class="col-lg-12" style="text-align: justify;"> 
						<a class="btn btn-primary" href="<?=base_url()?>assets/atividades_obj/funcao_logaritmica/atividade_funcao_logaritmica_parte2.pdf" target="_blank">Ver atividade
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