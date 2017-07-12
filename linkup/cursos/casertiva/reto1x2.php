<?
//  Autentificator
//  Gestión de Usuarios PHP+Mysql+sesiones
//  by Pedro Noves V. (Cluster)
//  clus@hotpop.com
// ------------------------------------------
require("aut_verifica.inc.php");
$nivel_acceso=15; // Nivel de acceso para esta página.
// se chequea si el usuario tiene un nivel inferior
// al del nivel de acceso definido para esta página.
// Si no es correcto, se mada a la página que lo llamo con
// la variable de $error_login definida con el nº de error segun el array de
// aut_mensaje_error.inc.php
if ($nivel_acceso <= $_SESSION['usuario_nivel']){
header ("Location: $redir?error_login=5");
exit;
}

if(($_SESSION['usuario_login'] == "Admin")){$usrwellcome = "o WEB MASTER";}
if(($_SESSION['usuario_login'] == "edgar")){$usrwellcome = "o Lic. Edgar Torices Vite  -     NISSAN";}
if(($_SESSION['usuario_login'] == "alvaro")){$usrwellcome = "o Lic. Alvaro Cardoso Perales  -      RENAULT";}
if(($_SESSION['usuario_login'] == "alumno")){$usrwellcome = "o ALUMNO";}
?>

<head>
<meta http-equiv="Content-Language" content="es-mx">
<meta name="GENERATOR" content="Microsoft FrontPage 6.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>CAPACITACION EN LINEA -  B-IN</title>
<style>
<!--
 li.MsoNormal
	{mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	}
-->
</style>
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="86%" id="AutoNumber1">
  <tr>
    <td width="100%">
    <p align="left">
    <font color="#000066">
	<br>
	&nbsp;</font></p>
	<table border="0" cellSpacing="0" cellPadding="0" width="87%" align="center">
		<tr>
			<td height="30" vAlign="top">
			<p class="MsoNormal" align="center" style="text-align:center;line-height:150%">
			<b>RETO 1: PREGUNTAS CON TIEMPO</b></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%"><b>
			1. Cuál de las siguientes afirmaciones es correcta:</b></p>
			<p class="MsoNormal" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-left: 36.0pt; margin-right: 0cm; margin-top: 0cm; margin-bottom: .0001pt">
			<b>a)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>La realidad rige la comunicación, la comunicación es 
			consecuencia del medio.</p>
			<p class="MsoNormal" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-left: 36.0pt; margin-right: 0cm; margin-top: 0cm; margin-bottom: .0001pt">
			<b>b)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Si faltase la comunicación, la realidad no se vería 
			afectada; simplemente no se generaría más información.</p>
			<p class="MsoNormal" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-left: 36.0pt; margin-right: 0cm; margin-top: 0cm; margin-bottom: .0001pt">
			<b>c)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>La comunicación no es algo que suceda en la realidad, 
			sino que la realidad se construye en la comunicación</p>
			<p class="MsoNormal" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-left: 36.0pt; margin-right: 0cm; margin-top: 0cm; margin-bottom: .0001pt">
			<b>d)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>La comunicación permite la interacción y los flujos de 
			información, por lo tanto si no hay información que transmitir, la 
			comunicación desaparece.</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">&nbsp;</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%"><b>
			2. En las relaciones interpersonales el problema de la 
			intencionalidad provoca que:</b></p>
			<p class="MsoNormal" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-left: 36.0pt; margin-right: 0cm; margin-top: 0cm; margin-bottom: .0001pt">
			<b>a)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>No seamos capaces de entender los sentimientos de las 
			personas, ni su condición ante la situación que viven actualmente.</p>
			<p class="MsoNormal" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-left: 36.0pt; margin-right: 0cm; margin-top: 0cm; margin-bottom: .0001pt">
			<b>b)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Atribuimos nuestras intenciones a los demás.</p>
			<p class="MsoNormal" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-left: 36.0pt; margin-right: 0cm; margin-top: 0cm; margin-bottom: .0001pt">
			<b>c)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Entendamos las razones por las cuales actúan los demás</p>
			<p class="MsoNormal" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-left: 36.0pt; margin-right: 0cm; margin-top: 0cm; margin-bottom: .0001pt">
			<b>d)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Se obstaculice la comunicación al atribuir intenciones 
			equivocas a las acciones concretas de los demás.</p>
			<p class="MsoNormal" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-left: 36.0pt; margin-right: 0cm; margin-top: 0cm; margin-bottom: .0001pt">
			<b>e)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Ninguna de las anteriores</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">&nbsp;</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%"><b>
			3. Las dos primeras interferencias de la comunicación que se 
			mencionaron son:</b></p>
			<p class="MsoNormal" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-left: 36.0pt; margin-right: 0cm; margin-top: 0cm; margin-bottom: .0001pt">
			<b>a)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Intencionalidad y Diferenciación</p>
			<p class="MsoNormal" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-left: 36.0pt; margin-right: 0cm; margin-top: 0cm; margin-bottom: .0001pt">
			<b>b)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Intencionalidad y Diferencias, Similitudes</p>
			<p class="MsoNormal" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-left: 36.0pt; margin-right: 0cm; margin-top: 0cm; margin-bottom: .0001pt">
			<b>c)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Intencionalidad y Variabilidad, Similitudes</p>
			<p class="MsoNormal" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-left: 36.0pt; margin-right: 0cm; margin-top: 0cm; margin-bottom: .0001pt">
			<b>d)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Intencionalidad y Diferencias, Variabilidad</p>
			<p class="MsoNormal" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-left: 36.0pt; margin-right: 0cm; margin-top: 0cm; margin-bottom: .0001pt">
			<b>e)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Ninguna de las anteriores</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">&nbsp;</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%"><b>
			4. Cual de las siguientes afirmaciones es correcta:</b></p>
			<p class="MsoListParagraph" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>a)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>La comunicación se vería beneficiada si analizáramos los 
			motivos que mueven las acciones de los demás y los comparáramos con 
			los nuestros.</p>
			<p class="MsoNormal" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-left: 36.0pt; margin-right: 0cm; margin-top: 0cm; margin-bottom: .0001pt">
			<b>b)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>La comunicación se vería afectada si tomáramos en cuenta 
			las diferencias que hay en los otros con respecto a nosotros mismos 
			y nuestro contexto.</p>
			<p class="MsoNormal" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-left: 36.0pt; margin-right: 0cm; margin-top: 0cm; margin-bottom: .0001pt">
			<b>c)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Mejoraríamos la comunicación si viéramos las similitudes 
			que tenemos con nuestro interlocutor.</p>
			<p class="MsoNormal" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-left: 36.0pt; margin-right: 0cm; margin-top: 0cm; margin-bottom: .0001pt">
			<b>d)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>En ocasiones las intenciones de los otros son las mismas 
			que las nuestras, esto es importante tenerlo en cuenta para una 
			buena comunicación.</p>
			<p class="MsoNormal" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-left: 36.0pt; margin-right: 0cm; margin-top: 0cm; margin-bottom: .0001pt">
			<b>e)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Las respuestas b y c.</p>
			<p class="MsoNormal" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-left: 36.0pt; margin-right: 0cm; margin-top: 0cm; margin-bottom: .0001pt">
			<b>f)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Ninguna de las anteriores.</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">&nbsp;</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%"><b>
			5. Cuál de las siguientes frases refleja el principio de 
			intencionalidad:</b></p>
			<p class="MsoListParagraphCxSpFirst" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>a)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>&nbsp;Mi referente para entender tus acciones únicamente 
			pueden ser mis intenciones, ya que es la única referencia que 
			conozco.</p>
			<p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>b)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Cuando actuó de cierta forma es por que tengo algo que me 
			motiva a hacerlo, todas mis acciones tienen un motivo, las 
			consecuencias dependen de esos motivos.</p>
			<p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>c)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Atribuir mis intenciones a tus acciones es un problema de 
			comunicación, y un error común en las relaciones cotidianas.</p>
			<p class="MsoListParagraphCxSpLast" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>d)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Pretender que todas las personas tienen los mismos 
			referentes y sentimientos que nosotros es un error común que 
			obstaculiza nuestras relaciones</p>
			<p class="MsoNormal" style="margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-align:justify;line-height:150%">&nbsp;</p>
			<p class="MsoNormal" style="margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-align:justify;line-height:150%">&nbsp;</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%"><b>
			6. Cuál de las siguientes frases refleja el principio de 
			Diferencias, Similitudes:</b></p>
			<p class="MsoListParagraphCxSpFirst" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>a)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Las personas tienden a reaccionar de la misma forma ante 
			estímulos similares, sin importar que las circunstancias sean 
			distintas.</p>
			<p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -18.0pt; line-height: 150%">
			<b><span style="color: black">b)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></span></b><span style="color: black">Las circunstancias 
			influyen en nosotros y el momento que vivimos también nos influye, 
			por lo que nuestras reacciones se adaptan a las condiciones.</span></p>
			<p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>c)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Debemos tener en cuenta qué momento está viviendo la otra 
			persona para poder entender sus reacciones y sus sentimientos.</p>
			<p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>d)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>El medio nos determina.</p>
			<p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>e)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Respuestas b y c.</p>
			<p class="MsoListParagraphCxSpLast" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>f)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Ninguna de las anteriores.</p>
			<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:150%">&nbsp;</p>
			<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:150%"><b>7. Cuál de las siguientes afirmaciones es correcta:</b></p>
			<p class="MsoListParagraphCxSpFirst" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>a)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>La expresión física de las emociones se manifiesta de la 
			misma forma en todas las personas.</p>
			<p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>b)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>La intensidad de las emociones depende del momento en que 
			se encuentra la persona.</p>
			<p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>c)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Cada individuo tiene diferentes formas de experimentar 
			las emociones, lo que provoca que la duración y latencia de las 
			mismas sea tan diversa como individuos existen.</p>
			<p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>d)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Todas las anteriores.</p>
			<p class="MsoListParagraphCxSpLast" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>e)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Respuestas a y c. </p>
			<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:150%">&nbsp;</p>
			<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:150%"><b>8. Cual es el significado del principio de los 
			diferentes estilos afectivos:</b></p>
			<p class="MsoListParagraphCxSpFirst" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>a)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Cada persona reacciona distinto ante los estímulos del 
			medio.</p>
			<p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>b)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Cada persona tiene ritmos de respuesta distintos frente a 
			las emociones y es un error pensar que sus tiempos son iguales a los 
			nuestros.</p>
			<p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>c)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Nuestras relaciones se ven afectadas por no tomar en 
			cuenta el momento por el que pasan las personas, y como eso afecta 
			nuestras relaciones.</p>
			<p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>d)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Las manifestación física de las emociones se presenta de 
			igual forma entre todos los hombres</p>
			<p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>e)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Todas las anteriores.</p>
			<p class="MsoListParagraphCxSpLast" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<b>f)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b>Ninguna de las anteriores</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<a href="reto1x2.php">Continuar-&gt;</a></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			&nbsp;</p></td>
		</tr>
		</table>
	</td>
  </tr>
</table>

</body>

</html>