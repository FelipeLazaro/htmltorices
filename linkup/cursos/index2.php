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
if(($_SESSION['usuario_login'] == "edgar")){$usrwellcome = "o Lic. Edgar Torices Vite  NISSAN";}
if(($_SESSION['usuario_login'] == "alvaro")){$usrwellcome = "o Lic. Alvaro Cardoso Perales   RENAULT";}
if(($_SESSION['usuario_login'] == "alumno")){$usrwellcome = "o ALUMNO";}
?>

<head>
<meta http-equiv="Content-Language" content="es-mx">
<meta name="GENERATOR" content="Microsoft FrontPage 6.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>CAPACITACION EN LINEA -  B-IN</title>
</head>

<body>

<p>&nbsp;</p>
<p>&nbsp;</p>
<table border="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
  <tr>
    <td width="99%">
    <p align="center">
    <font color="#000066">
	<img border="0" src="images/bin2.jpg" width="180" height="187"><br>
	<br>
	</font><font face="Times New Roman" size="6" color="#000066">
    <br>
    </font><font color="#000066">Selecciona tu el Curso al que deseas ingresar:</font><font color="#000066"><form action="casertiva/initial.php">

<p align="center">

<select name="D1">
<optgroup label="COMUNICACION ASERTIVA">
<option>1ER CURSO</option>
</optgroup>
</select>

<input name=submit type=submit value="  Entrar  " class="botones" style="border: 1px solid #000000">
</p>
</form> 

</font>
	<p align="center">
    <font color="#000066">&nbsp;

</font>
	<p></p></td>
  </tr>
</table>

</body>

</html>