<meta charset="utf-8">

<!-- Bootstrap core CSS -->
<link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?=base_url()?>assets/css/modern-business.css" rel="stylesheet">
<!--DEFINE AS FONTES USADA NAS PERGUNTAS E RESPOSTAS-->
<style type=text/css>
#center{font-family:arial;font-size:15pt;color:#1E90FF;}
#pergunta{font-family:arial;font-size:15pt;color:black;text-align: justify;}
#resposta{background-color:#fefefe;font-family:arial;font-size:8pt;color:#696969;}
#input{border:2px solid #1E90FF;background-color:white;font-family:arial;font-size:15pt;border-radius:7px;color:black;}
#normal{font-family:arial;font-size:15pt;color:BLACK;}
input{font-family:arial;font-size:30px;color:#1c1c1c; border:#1E90FF}
#alink{text-decoration:none;background-color:#1E90FF;color:white;font-size:20pt;border-radius:5px;}
#alink:hover{background-color: white;color:#1E90FF}
h1{font-family:arial;font-size:11pt;color:black;}
</style>

<script language="JavaScript"> 
/* início do código  */
<!-- 
var pontos=0; 
function reponse(form) { 
for (var i=0;i<form.length;i++){ 
 if (form[i].checked){ 
  break 
 } 
} 
var answer="" 
if (i<form.length){ 
 answer = form[i].value 
} 
return answer; 
} 

function solution(form) { 
/* variável para cada pergunta */
var points=0;var rep="";var comment="";var resposta1="";var resposta2="";var resposta3="";var onome=""

/* valor de pontos para as questões */
if (reponse(form.question1)=="A") {pontos+=1} 
if (reponse(form.question2)=="B") {pontos+=1} 
if (reponse(form.question3)=="B") {pontos+=1} 

/* cada mensagem vai de acordo com o input marcado para resposta */

/* mensagem para questão 1 */
if (reponse(form.question1)=="") {resposta1="<font color=#cccccc>não respondida</font>"} 
if (reponse(form.question1)=="A") {resposta1="<font color=#0099cc>correta</font>"} 
if (reponse(form.question1)=="B") {resposta1="<font color=#cccccc>incorreta</font>"}
if (reponse(form.question1)=="C") {resposta1="<font color=#cccccc>incorreta</font>"}

/* mensagem para questão 2 */
if (reponse(form.question2)=="") {resposta2="<font color=#cccccc>não respondida</font>"} 
if (reponse(form.question2)=="A") {resposta2="<font color=#cccccc>incorreta</font>"} 
if (reponse(form.question2)=="B") {resposta2="<font color=#0099cc>correta</font>"}
if (reponse(form.question2)=="C") {resposta2="<font color=#cccccc>incorreta</font>"}

/* mensagem para questão 3 */
if (reponse(form.question3)=="") {resposta3="<font color=#cccccc>não respondida</font>"} 
if (reponse(form.question3)=="A") {resposta3="<font color=#cccccc>incorreta</font>"} 
if (reponse(form.question3)=="B") {resposta3="<font color=#0099cc>correta</font>"}
if (reponse(form.question3)=="C") {resposta3="<font color=#cccccc>incorreta</font>"}

/* aqui é exibido a mensagem de acordo com o ponto marcado */
if (pontos==0) {comment="você não fez pontos, tente novamente"}
if (pontos==1) {comment="você fez um ponto, continue assim"}
if (pontos==2) {comment="você fez 2 pontos, está quase lá"}
if (pontos==3) {comment="excelente! você acertou todas!<br><br><a href=\"javascript:;\" onClick=\"window.print();return false\">Imprimir este certificado</a><br>Veja o seu certificado abaixo:<br><br><img src=img_certificado.gif border=0>"}

/* aqui exibo a porcentagem de acordo com o ponto  */
if (pontos==0) {porcentagem="0%"}
if (pontos==1) {porcentagem="33%"}
if (pontos==2) {porcentagem="66%"}
if (pontos==3) {porcentagem="100%"}

/* aqui inicio o código mostrado na nova janela */
chaine='' 
+'<head><title>Resultado</title>'
+'<style type=text/css>a{font-family:arial;font-size:8pt;color:#696969;text-decoration:none;}#texto{font-family:verdana,arial;font-size:8pt;color:#696969;}#textos{font-family:verdana,arial;font-size:10px;color:#c7c7c7;}input{border:1px solid #f8f8f8;background-color:fefefe;font-family:arial;font-size:8pt;color:#1c1c1c;}#resultado{font-family:arial;font-size:8pt;color:#696969;}</style>'
+'</head>'
+'<center><font id=texto>Você atingiu um total de <font color=#0099cc><b>'+ pontos +'</b></font> pontos, acertando '+ porcentagem +' das questões.<br><br><font color=#696969>'+comment+'<BR>' 

+'<br><center><font id=texto>'+ formmail.onome.value +' veja abaixo o resumo das questões:</font></center><br>'

+'<table border=0 cellpading=3 cellspacing=3 style="border:1px solid #f8f8f8;background-color:#ffffff;" width="150">'
+"<tr><td><font id=textos>1)</td><td><font id=resultado>"+ resposta1 +"</font></td></tr>"
+"<tr><td><font id=textos>2)</td><td><font id=resultado>"+ resposta2 +"</font></td></tr>"
+"<tr><td><font id=textos>3)</td><td><font id=resultado>"+ resposta3 +"</font></td></tr>"
+"</table></form>"
+'<a href="<?=base_url()?>Geral/javascript:void(0)" onclick="javascript:window.close()">FECHAR</a>'
+'</CENTER></BODY></HTML>' 
solu=open(); 
solu.document.write(chaine) 
} 
//--> 
</script> 
<title>Questionário</title> 
<script>
function vai() {
location.reload()
}
</script>

<!--ABAIXO SEGUE O FORMULÁRIO-->

<form name=formmail>
<center><font id=center>FUNÇÃO AFIM</font></center>
<center><font id=normal>OBJETIVO: Estudar o comportamento do gráfico da função 	&#131;: &real;&rarr;&real; definida por &#131;(x)=ax+b, a&ne;0, 
a partir da variação dos coeficientes a (coeficiente angular) e b (coeficiente linear).</font></center><br/>
<center><font id=center>ATIVIDADE EXPLORATÓRIA<br/>
<center><font id=normal>Utilize os controles deslizantes (indicados de azul) para alterar o valor dos
coeficientes a e b e responda:</font></center><br/>
<div align=center> 
<table border=0 cellpading=3 cellspacing=3 style="border:4px solid #1E90FF ;border-radius:15px;;background-color:white;" width=900px>
<tr><td>

<font id=pergunta> 
1) Se a=0, em que posição a reta se encontra?</font>&nbsp;</font><input type="text" font size="9" name="onome" maxlength="11" value=""  id=input><font color=#0099cc face=verdana size=3><b>&nbsp;</b>
 <font id=pergunta>A que tipo de função essa reta faz
referência?</font>
&nbsp;</font><input type="text" font size="12" name="onome" maxlength="15" value=""  id=input><font color=#0099cc face=verdana size=3><b>&nbsp;</b><br>
<font id=pergunta><br/>
2) Se a&ne;0, em que posição a reta se encontra?</font>&nbsp;</font><input type="text" font size="12" name="onome" maxlength="11" value="" id=input><font color=#0099cc face=verdana size=3><b>&nbsp;</b>
<font id=pergunta>A que tipo de função a reta faz
referência?</font>
&nbsp;</font><input type="text" font size="12" name="onome" maxlength="15" value="" id=input><font color=#0099cc face=verdana size=3><b>&nbsp;</b><br>
<div class="control-group form-group">
  <div class="controls">
	<label><font id=pergunta><br/>3) Com base na variação do coeficiente angular "a", que conclusão podemos tirar a
	respeito do crescimento e decrescimento da reta? Justifique.</font><br/></label>
	<textarea rows="5" cols="80" class="form-control" id="input" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
  </div>
</div>

<div class="control-group form-group">
  <div class="controls">
	<label><font id=pergunta><br/>4) Que relação existe entre um dos coeficientes estudados e o ponto de interseção da
	reta com o das ordenadas? Justifique.</font><br/></label>
	<textarea rows="5" cols="80" class="form-control" id="input" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
  </div>
</div>

<div class="control-group form-group">
  <div class="controls">
	<label><font id=pergunta><br/>5) O ponto de interseção da reta com o eixo das abscissas é chamado de raiz da função.
	Encontre uma relação entre os coeficientes da função e sua raiz.</font><br/></label>
	<textarea rows="5" cols="80" class="form-control" id="input" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
  </div>
</div>
</table> <br/>
<h1>Atividade elaborada pelo prof. Fredy Coelho Rodrigues – IFSULDEMINAS, Campus Passos.<h1>
<center><a id=alink href=# class="btn btn-primary" <font id=confira>Confira suas respostas</font></a></center>
</form>
