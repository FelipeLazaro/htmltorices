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
			<p class="MsoNormal" style="text-align:justify;line-height:150%"><b>
			LECTURA</b></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			Partimos de la premisa de que no existe una buena o mala 
			comunicación, mucha o poca; sino que ¡Todo es Comunicación! 
			Actividad o inactividad, palabras o silencio, tienen siempre un 
			valor de mensaje, influyen sobre los demás, quienes a su vez 
			reaccionan frente a los mensajes y comunican de vuelta.</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">“No 
			se puede no comunicar”, los mensajes nunca dejan de circular. 
			Podríamos decir que la comunicación no es algo que suceda en la 
			realidad, sino que la realidad se construye en la comunicación. 
			Todas nuestras experiencias e interacciones suceden en la 
			comunicación, esto es real incluso en la comunicación intrapersonal, 
			aquella que tenemos con nosotros mismos, es un diálogo interno y 
			depende de cómo lo manejemos, el impacto que tiene. </p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">Si 
			desapareciera la comunicación no habría un referente para explicar 
			la realidad, no existiría consenso ni entendimiento. La comunicación 
			es una comunión, nos mantiene unidos por que nos relaciona. </p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">La comunicación no es fácil o difícil, es 
			simplemente comunicación; somos las personas las que podemos 
			agilizar o complicar el proceso comunicativo.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Hay muchos factores que pueden 
			obstaculizar la comunicación, pero cuando se trata de los problemas 
			que interfieren en las relaciones, es decir en la comunicación que 
			depende de las personas y su forma de abordar los problemas, 
			mencionaremos los principios de Xavier Guix, como las principales 
			interferencias de la comunicación en las relaciones interpersonales:</span></p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="color: black; text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				<b>Principio de la Intencionalidad:</b></li>
			</ul>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">No hacemos nada por que sí. Lo hacemos 
			por que tenemos intenciones, sean conscientes o inconscientes. 
			Cuando un sujeto realiza acciones, van acompañadas de la captación 
			de las propias intenciones que impulsaron el hacerlas. La acción, 
			pues, queda asociada a la intención que la puso en marcha.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">El problema surge cuando asociamos 
			nuestras intenciones a las acciones de los demás: Si yo sé que 
			cuando hago X es por Y, entonces cuando tu haces Y seguro que es por 
			X.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Debemos de hacer conciencia de que no 
			podemos estar en la mente de los demás, es un error que al observar 
			las acciones de otros les atribuyamos nuestras intenciones.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Un ejemplo puede ser:</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Acción: Llegué tarde a una reunión 
			organizada por mi pareja.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Intención: Perder tiempo por que la gente 
			que asiste no me cae bien y no quiero pasar mucho tiempo con ellos.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Consecuencia: Si tiempo después yo 
			organizo una comida con mis amigos, y mi pareja llega tarde, 
			probablemente estaré molesto creyendo que su acción comunica su 
			falta de interés hacia mis amigos; sin embargo, tal vez ella tuvo 
			algún otro problema por el cual no llegó a tiempo, que no tiene nada 
			que ver con esa intención, que en realidad es mía. Este problema de 
			intencionalidad afecta constantemente nuestras relaciones.</span></p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="color: black; text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				<b>Diferencias y Similitudes:</b></li>
			</ul>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">El hombre es altamente impredecible en 
			sus respuestas, puede cambiar en sus reacciones y elecciones, ante 
			situaciones aparentemente idénticas.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Tendemos a presuponer que las personas no 
			cambian, sin embargo el cambio es una constante en el mundo y en los 
			individuos, las situaciones nunca son idénticas y el cerebro que 
			elige tampoco es el mismo, ya que constantemente aprendemos, cambian 
			nuestras percepciones y deseos.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Las circunstancias influyen en nosotros y 
			el momento que vivimos también nos determina, por lo que nuestras 
			reacciones se adaptan a las condiciones.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Hay que entender que cada vez que estamos 
			con alguien debemos hacer un esfuerzo por entenderlo&nbsp; en ese 
			momento, en el presente. ¿Qué siente ahora y aquí? ¿Cómo se 
			desarrolla nuestra relación ahora y aquí? Son preguntas que en 
			definitiva ayudan al relacionarnos con otros, sin embargo olvidamos 
			que preguntarnos acerca del “otro” es fundamental para una buena 
			comunicación.</span></p>
			<p class="MsoListParagraph" style="text-align: justify; text-indent: -18.0pt; line-height: 150%">
			<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></span><b><span style="color: black">Principio de diferentes 
			estilos afectivos</span></b></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">La expresión de las emociones es 
			universal, en cuanto a la forma en que reacciona el cuerpo y el 
			cerebro, por ejemplo: la reacción del cuerpo ante la ira, es un 
			incremento en el ritmo cardiaco, ante el miedo es que palidecemos y 
			hay mayor flujo de sangre hacia las extremidades lo cual nos prepara 
			para huir, con la tristeza disminuye el ritmo cardiaco y hay menos 
			producción de cerotonina en el cerebro. Sin embargo la intensidad y 
			duración de las emociones varía mucho de una persona a otra.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Este punto es fundamental para las 
			relaciones, tendemos a creer que las emociones funcionan igual en 
			los demás que en nosotros mismos, como sucede con las intenciones, 
			ya que es la referencia más real y cercana que encontramos; sin 
			embargo esto provoca una infinidad de problemas. </span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Muchos conflictos y malentendidos se 
			basan en la incomprensión del ritmo en que cada uno necesita vivir 
			sus emociones. Un estallido de ira puede tener consecuencias de 
			larga duración en una persona, que provoquen que esté por más tiempo 
			propenso a enojarse por algo insignificante; mientras que otra 
			persona puede sobreponerse muy rápido a la emoción, controlarla y 
			dejarla pasar.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Asimilar que existen distintos ritmos y 
			estilos en el manejo de emociones es el punto de partida para una 
			buena comunicación, sin conciencia de esta realidad es muy difícil 
			entender las reacciones de los demás; por otro lado aprender a 
			respetar la intensidad y ritmo de las emociones ajenas es el segundo 
			paso fundamental para lograr una buena comunicación.</span></p>
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