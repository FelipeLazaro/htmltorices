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
		Introducción</span></p>
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
		Métodos de introducción de coordenadas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Uso de coordenadas absolutas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Uso de coordenadas relativas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Introducción directa de distancias</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Despliegue de coordenadas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Control de las opciones de capas del dibujo</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Creación y asignación de un color a las nuevas capas</span></p>
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
		Polilíneas y líneas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creación de polilíneas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creación de splines verdaderas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creación de líneas múltiples (MLINE)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Dibujo con el comando MLINE</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Definición de estilos de líneas múltiples con MLSTYLE</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Edición de líneas múltiples con MLEDIT</span></p>
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
		Definición de bloques (BLOCK)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Inserción de bloques</span></p>
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
		Creación de patrones de sombreado con el comando BHATCH</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Especificación del patrón (Pattern)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Patrones predefinidos</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Definición de los contornos de sombreado</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Designar puntos</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Uso de Designar objetos</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Dibujo de texto de una sola línea (TEXT)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Selección de la justificación</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Definición de estilos de texto (STYLE)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Dibujo de párrafos de texto con MTEXT</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		La ficha Carácter (Character)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Uso de la ficha Propiedades (Properties)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		La ficha Buscar/Reemplazar</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Cambio de tamaño de objetos</span></p>
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
		Partición de objetos (BREAK)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Reubicación de objetos con MOVE, ROTATE y ALIGN</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Desplazamiento de objetos (MOVE)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Especificación de un desplazamiento</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Giro de objetos (ROTATE)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Alineación de objetos (ALIGN)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Duplicación de objetos con COPY, OFFSET, MIRROR y ARRAY</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Copia de objetos (COPY)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Definición de un desplazamiento</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Elaboración de varias copias</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Copia con desfase (OFFSET)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creación de una imagen simétrica (MIRROR)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creación de matrices de objetos (ARRAY)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Creación de una matriz rectangular</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 10pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Creación de una matriz polar</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Dimensiones o Acotaciones</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Impresión y Ploteo a Escala</span></p>
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
		Introducción</span></p>
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
		Introduciendo coordenadas cilíndricas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Introduciendo coordenadas esféricas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Usando Vistas y Proyecciones Estándar en 3D</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Definiendo un sistema de coordenadas de usuario (UCS)</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Definiendo un UCS en espacio 3D</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Usando un UCS predefinido ortográficamente</span></p>
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
		Usando vistas ortográficas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Especificando opciones de despliegue de gráficos en 3D</span></p>
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
		Creando una superficie de malla de revolución</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando una superficie de malla de borde definido</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Estableciendo la elevación y el espesor</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando una caja sólida</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando un cono sólido</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando un cilindro sólido</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando una esfera sólida</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando una dona sólida</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando una cuña sólida</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando un sólido proyectado</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Creando sólidos de giro</span></p>
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
		Chaflanando sólidos</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Fileteando sólidos</span></p>
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
		Aplicación de Materiales</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Introducir Luces</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Introducir Personas</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		Montaje de Fotografías como Fondos</span></p>
		<p style="TEXT-ALIGN: left; MARGIN: 0cm 0cm 0pt" class="MsoTitle" align="left">
		<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt; FONT-WEIGHT: normal" lang="ES-TRAD">
		&nbsp;</span></p>
		<div style="BORDER-BOTTOM: windowtext 1.5pt double; BORDER-LEFT: medium none; PADDING-BOTTOM: 1pt; PADDING-LEFT: 0cm; PADDING-RIGHT: 0cm; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0cm; mso-element: para-border-div">
			<p style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0cm; TEXT-INDENT: 35.3pt; MARGIN: 6pt 0cm; PADDING-LEFT: 0cm; PADDING-RIGHT: 0cm; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0cm" class="MsoBodyText" align="center">
			<b>
			<span style="FONT-FAMILY: Arial Narrow; FONT-SIZE: 12pt" lang="ES-MX">
			<a name="Temario_PLC_Allen_Bradley_Básico_">Temario PLC
			<span class="SpellE">Allen</span> Bradley Básico</a></span></b></div>
		<p class="MsoNormal"><span lang="ES-MX">&nbsp;</span></p>
		<ol style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="1">
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Introducción a 
			los Controladores Lógicos Programables (<span class="SpellE">PLC´s</span>)</span> 
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Hardware del 
			Controlador Lógico Programable <span class="SpellE">Allen</span>
			<span class="SpellE">Bradley</span> SLC-500</span> 
			<ol style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="a">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Chasis</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Fuentes de 
				Alimentación</span> 
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
		</span>Características del Procesador SLC 5/01,5/02, 5/03 y 5/04</span></p>
		<p style="TEXT-INDENT: -108pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
		<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>ii.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Posición RUN</span></p>
		<p style="TEXT-INDENT: -108pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
		<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>iii.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Posición PROG</span></p>
		<p style="TEXT-INDENT: -108pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
		<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>iv.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Posición REM</span></p>
		<ol style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="1" start="2">
			<ol style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="a" start="4">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Módulos de 
				Entradas y Salidas</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Interfaces 
				de Comunicación y Protocolos de Comunicación</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
				Localización y Corrección de Fallos</span> </li>
			</ol>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Introducción a
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
				Línea</span> </li>
			</ol>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Instrucciones 
			Básicas</span> 
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
			de Relevación</span> 
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
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Descripción 
				general de las instrucciones de Temporizador</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Como 
				Introducir parámetros</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
				Temporizador a la Conexión</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
				Temporizador a la Desconexión</span> 
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
				introducir parámetros</span> 
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
			de Comparación</span> 
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
			<span class="SpellE">Matemáticas</span></span> 
			<ol style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="a">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Añadir</span> 
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
				introducir parámetros</span> 
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
				introducir parámetros</span> </li>
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
		<span style="FONT-FAMILY: Symbol">·<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span></span><span style="FONT-FAMILY: Arial Narrow">Programación de 
		Funciones Complementarias.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow">a.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Instrucciones de Conversión entre diferentes Códigos.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow">b.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Instrucción Master Control <span class="SpellE">Relay</span>.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow">c.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Creación de Archivos de Programa como Subrutinas.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 72pt" class="MsoNormal">
		<span style="FONT-FAMILY: Symbol">·<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span></span><span style="FONT-FAMILY: Arial Narrow">Procesamiento de 
		Señales Analógicas.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow">a.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Direccionamiento Módulos de Entrada y Salida Analógicos.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow">b.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Teoría de Operación de las Señales Analógicas.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 72pt" class="MsoNormal">
		<span style="FONT-FAMILY: Symbol">·<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span></span><span style="FONT-FAMILY: Arial Narrow">Manejo de Datos de 
		Alta Velocidad.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow">a.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Manejo de Tablas para Módulo Contador de Alta Velocidad.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 108pt" class="MsoNormal">
		<span style="FONT-FAMILY: Arial Narrow">b.<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>Manejo de Encodificadores Incrementales.</span></p>
		<p style="TEXT-ALIGN: justify; TEXT-INDENT: -18pt; MARGIN-LEFT: 72pt" class="MsoNormal">
		<span style="FONT-FAMILY: Symbol">·<span style="FONT-VARIANT: normal; FONT-STYLE: normal; FONT-FAMILY: Times New Roman; FONT-SIZE: 7pt; FONT-WEIGHT: normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span></span><span style="FONT-FAMILY: Arial Narrow">Programación de 
		Interfaces Hombre – Maquina (HMI)</span></p>
		<ul style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="disc">
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Vista General 
			del PanelBuilder</span> 
			<ul style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="circle">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">¿Qué es el 
				Panel Builder?</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">¿Qué es una 
				aplicación?</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">¿Qué es un 
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
				Comunicación DH-485</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
				Comunicación DH+</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">
				Comunicación DF1</span> </li>
			</ul>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">PanelBuilder 
			Básicos</span> 
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
			Archivos de Aplicación</span> 
			<ul style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="circle">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Comenzar 
				PanelBuilder</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Crear una 
				aplicación nueva</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Abrir una 
				aplicación existente</span> 
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
				aplicación</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Cerrar una 
				aplicación</span> </li>
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
				Control Estándar</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Lista de 
				Control Pilotada</span> </li>
			</ul>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Crear Controles 
			de Entrada Numérica</span> 
			<ul style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="circle">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Botón de 
				activar el Teclado</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Punto 
				cursor de entrada numérica</span> </li>
			</ul>
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Crear 
			Selectores de Pantalla</span> 
			</li>
			<li class="MsoNormal">
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Crear Gráficos 
			de Barra, Indicadores y visualizadores Numéricos</span> 
			<ul style="MARGIN-TOP: 0cm; MARGIN-BOTTOM: 0cm" type="circle">
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Datos de 
				Escala</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Gráficos de 
				Barra</span> 
				</li>
				<li class="MsoNormal">
				<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Indicadores 
				de Estado múltiple</span> 
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
			<span style="FONT-FAMILY: Arial Narrow" lang="ES-MX">Añadir Gráficos</span> 
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
			Terminal y la Comunicación</span> 
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