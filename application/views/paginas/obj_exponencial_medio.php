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
						<a class="btn btn-primary" href="<?=base_url()?>assets/atividades_obj/funcao_exponencial/atividade_funcaoexponencial_medio.pdf" target="_blank">Ver atividade
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