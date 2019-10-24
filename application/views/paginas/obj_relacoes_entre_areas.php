<?php $this->load->view('menu')?>

	<!-- Page Heading/Breadcrumbs -->
	<br/>
	<h1 class="mt-4 mb-3" id=titulo style="text-align:center;">Relação entre Áreas</h1>
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
"customToolBar":"0 39 | 1 501 67 , 5 19 , 72 75 76 | 2 15 45 , 18 65 , 7 37 | 4 3 8 9 , 13 44 , 58 , 47 | 16 51 64 , 70 | 10 34 53 11 , 24  20 22 , 21 23 | 55 56 57 , 12 | 36 46 , 38 49  50 , 71 | 30 29 54 32 31 33 | 17 26 62 73 , 14 68 | 25 52 60 61 | 40 41 42 , 27 28 35 , 6",
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
						<a class="btn btn-primary" href="<?=base_url()?>assets/atividades_obj/relacoes/areas.pdf" target="_blank">Ver atividade
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