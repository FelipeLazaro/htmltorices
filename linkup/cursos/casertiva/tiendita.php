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
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<font color="#FF3300">TIENDITA </font><span style="color: black">&nbsp; </span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<b>A continuación aparece una lista los premios a canjear y su 
			disponibilidad o no disponibilidad indicando quien lo adquirió.</b></p>
			<table border="1" width="100%">
				<tr>
					<td width="98%" colspan="4"><font color="#FF3300">Nombre del 
					participante &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					Tienes Puntos de canje<br>
&nbsp;</font></td>
				</tr>
				<tr>
					<td width="25%" align="center">Premio</td>
					<td width="25%" align="center">Descripción</td>
					<td width="25%" align="center">Valor</td>
					<td width="25%" align="center">Disponibilidad</td>
				</tr>
				<tr>
					<td width="25%" align="center">Ipod Touch<br>
					<img border="0" src="images/ipodtouch.png" width="256" height="256"></td>
					<td width="25%" align="center">
					<p class="MsoNormal" style="margin-left: 18.0pt">
					<span lang="EN-US" style="color: black">8GB</span></p>
					<p class="MsoNormal" style="margin-left: 18.0pt">
					<span lang="EN-US" style="color: black">FaceTime</span></p>
					<p class="MsoNormal" style="margin-left: 18.0pt">
					<span lang="EN-US" style="color: black">Retina display</span></p>
					<p class="MsoNormal" style="margin-left: 18.0pt">
					<span lang="EN-US" style="color: black">HD video recording</span></p>
					<span lang="EN-US" style="font-size: 11.0pt; line-height: 115%; font-family: Calibri,sans-serif; color: black">
					Game Center</span></td>
					<td width="25%" align="center">
					<span style="font-size: 20.0pt; line-height: 115%; font-family: Calibri,sans-serif">
					2,500 PUNTOS</span></td>
					<td width="25%" align="center"><a href="disponible.php">
					Disponible</a></td>
				</tr>
				<tr>
					<td width="25%" align="center">
					<img border="0" src="images/free.gif" width="103" height="105"></td>
					<td width="25%" align="center">
					<span style="font-size: 11.0pt; line-height: 115%; font-family: Calibri,sans-serif">
					Podrás tomar un día completo libre.</span></td>
					<td width="25%" align="center">
					<span style="font-size: 20.0pt; line-height: 115%; font-family: Calibri,sans-serif">
					2,000 PUNTOS</span></td>
					<td width="25%" align="center"><a href="disponible.php">
					Disponible</a></td>
				</tr>
				<tr>
					<td width="25%" align="center">
					<img border="0" src="images/free.gif" width="103" height="105"></td>
					<td width="25%" align="center">
					<span style="font-size: 11.0pt; line-height: 115%; font-family: Calibri,sans-serif">
					Cualquier día de la semana podrás salir de trabajar a la 
					hora de la comida!</span></td>
					<td width="25%" align="center">
					<span style="font-family: Calibri,sans-serif; font-size: 20pt">
					1</span><span style="font-size: 20.0pt; line-height: 115%; font-family: Calibri,sans-serif">,500 
					PUNTOS</span></td>
					<td width="25%" align="center"><a href="disponible.php">
					Disponible</a></td>
				</tr>
				<tr>
					<td width="25%" align="center">
					<img border="0" src="images/free.gif" width="103" height="105"></td>
					<td width="25%" align="center">
					<span style="font-size: 11.0pt; line-height: 115%; font-family: Calibri,sans-serif">
					Podrás escoger algún viernes en el que no regreses a 
					trabajar después de la hora de comida</span></td>
					<td width="25%" align="center">
					<span style="font-family: Calibri,sans-serif; font-size: 20pt">
					1</span><span style="font-size: 20.0pt; line-height: 115%; font-family: Calibri,sans-serif">,300 
					PUNTOS</span></td>
					<td width="25%" align="center"><a href="disponible.php">
					Disponible</a></td>
				</tr>
				<tr>
					<td width="25%" align="center">
					<span style="font-size: 11.0pt; line-height: 115%; font-family: Calibri,sans-serif">
					Ipod Shuffle<br>
					<img border="0" src="images/ipods.jpg" width="135" height="160"></span></td>
					<td width="25%" align="center">
					<p class="MsoNormal" style="margin-left: 18.0pt">
					<span lang="EN-US" style="color: black">8GB</span></p>
					<p class="MsoNormal" style="margin-left: 18.0pt">
					<span lang="EN-US" style="color: black">FaceTime</span></p>
					<p class="MsoNormal" style="margin-left: 18.0pt">
					<span lang="EN-US" style="color: black">Retina display</span></p>
					<p class="MsoNormal" style="margin-left: 18.0pt">
					<span lang="EN-US" style="color: black">HD video recording</span></p>
					<span lang="EN-US" style="font-size: 11.0pt; line-height: 115%; font-family: Calibri,sans-serif; color: black">
					Game Center</span></td>
					<td width="25%" align="center">
					<span style="font-family: Calibri,sans-serif; font-size: 20pt">&nbsp;&nbsp;&nbsp; 
					800</span><span style="font-size: 20.0pt; line-height: 115%; font-family: Calibri,sans-serif"> 
					PUNTOS</span></td>
					<td width="25%" align="center"><a href="disponible.php">
					Disponible</a></td>
				</tr>
				<tr>
					<td width="25%" align="center">
					<span style="font-size: 11.0pt; line-height: 115%; font-family: Calibri,sans-serif">
					Ipod Nano<br>
					<img border="0" src="images/ipodnano.jpg" width="160" height="153"></span></td>
					<td width="25%" align="center">
					<p class="MsoNormal" style="margin-left: 18.0pt">
					<span lang="EN-US" style="color: black">8GB</span></p>
					<p class="MsoNormal" style="margin-left: 18.0pt">
					<span lang="EN-US" style="color: black">FaceTime</span></p>
					<p class="MsoNormal" style="margin-left: 18.0pt">
					<span lang="EN-US" style="color: black">Retina display</span></p>
					<p class="MsoNormal" style="margin-left: 18.0pt">
					<span lang="EN-US" style="color: black">HD video recording</span></p>
					<span lang="EN-US" style="font-size: 11.0pt; line-height: 115%; font-family: Calibri,sans-serif; color: black">
					Game Center</span></td>
					<td width="25%" align="center">
					<span style="font-size: 20.0pt; line-height: 115%; font-family: Calibri,sans-serif">
					1,000 PUNTOS</span></td>
					<td width="25%" align="center"><a href="disponible.php">
					Disponible</a></td>
				</tr>
				<tr>
					<td width="25%" align="center">Horno de Microondas LG<br>
					<img border="0" src="images/microondas.jpg" width="190" height="190"></td>
					<td width="25%" align="center">800W plata 0.8 pies <br>
					10 niveles de potencia LED </td>
					<td width="25%" align="center">
					<span style="font-family: Calibri,sans-serif; font-size: 20pt">&nbsp;&nbsp;&nbsp; 
					900</span><span style="font-size: 20.0pt; line-height: 115%; font-family: Calibri,sans-serif"> 
					PUNTOS</span></td>
					<td width="25%" align="center">No disponible<br>
					<br>
					Ganador: Edgar Torices Vite</td>
				</tr>
				<tr>
					<td width="25%" align="center">
					<img border="0" src="images/dolce.gif" width="128" height="128"></td>
					<td width="25%" align="center">
					<span style="font-size: 11.0pt; line-height: 115%; font-family: Calibri,sans-serif">
					Melody II Premium</span></td>
					<td width="25%" align="center">
					<span style="font-family: Calibri,sans-serif; font-size: 20pt">&nbsp;&nbsp;&nbsp; 
					900</span><span style="font-size: 20.0pt; line-height: 115%; font-family: Calibri,sans-serif"> 
					PUNTOS</span></td>
					<td width="25%" align="center"><a href="disponible.php">
					Disponible</a></td>
				</tr>
				</table>
			</td>
		</tr>
		</table>
	</td>
  </tr>
</table>

</body>

</html>