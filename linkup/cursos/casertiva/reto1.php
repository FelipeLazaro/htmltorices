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
			<p class="MsoNormal" align="center" style="text-align:center;line-height:150%">&nbsp;</p>
			<p class="MsoNormal" align="center" style="text-align:center;line-height:150%">
			<b>RETO 1: QUIZ CON TIEMPO</b></p>
			<p class="MsoNormal" align="center" style="text-align:center;line-height:150%">&nbsp;</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%"><b>
			PREGUNTAS DE OPCIÓN MÚLTIPLE CONTRA RELOJ</b></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%"><b>
			NIVEL 1: </b></p>
			<p class="MsoListParagraph" style="text-align: justify; text-indent: -18.0pt; line-height: 150%; margin-bottom: .0001pt">
			<span style="font-family: Symbol">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></span>Duración aproximada de la actividad: 12 minutos</p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				Lectura de introducción </li>
				<li class="MsoNormal" style="text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				8 preguntas</li>
				<li class="MsoNormal" style="text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				40 segundos por pregunta </li>
			</ul>
			<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:150%">¡Una vez que inicie la sección de preguntas no podrás 
			detener la actividad! Te sugerimos que calcules tu tiempo y elijas 
			el momento adecuado para realizar este reto.</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<a href="reto1x1.php">Continuar-&gt;</a></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			&nbsp;</p></td>
		</tr>
		</table>
	</td>
  </tr>
</table>

</body>

</html>