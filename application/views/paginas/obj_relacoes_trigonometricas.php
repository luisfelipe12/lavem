<?php $this->load->view('menu')?>

	<!-- Page Heading/Breadcrumbs -->
	<br/>
	<h1 class="mt-4 mb-3" id=titulo style="text-align:center;">Relações Trigonométricas</h1>
	<br/><br/>
	<div id="ggbApplet" style="margin:0 auto;"></div>

	<script>
var parameters = {
"id": "ggbApplet",
"width":1870,
"height":740,
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
</script>	  <br/><br/><br/><br/>

		
		
		<div class="container">
				<div class="row">
					<div class="col-lg-12" style="text-align: justify;"> 
						<a class="btn btn-primary" href="<?=base_url()?>assets/atividades_obj/relacoes/trigonometricas.pdf" target="_blank">Ver atividade
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