<?php $this->load->view('menu')?>

	<!-- Page Heading/Breadcrumbs -->
	<br/>
	<h1 class="mt-4 mb-3" id=titulo style="text-align:center;">Estudo do Comportamento da Função Exponencial</h1>
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
</script>  <br/><br/><br/><br/>

			

			
			
			
			
			<div class="container">
				<div class="row">
					<div class="col-lg-12" style="text-align: justify;"> 
						<a class="btn btn-primary" href="<?=base_url()?>assets/atividades_obj/funcao_exponencial/atividade_funcao_exponencial_parte2.pdf" target="_blank">Ver atividade
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