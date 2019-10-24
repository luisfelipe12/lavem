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
"ggbBase64":"UEsDBBQACAgIAEVtQk0AAAAAAAAAAAAAAAAXAAAAZ2VvZ2VicmFfZGVmYXVsdHMyZC54bWztml1z4jYUhq+7v0Kjq/YiYBkMbCbOTnZnOt2ZJJtpMju9FbYwaoTkWnIw+fWVJeOPBbJgSEnS5CLyEZJsP+/x0ZHss0/ZjIEHkkgquA9Rx4GA8ECElEc+TNXkZAQ/nX84i4iIyDjBYCKSGVY+9PKWZT9tdTzHzetwHPswYFhKGkAQM6zyLj6cQwAySU+5uMYzImMckNtgSmb4UgRYmVGmSsWn3e58Pu8sz9cRSdSNItXJZAiBvlYufVgcnOrhGp3mPdPcdRzU/evq0g5/QrlUmAcEAn0fIZnglCmpDwkjM8IVUIuY+DAWlCsIGB4T5sOb3AK/ThJCfoOg6KTxOPD8wy9ncirmQIz/JoGuU0lKyn7G6OZt9M9fBBMJSHw4HEIQ2WLsQ9fzNCUWT7EPHduY4QVJwANmZQ1OlQhMf1M7wUySZVt9pisREvtLv2jP6cxQBFIRLQCCQMaEhObI3iEyaiyMsLXxAiGSUILMh9f4GoJFUT7a0jQxbG7pY3FKr16rFozUrvysW2DdDnBIYsJD3ahBGbWiPBgZynkxtsVrhtx/bsiDd8ibIKPdKX/jdbZuK7bI9QxcU74Hihrdr/xPEulrrjPuvTM+KOOmB/db0XUMW+eVkjVNLEOZ/9dpjJjFjGQHBM8oryBeGqOE7rbLLurQnaMgd1ojz3FYeGpKg3tOpMzJVuPmB3/QUM9e5nxCp41U6ZHQcGRHIP/whmRUK0Z1m6dlmKQ8UCagFGi/pMlDXYte3zmGGtWYhxZjX9KbWUoS5VbJ5XZpV47dLqH7fzu2SBXLz/yVK73KIsZd5cqt3RMS3+mhvvG7BHOZL7WanrRZtwQvntLMe9fs5Wm2jFvX33FSKpHq5H6irz2sy9cuPdo4gXdc79ga7hDN1xLZP6V5UQ69o7cexq0G7aKC6/TXY+wMX7BbPejbExWP74VZ5Qjv+druIXJNko0TRSTF/GdLFraIas/4zdIu9RhaPfa/xp0XlV7PaOqhFf9Gjv1D/Y8OQgPkHlvmpwE3lic3ZUWFGB0J8Qt9aDbTDATP97+XywtrlRz7byx0HGAdRyPCbcSVAGSOabZwTOdHp3gzkSFjL5D59RHZatNfX3hCM3Bhe1zYhheuLXq26NvCKwG1WzwaaWMdtWrp8w9TQ7/diuc1BZI3Kfp/kMLzdEaSWmi4Xtql83g2OOjxUtKQdotQsMlPNnuFZDTULjSjWqQTrd4MZ0ZFPJaCpYrcBgkhvHpJZ914TkM1zRM7fe4JzXJ3sWOCqUjoo+CqpAHyp+CCmdd5jR2Ode7jPpXANpx1v/CMecSqp/HCWpUCdgPfNPpxb2+dMHWGToFw0HFHPTTyes4QDT96o8GWSNGoQmp/2JpoI9wUcmwxnyBnazfaP9zsFDTcdUEDJ0G1C9tzDuwYK2vJ38uKahX0ErcGjcusNH22XT8mglRWO9nWKgmN3lh+g9OMMoqTxeqZno2wIlmVYdwZo/YhQjvAZk/nORFPdJwCUk9okzICSf2wXuWTdt8eGzzF3PuTtyVarqi6pa/Wqn0nYCFMqKbP8Ux3sBdB+Wcc3EeJSHm4Ot8dxCfRsX1yM7SxEIzgKoB9Xtq199MrGcYmQNvPIs/mUsGUBPdjkTUmxadjE5XVk3NpjNp74zVPzj5z5cnRXaHNXuC2rzNPVnYOu7VPqLrLz7TO/wVQSwcIMBXbAO8EAABIJgAAUEsDBBQACAgIAEVtQk0AAAAAAAAAAAAAAAAXAAAAZ2VvZ2VicmFfZGVmYXVsdHMzZC54bWztl0tu2zAQhtfNKQjuI5Gy5MSBlcBIFy2QFC2y6ZamxjZbmVRE+qFcrXfomcqH7MhJHDRG2qJovdDwMTMkv18i6eHFel6iJdRaKJljGhGMQHJVCDnN8cJMjk/xxfnRcApqCuOaoYmq58zkOHOe2zhbizKSuDZWVTnmJdNacIyqkhkXkuMVRmitxZlUH9gcdMU43PAZzNmV4sz4LDNjqrM4Xq1W0Wa8SNXTeDo10VoXGNm5Sp3jtnBm0+0ErXrePSGExp+vr0L6YyG1YZIDRnYdBUzYojTaFqGEOUiDTFOBnbGSgvfsGCUbQ5nj99LYxQF3M0N8US9tfBuc4x7NCD4/ejPUM7VCavzF+uXY1AvYxvtK7Hxs96UqVY3qHCdZhpEFS5MTjMY5drzKasZsKaIk/Gg6IJT2aRLCS9ZAjZasdN6+hS2M4j6jb52wUsPG1459rQoIPWnrL8XcE0bagBWHYqQrgMKXwuqJV6rxonfzCQk3pikBmZngXyVoSz/rBLnCO1EU4N6dEANiCnJpgahaW8WJH6Uh3v2OtK/Ymvp6Q33vHQ3NPt5OtRZrNAoRo+A4SoLpBZMGk22RwK0M89TumeOK1fYls4m46x/GrdaPVGdroTuij1z17Y7QpHeQ0MTLTB6K/JdKup8uastg1/z92/Ow/VfEWW1ACyY72C9dx0Pu/X+d+36QNr+EDr+Pvr7Dz+6BB/EbDDzAhA48Qm+3O1T2Whi5UnWh0TpsAmFr8M/VNuWEuSOoHSWiz0AkB0JUZTODolbynmOn6R5lr0V5yJfzUvw063n+GX10PKTt8ZAN+iTtp6+mxaGv9H6yEsx2mR9cucsy+8/yJSxvF6zw+2y71E+bepcpPewuQtKnN8vo5NWA/IoLxJPXB9cY7ghNMHfJNuFLbxRo1A/mJJjTYAZ7bxtiXpWCC/O8lHpRT+yl96kDsO3aVTX9U6reJ/4thyD92f077lze480fhPMfUEsHCHdr6GTgAgAAwgwAAFBLAwQUAAgICABFbUJNAAAAAAAAAAAAAAAAFgAAAGdlb2dlYnJhX2phdmFzY3JpcHQuanNLK81LLsnMz1NIT0/yz/PMyyzR0FSoruUCAFBLBwhFzN5dGgAAABgAAABQSwMEFAAICAgARW1CTQAAAAAAAAAAAAAAAAwAAABnZW9nZWJyYS54bWzVWF9z2zYSf04/xQ4fOsmMbBEgQVKplI6bmet1xkk7dXrTuZcbiIQknCmSJSBLzrVPfehTP1W+2O0CJCXZTmLXmcydYwYEuNg/v13sLjz9ercu4Uq1RtfVLGCnYQCqyutCV8tZsLGLkyz4+sUX06Wql2reSljU7VraWSCIctiHs1MRclqTTTML8lIao/MAmlJa2jILtgHoYhZEkySdZElyEkcFP4kzxU8ymhaLWCgusvk8FgHAzujnVf1arpVpZK4u8pVay/M6l9bJW1nbPB+Pt9vtaa/Zad0ux8vl/HRnigDQqsrMgu7lObI72rSNHDkPQzb++dW5Z3+iK2NllasAyOKNfvHFk+lWV0W9ha0u7ArxCUM0caX0ckUYpHEAY6JqEIhG5VZfKYN7D6bOaLtuAkcmK/r+xL9BOdgTQKGvdKHaWRCeTiZZAHWrVWW7z6wTM+4ZTK+02npO9OaECMYDsHVdziWxgV+BgQjxATaBESQprnBgAmJcyXAlhYjWBIshAiJhEcQxjjEts4S+CdwvQmAMl4GHwDlwBjzCqRAgEhApbeRIm0wcsxAfokZ18IloLYrwcWtRjA+nN2QkPBtUQkSJexNEjfwFJ/XdYpRBPEFBtCBSBhHqgPM0BOQYEXvmjIhDoF8GMbHnKfAMkB/aTZxDhOZKGz0v1SxYyNKgj3W1aDG+hrmx16Vy2HULe/ewEf5DCv0WyQWFgA8LFxAjehJ8YvowPnZKfOwS9ECIto1oYH4gdZPEfwr9Whj5gfsh9oPwNLHfHntSb20Ye5o4eqyZvZHRQ4zMDoxkZAQ6hbR3QwSkN3P60xB308RPXaiFLOxWM/pvQhPEJMncyyNtiv6STexAqm03HxTqv+9lDhJTnt1f4uNCdJDJH2TlI8HthTJxIFSEI/frnlsiowfZeRPavyIxOTqEn91gRkHwKWTG2b1lxuEk/SQwR+kd0ZSSVHFbKtHeke38yLrxs7v/sUlxgP8jIqfjvihPOxDArIi2Sx9WrQ3BEk0gjSDhQ4FOqIR2VTrlkApIk4NaPaJqnYh9waZynR0VbJEdVG0s2Qktpq4FQHlUc30F53FfxEddGf/1VhnHqhvvCy8qSKwYAHYJLiH3FRi14EMN5oLKMMeUjeWfQ0Il4D3lGHvC2ugB25UqmwF1B6Oumo09gi5fF/2rrZFalq7j6+iLOr/8ZgC746SksYdssXXa92S+lTpq2Z5MSzlXJXa9FxQKAFeypGThJCzqykIfeDxw7Fx7OFWbvNSFltU/0PV9X/Z6s56rFtxrTUY6JrQd+j7StXh9GxmniSfJ67otLq4NRgrs/qla3CwiJLz275zOtMll6ZqQ0/Dwh2GOu+6+xRNsIQ9+so69urpQ1qKJBuROmR7SZauLw/fvzDd1WQzgNbWu7EvZ2E3r7gR4mlrS+6xalsqB5fyIHXR+Oa93F74IJZ7Xm+uGkoiXP1++rMu6BTxlXGCTv+zGuR8dDSk2UIWOJnQUnSuI6fCdTbijcOPcj44K/ehV6wyNeivDXoo24OdHgeZigLrxTaXteT+xOr/cG0r03sM9gscs2SdiOR3fCK5pF/Z9qOV1WcrGqOIgVqfjI6LppWorVXrqCl2/qTfGk3vvOtU3Rv0g7eqsKn5USzyXP0jKjRa18aR7IwuV6zVu9Osd2JIC4Se0zq8WatmqHhSvjHdFpyWYplWyMCul7OAQH/mHZM6YXv2pyVvdUOjCHDPzpdqHZ6GNxMxeHFhEthpUOqckg1Bbghkvphu7qlt315KWVuj8lmqN1yywLk6rzVq1dGvtnCbdpQ0V2nRqMXHanSVyGdTzf2MCueHpPVr4+c5Qxj4dtSmblaTbHhtO8CRkLGH81mF5397h0JTymvLNQcZyuryqi17vTumSrpiw1ph6T/DgreWOOCLDuanLjcVrNrqu2l+zvWFdznKN5Y4yII7XmMPwjC/0Tg3JA9HVbzHMhphxgX3mY+AQmP3xtCs8CHilNdRcBJ0bupe/66JQ1aC8rDD0nEcxbSt/0Ab6BiFw2WkfBOPOt+TlHYacob9U9E5aYIXYUd15unsGM6z2y6dyBLtnvlYcR8ViU7lICvab7xEBoK7o9ncrEPrM12e1IRDu6cq+JBHwN4/nnbiK98IKdSNzbdGVLM0+jplVO1uzDrgvf9nU9qu//fT63R/vfv8ezr//9uzHd3++efXdyzP/KbgNJDEIbnD7MJJ9MScow8+Lpav5BtPBYt8kYml7RX8ji4c/BXSd4z5I7zxIdGoEd4cmju8JND8CmuLUhem//iN/A9g9AGP+v4uxNufyjfr5Q9B3eeQxyPNs4qDn94U+OoJ+Lg22EQ8APHoc4O66+P8S1KmvBOLjyJ51oD5lIwif9TnJNZd3oOrX93vvj+j7AXXjvBs/IaiudzGuMjo00GVvB+ycIdQT+13x4eqtdmeP3/iwhXHXje6v3C/+C1BLBwhSShwOMQcAALEXAABQSwECFAAUAAgICABFbUJNMBXbAO8EAABIJgAAFwAAAAAAAAAAAAAAAAAAAAAAZ2VvZ2VicmFfZGVmYXVsdHMyZC54bWxQSwECFAAUAAgICABFbUJNd2voZOACAADCDAAAFwAAAAAAAAAAAAAAAAA0BQAAZ2VvZ2VicmFfZGVmYXVsdHMzZC54bWxQSwECFAAUAAgICABFbUJNRczeXRoAAAAYAAAAFgAAAAAAAAAAAAAAAABZCAAAZ2VvZ2VicmFfamF2YXNjcmlwdC5qc1BLAQIUABQACAgIAEVtQk1SShwOMQcAALEXAAAMAAAAAAAAAAAAAAAAALcIAABnZW9nZWJyYS54bWxQSwUGAAAAAAQABAAIAQAAIhAAAAAA",
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
						<a class="btn btn-primary" href="<?=base_url()?>assets/atividades_obj/funcao_logaritmica/atividade_funcao_logaritmica_parte1.pdf" target="_blank">Ver atividade
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