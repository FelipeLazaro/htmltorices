<?
//  Autentificator
//  Gesti�n de Usuarios PHP+Mysql+sesiones
//  by Pedro Noves V. (Cluster)
//  clus@hotpop.com
// ------------------------------------------
require("aut_verifica.inc.php");
$nivel_acceso=15; // Nivel de acceso para esta p�gina.
// se chequea si el usuario tiene un nivel inferior
// al del nivel de acceso definido para esta p�gina.
// Si no es correcto, se mada a la p�gina que lo llamo con
// la variable de $error_login definida con el n� de error segun el array de
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
div.Section1
	{page:Section1;}
span.SpellE
	{}
 li.MsoNormal
	{mso-style-parent:"";
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman";
	margin-left:0cm; margin-right:0cm; margin-top:0cm}
-->
</style>
</head>

<body topmargin="0">

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="86%" id="AutoNumber1">
  <tr>
    <td width="100%">
    <p align="left">
    <font color="#000066">
	<img border="0" src="images/bin2.jpg" width="180" height="187" align="left"><br>
	<br>
	<br>
	<br>
	<br>
	</font><font face="Times New Roman" size="6" color="#000066">TEMARIO DE 
	AUTOCAD RETRIV<br> 
    </font><font color="#000066">
	<br>
	&nbsp;</font></p>
	<div class="Section1">
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Introducci�n</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Ajustes antes de comenzar a dibujar</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Limites de Dibujo</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Zoom Todo</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rejilla</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Forzcursor</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Unidades</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Sistemas de coordenadas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		M�todos de introducci�n de coordenadas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Uso de coordenadas absolutas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Uso de coordenadas relativas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Introducci�n directa de distancias</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Despliegue de coordenadas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Control de las opciones de capas del dibujo</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Creaci�n y asignaci�n de un color a las nuevas capas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Uso del comando LINEA (LINE)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Opciones del comando LINEA (LINE)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Uso del comando ARCO (ARC)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Opciones del comando ARCO (ARC)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Uso del comando CIRCULO (CIRCLE)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Opciones del comando CIRCULO (CIRCLE)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Empleo del comando POLIGONO (POLYGON)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Dibujo de elipses (ELLIPSE)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Opciones del comando ELIPSE (ELLIPSE)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Polil�neas y l�neas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creaci�n de polil�neas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creaci�n de splines verdaderas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creaci�n de l�neas m�ltiples (MLINE)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Dibujo con el comando MLINE</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Definici�n de estilos de l�neas m�ltiples con MLSTYLE</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Edici�n de l�neas m�ltiples con MLEDIT</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cruces</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tes</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Esquinas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cortes</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Los bloques (BLOCK)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Definici�n de bloques (BLOCK)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Inserci�n de bloques</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="EN-US">
		INSERT y DDINSERT</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="EN-US">
		MEASURE y DIVIDE</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="EN-US">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Comando MEASURE</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Comando DIVIDE</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creaci�n de patrones de sombreado con el comando BHATCH</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Especificaci�n del patr�n (Pattern)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Patrones predefinidos</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Definici�n de los contornos de sombreado</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Designar puntos</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Uso de Designar objetos</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Dibujo de texto de una sola l�nea (TEXT)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Selecci�n de la justificaci�n</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Definici�n de estilos de texto (STYLE)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Dibujo de p�rrafos de texto con MTEXT</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		La ficha Car�cter (Character)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Uso de la ficha Propiedades (Properties)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		La ficha Buscar/Reemplazar</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Cambio de tama�o de objetos</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Escalamiento de objetos (SCALE)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Estiramiento de objetos (STRETCH)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Recorte de objetos (TRIM)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Alargamiento de objetos (EXTEND)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Partici�n de objetos (BREAK)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Reubicaci�n de objetos con MOVE, ROTATE y ALIGN</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Desplazamiento de objetos (MOVE)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Especificaci�n de un desplazamiento</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Giro de objetos (ROTATE)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Alineaci�n de objetos (ALIGN)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Duplicaci�n de objetos con COPY, OFFSET, MIRROR y ARRAY</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Copia de objetos (COPY)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Definici�n de un desplazamiento</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Elaboraci�n de varias copias</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Copia con desfase (OFFSET)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creaci�n de una imagen sim�trica (MIRROR)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creaci�n de matrices de objetos (ARRAY)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Creaci�n de una matriz rectangular</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Creaci�n de una matriz polar</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Dimensiones o Acotaciones</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Impresi�n y Ploteo a Escala</span></p>
		<p class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 11pt" lang="ES-TRAD">
		&nbsp;</span></p>
		<div style="BORDER-BOTTOM: windowtext 1.5pt double; BORDER-LEFT: medium none; PADDING-BOTTOM: 1pt; PADDING-LEFT: 0cm; PADDING-RIGHT: 0cm; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0cm; mso-element: para-border-div">
			<p style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0cm; TEXT-INDENT: 35.3pt; MARGIN: 6pt 0cm; PADDING-LEFT: 0cm; PADDING-RIGHT: 0cm; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0cm" class="MsoBodyText" align="center">
			<b>
			<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt" lang="ES-MX">
			<a name="Temario_AutoCAD_Avanzado_">Temario AutoCAD Avanzado</a></span></b></div>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Introducci�n</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Especificando coordenadas en 3D</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Usando la regla de la mano derecha</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Introduciendo coordenadas X, Y, Z</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Introduciendo coordenadas cil�ndricas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Introduciendo coordenadas esf�ricas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Usando Vistas y Proyecciones Est�ndar en 3D</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Definiendo un sistema de coordenadas de usuario (UCS)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Definiendo un UCS en espacio 3D</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Usando un UCS predefinido ortogr�ficamente</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Moviendo un UCS</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Asignando un UCS a un Viewport</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Trabajando con vistas en 3D</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Usando vistas ortogr�ficas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Especificando opciones de despliegue de gr�ficos en 3D</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Vistas interactivas en 3D</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando Objetos en 3D</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando Wireframes</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando Mallas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando malla con superficie predefinida</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando una malla rectangular</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando una malla de superficie regida</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando una malla de superficie tabulada</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando una superficie de malla de revoluci�n</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando una superficie de malla de borde definido</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Estableciendo la elevaci�n y el espesor</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando una caja s�lida</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando un cono s�lido</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando un cilindro s�lido</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando una esfera s�lida</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando una dona s�lida</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando una cu�a s�lida</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando un s�lido proyectado</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando s�lidos de giro</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Rotando en 3D</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Arreglos en 3D</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Efectos de espejo en 3D</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Chaflanando s�lidos</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Fileteando s�lidos</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Proyectando caras</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Moviendo las caras</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Rotando las caras</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Aplicando Offset a las caras</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Adelgazando caras</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Eliminando caras</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Copiando caras</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Coloreando caras</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Uso de Render o Foto realismo</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Aplicaci�n de Materiales</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Introducir Luces</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Introducir Personas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Montaje de Fotograf�as como Fondos</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;</span></p>
		<div style="BORDER-BOTTOM: windowtext 1.5pt double; BORDER-LEFT: medium none; PADDING-BOTTOM: 1pt; PADDING-LEFT: 0cm; PADDING-RIGHT: 0cm; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0cm; mso-element: para-border-div">
			<p style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0cm; TEXT-INDENT: 35.3pt; MARGIN: 6pt 0cm; PADDING-LEFT: 0cm; PADDING-RIGHT: 0cm; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0cm" class="MsoBodyText" align="center">
			<b>
			<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt" lang="ES-MX">
			<a name="Temario_PLC_Allen_Bradley_B�sico_">Temario PLC
			<span class="SpellE">Allen</span> Bradley B�sico</a></span></b></div>
		<p class="MsoNormal"><span lang="ES-MX">&nbsp;</span></p>
		<ol style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="1">
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Introducci�n a 
			los Controladores L�gicos Programables (<span class="SpellE">PLC�s</span>)</span> 
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Hardware del 
			Controlador L�gico Programable <span class="SpellE">Allen</span>
			<span class="SpellE">Bradley</span> SLC-500</span> 
			<ol style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="a">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Chasis</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Fuentes de 
				Alimentaci�n</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
				Procesadores Modulares</span> </li>
			</ol>
			</li>
		</ol>
		<p style="TEXT-INDENT: -108pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
		<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>i.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Caracter�sticas del Procesador SLC 5/01,5/02, 5/03 y 5/04</span></p>
		<p style="TEXT-INDENT: -108pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
		<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>ii.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Posici�n RUN</span></p>
		<p style="TEXT-INDENT: -108pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
		<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>iii.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Posici�n PROG</span></p>
		<p style="TEXT-INDENT: -108pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
		<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>iv.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Posici�n REM</span></p>
		<ol style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="1" start="2">
			<ol style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="a" start="4">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">M�dulos de 
				Entradas y Salidas</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Interfaces 
				de Comunicaci�n y Protocolos de Comunicaci�n</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
				Localizaci�n y Correcci�n de Fallos</span> </li>
			</ol>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Introducci�n a
			<span class="SpellE">RSLogix</span> 500</span> 
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Explorando al
			<span class="SpellE">RSLogix</span> 500</span> 
			<ol style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="a">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Crear un 
				nuevo Proyecto o abrir uno ya existente</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Como crear 
				archivos de Programa y Archivos de Datos</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Como 
				Configurar el PLC</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Como 
				introducir <span class="SpellE">logica</span> escalera</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Asignar 
				direcciones</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Editar en 
				L�nea</span> </li>
			</ol>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Instrucciones 
			B�sicas</span> 
			<ol style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="a">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Archivos de 
				Datos de Salida y Entrada</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Archivos de 
				Datos de <span class="SpellE">Bit</span></span> </li>
			</ol>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Instrucciones 
			de Relevaci�n</span> 
			<ol style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="a">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Examine si 
				cerrado</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Examine si 
				abierto</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Active de 
				Salida</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
				Enclavamiento y <span class="SpellE">Desenclavamiento</span> de 
				Salida</span> 
				</li>
				<li class="MsoNormal"><span class="SpellE">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">One</span></span><span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">-<span class="SpellE">Shot</span>
				<span class="SpellE">Rising</span></span> </li>
			</ol>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Archivos de 
			Datos de Temporizador</span> 
			<ol style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="a">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Descripci�n 
				general de las instrucciones de Temporizador</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Como 
				Introducir par�metros</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
				Temporizador a la Conexi�n</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
				Temporizador a la Desconexi�n</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
				Temporizador Retentivo</span> </li>
			</ol>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Archivos de 
			Datos de Contador</span> 
			<ol style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="a">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Elementos 
				del Archivo de Datos del Contador</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Como 
				introducir par�metros</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Conteo 
				Ascendente</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Conteo 
				Regresivo</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
				Restablecimiento</span> </li>
			</ol>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Instrucciones 
			de Comparaci�n</span> 
			<ol style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="a">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Igual</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">No igual</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Menor que</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Menor o 
				igual que</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Mayor que</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Mayor o 
				igual que</span> </li>
			</ol>
			</li>
			<li class="MsoNormal"><span class="SpellE">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Instrucciones</span></span><span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
			<span class="SpellE">Matem�ticas</span></span> 
			<ol style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="a">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">A�adir</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Restar</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Multiplicar</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Dividir</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Borrar</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Convertir 
				en BCD</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Convertir 
				de BCD</span> </li>
			</ol>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Instrucciones 
			de Flujo de Programa</span> 
			<ol style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="a">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Como 
				introducir par�metros</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Uso de 
				Salto</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Uso de 
				Etiqueta</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Saltar a 
				Subrutina, Subrutina y Retornar</span> </li>
			</ol>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Salida de 
			Secuenciado</span> 
			<ol style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="a">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Como 
				introducir par�metros</span> </li>
			</ol>
			</li>
		</ol>
		<p class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">&nbsp;</span></p>
		<p class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">&nbsp;</span></p>
		<div style="BORDER-BOTTOM: windowtext 1.5pt double; BORDER-LEFT: medium none; PADDING-BOTTOM: 1pt; PADDING-LEFT: 0cm; PADDING-RIGHT: 0cm; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0cm; mso-element: para-border-div">
			<p style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0cm; TEXT-INDENT: 35.3pt; MARGIN: 6pt 0cm; PADDING-LEFT: 0cm; PADDING-RIGHT: 0cm; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0cm" class="MsoBodyText" align="center">
			<a name="Temario_PLC_Allen_Bradley_Avanzado_"><font size="3"><b>
			<span style="FONT-FAMILY: Arial Narrow">Temario</span></b></font><span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt" lang="ES-MX"><b> 
			PLC <span class="SpellE">Allen</span> <span class="SpellE">Bradley</span> 
			Avanzado</b></span></a></div>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 72pt" class="MsoNormal">
		<span style="FONT-FAMILY: Symbol">�<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span></span><span style="FONT-FAMILY: Arial Narrow">Programaci�n de 
		Funciones Complementarias.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow">a.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Instrucciones de Conversi�n entre diferentes C�digos.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow">b.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Instrucci�n Master Control <span class="SpellE">Relay</span>.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow">c.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Creaci�n de Archivos de Programa como Subrutinas.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 72pt" class="MsoNormal">
		<span style="FONT-FAMILY: Symbol">�<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span></span><span style="FONT-FAMILY: Arial Narrow">Procesamiento de 
		Se�ales Anal�gicas.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow">a.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Direccionamiento M�dulos de Entrada y Salida Anal�gicos.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow">b.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Teor�a de Operaci�n de las Se�ales Anal�gicas.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 72pt" class="MsoNormal">
		<span style="FONT-FAMILY: Symbol">�<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span></span><span style="FONT-FAMILY: Arial Narrow">Manejo de Datos de 
		Alta Velocidad.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow">a.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Manejo de Tablas para M�dulo Contador de Alta Velocidad.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow">b.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Manejo de Encodificadores Incrementales.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 72pt" class="MsoNormal">
		<span style="FONT-FAMILY: Symbol">�<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span></span><span style="FONT-FAMILY: Arial Narrow">Programaci�n de 
		Interfaces Hombre � Maquina (HMI)</span></p>
		<ul style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="disc">
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Vista General 
			del PanelBuilder</span> 
			<ul style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="circle">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">�Qu� es el 
				Panel Builder?</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">�Qu� es una 
				aplicaci�n?</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">�Qu� es un 
				proyecto?</span> </li>
			</ul>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Comunicaciones</span> 
			<ul style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="circle">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Puertos de 
				Terminales PanelView</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
				Comunicaci�n DH-485</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
				Comunicaci�n DH+</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
				Comunicaci�n DF1</span> </li>
			</ul>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">PanelBuilder 
			B�sicos</span> 
			<ul style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="circle">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Entorno 
				Windows</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Ventanas de 
				PanelBuilder</span> </li>
			</ul>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Trabajar con 
			Archivos de Aplicaci�n</span> 
			<ul style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="circle">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Comenzar 
				PanelBuilder</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Crear una 
				aplicaci�n nueva</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Abrir una 
				aplicaci�n existente</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Abrir una 
				Pantalla nueva</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Abrir una 
				pantalla existente</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Guardar una 
				aplicaci�n</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Cerrar una 
				aplicaci�n</span> </li>
			</ul>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Trabajar con 
			Objetos</span> 
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Crear 
			Pulsadores</span> 
			<ul style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="circle">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Tipos de 
				pulsadores</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Tipo de 
				Contacto</span> </li>
			</ul>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Crear 
			Selectores de Lista de Control</span> 
			<ul style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="circle">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Lista de 
				Control Est�ndar</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Lista de 
				Control Pilotada</span> </li>
			</ul>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Crear Controles 
			de Entrada Num�rica</span> 
			<ul style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="circle">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Bot�n de 
				activar el Teclado</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Punto 
				cursor de entrada num�rica</span> </li>
			</ul>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Crear 
			Selectores de Pantalla</span> 
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Crear Gr�ficos 
			de Barra, Indicadores y visualizadores Num�ricos</span> 
			<ul style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="circle">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Datos de 
				Escala</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Gr�ficos de 
				Barra</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Indicadores 
				de Estado m�ltiple</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Indicadores 
				de Lista</span> </li>
			</ul>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Crear 
			Visualizadores de Mensajes</span> 
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Crear Alarmas</span> 
			<ul style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="circle">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Sistema de 
				Alarmas</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Crear 
				Bandera de Alarma</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Crear Lista 
				de Alarma</span> </li>
			</ul>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">A�adir Gr�ficos</span> 
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Usar el Editor 
			de Texto</span> 
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Trabajar con 
			Etiquetas</span> 
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Configurar el 
			Terminal y la Comunicaci�n</span> 
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Transferir 
			Aplicaciones</span> </li>
		</ul>
		<p class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">&nbsp;</span></p>
		<p class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">&nbsp;</span></div>
	</td>
  </tr>
</table>

</body>

</html>