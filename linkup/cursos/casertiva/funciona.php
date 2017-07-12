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
			CURSO: COMUNICACIÓN ASERTIVA</b></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%"><b>
			¿CÓMO FUNCIONA?</b></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%"><b>
			<span style="color: red">(Esto puede ser una pequeña presentación 
			animada)</span></b></p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				La sección del rally que estas por comenzar tiene por titulo: “<b>Comunicación 
				Asertiva” </b>y forma parte de la gran carrera hacia una mejor “<b>Calidad 
				de Vida en el Trabajo”.</b></li>
			</ul>
			<p class="MsoNormal" style="margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-align:justify;line-height:150%">&nbsp;</p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				Antes de comenzar tu rally lee la información que se muestra en 
				la pestaña “<b>Información:</b> <b>Comunicación Asertiva”</b>, 
				ésta te ayudará a completar tus pruebas y obtener mejores 
				resultados.</li>
			</ul>
			<p class="MsoNormal" style="margin-left:35.4pt;text-align:justify;line-height:
150%">Esta información estará disponible todo el mes que dure el rally y podrás 
			acceder a ella cuando lo consideres necesario.</p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				El rally esta compuesto por diferentes pruebas, estas se irán 
				desbloqueando cada día. Podrás acceder a una prueba diariamente; 
				si no completas tu actividad del día ésta quedará bloqueada y ya 
				no podrás abonar tus puntos a tu resultado total, sin embargo sí 
				podrás resolverla para no perderte de la información que 
				contiene.</li>
			</ul>
			<p class="MsoNormal" style="margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;text-align:justify;line-height:150%">&nbsp;</p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				La duración estimada de las pruebas se muestra al principio de 
				las mismas, lo que te ayudará a decidir el momento del día en 
				que quieres realizarla. Ninguna prueba excede 20 minutos de 
				duración total.</li>
			</ul>
			<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:150%">&nbsp;</p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				Cada reto al cual te enfrentes en el rally, te hará acreedor a 
				cierto número de puntos, estos se indican al comienzo de la 
				actividad, además podrás obtener puntos extra en cada ejercicio 
				dependiendo de tu desempeño con respecto al de tus compañeros. 
				Tus puntos se sumarán a tu total al terminar el día.</li>
			</ul>
			<p class="MsoListParagraph">&nbsp;</p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				El primer y segundo lugar en cada reto tendrán puntos extra, 
				estos se determinarán por el número de respuestas correctas y el 
				tiempo en que fueron contestadas las preguntas, es decir: si dos 
				personas empatan con 7 respuestas correctas, ganará el primer 
				lugar quien haya contestado en el menor tiempo.</li>
			</ul>
			<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:150%">&nbsp;</p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				Tus puntos se pueden canjear en cualquier momento del rally por 
				premios que están en <b>“La Tiendita”, </b>cuando realices tu 
				compra los puntos desaparecerán de tu total y te reubicarás en 
				la <b>“Tabla de Posiciones”.</b></li>
			</ul>
			<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:150%">&nbsp;</p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				En cualquier momento del rally tendrás la oportunidad de entrar 
				a la “<b>Tabla de Posiciones”</b> y ubicarte con respecto a tus 
				compañeros de trabajo, así como ver el total de tus puntos 
				acumulados hasta el momento.</li>
			</ul>
			<p class="MsoNormal" style="margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-align:justify;line-height:150%">&nbsp;</p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				En “<b>La Tiendita” </b>podrás ver todos los premios y los 
				puntos necesarios para obtenerlos, una vez que alguien compra un 
				premio este se bloquea y no puede ser comprado de nuevo.</li>
			</ul>
			<p class="MsoNormal" style="margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-align:justify;line-height:150%">&nbsp;</p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				Durante el rally aparecerán algunas actividades extra llamadas<b> 
				“Bonos”</b>, las cuales te darán puntos extra, no dejes de 
				participar en los bonos ya que pueden hacer la diferencia para 
				alcanzar el premio que te interesa.</li>
			</ul>
			<p class="MsoListParagraph">&nbsp;</p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				La información que se genere de los bonos la podrás revisar en 
				la sección <b>“Publicaciones”</b>, este espacio tienen la 
				característica especial de que toda la información que ahí 
				encuentres será generada por tus propios compañeros y tú también 
				podrás aportar conocimiento al grupo. Recuerda revisar esta 
				sección a diario, puede hacer la diferencia para alcanzar tus 
				objetivos.</li>
			</ul>
			<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:150%">&nbsp;</p>
			<p class="MsoListParagraphCxSpFirst" style="text-align: justify; text-indent: -18.0pt; line-height: 150%">
			<span style="font-family: Symbol">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></span>Si quieres hacer más aportaciones: reflexiones, 
			investigaciones que realices, comentarios de los temas, etc. podrás 
			hacerlos en cualquier&nbsp; momento en la sección <b>“Comentarios”, </b>
			este espacio es fundamental para el aprendizaje, ya que te permite 
			ver los comentarios de otros compañeros y abrir un espacio de 
			análisis y debate constructivo; además de que refleja el 
			conocimiento que tu equipo de trabajo está generando. Te invitamos a 
			que participes aportando comentarios, así como leyendo los 
			comentarios de tus compañeros.</p>
			<p class="MsoListParagraphCxSpMiddle">&nbsp;</p>
			<p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -18.0pt; line-height: 150%">
			<span style="font-family: Symbol">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></span>En la sección <b>“Preguntar al Facilitador” </b>podrás 
			hacer preguntas sobre el tema y aclarar tus dudas sobre el contenido 
			del curso, el facilitador contestará tus dudas en un tiempo máximo 
			de 24 horas. Tus preguntas con su respuesta se quedarán publicadas 
			en este espacio, para que todos los participantes tengan acceso.</p>
			<p class="MsoListParagraphCxSpMiddle">&nbsp;</p>
			<p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -18.0pt; line-height: 150%">
			<span style="font-family: Symbol">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></span>También podrás encontrar una sección llamada <b>
			“Soporte”</b>, ahí podrás preguntar dudas acerca de cómo funciona el 
			curso y podrás pedir ayuda técnica si alguna función no está 
			funcionando correctamente. Tus preguntas con su respuesta se 
			quedarán publicadas en este espacio, para que todos los 
			participantes tengan acceso.</p>
			<p class="MsoListParagraphCxSpMiddle">&nbsp;</p>
			<p class="MsoListParagraphCxSpLast" style="text-align: justify; text-indent: -18.0pt; line-height: 150%">
			<span style="font-family: Symbol">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></span>Si quieres participar en el rally y no estas en la 
			oficina o no tienes&nbsp; a la mano alguna computadora, ¡no te 
			preocupes!, puedes acceder desde cualquier teléfono móvil 
			inteligente, en el sitio <span style="color: #FF0000">linkup.b-in.com.mx/cursos</span>, 
			así nunca te perderás de la información ni de la oportunidad de 
			sumar puntos.<span style="color:red"> </span></p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				¡Empieza tu rally! y Mucha suerte.</li>
			</ul>
			<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:150%"><span style="color: red">Además podemos agregar en 
			esta misma sección un video donde se explique como funciona el curso 
			de forma oral.</span></p>
			<p>&nbsp;</td>
		</tr>
		</table>
	</td>
  </tr>
</table>

</body>

</html>