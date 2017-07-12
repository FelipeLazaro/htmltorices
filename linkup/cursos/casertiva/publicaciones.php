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
			<font color="#FF3300">PUBLICACIONES </font><span style="color: black">&nbsp; </span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<b>Nota: </b>En esta sección puedes subir tus publicaciones por cada 
			reto (solo una aportación por usuario y por reto), también podrás 
			ver las aportaciones de tus compañeros del curso, recuerda que sumas 
			puntos cuando lees estas aportaciones, dichos puntos solo estarán 
			disponibles 24hrs a partir de la publicación.</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			Para acceder a las publicaciones de tus compañeros solo haz clic en 
			su nombre .</p>
			<table border="1" width="100%">
				<tr>
					<td width="343"><font color="#FF3300">PUBLICACIONES RETO 1</font></td>
					<td>
					<p align="right"><a href="subirreto1.php">subir mi 
					aportación</a></td>
				</tr>
				<tr>
					<td colspan="2">x</td>
				</tr>
			</table>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			&nbsp;</p>
			<table border="1" width="100%">
				<tr>
					<td width="343"><font color="#FF3300">PUBLICACIONES RETO 2</font></td>
					<td>
					<p align="right"><a href="subirreto2.php">subir mi 
					aportación</a></td>
				</tr>
				<tr>
					<td colspan="2">X</td>
				</tr>
			</table>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			&nbsp;</p>
			<table border="1" width="100%">
				<tr>
					<td width="343"><font color="#FF3300">PUBLICACIONES RETO 3</font></td>
					<td>
					<p align="right"><a href="subirreto3.php">subir mi 
					aportación</a></td>
				</tr>
				<tr>
					<td colspan="2">X</td>
				</tr>
			</table>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			&nbsp;</p>
			</td>
		</tr>
		</table>
	</td>
  </tr>
</table>

</body>

</html>