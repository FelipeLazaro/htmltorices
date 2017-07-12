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
?>

<html>

<head>
<meta http-equiv="Content-Language" content="es-mx">
<meta name="GENERATOR" content="Microsoft FrontPage 6.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title> B-IN  -  CAPACITACION EN LINEA </title>
<base target="_self">
</head>

<body topmargin="0" leftmargin="0" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="99%" id="AutoNumber1" height="170">
  <tr>
    <td width="100%" height="170"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
      <tr>
        <td width="100%">
        <p align="center">
        <br>
        <img border="0" src="images/bin1.jpg" width="173" height="129"></td>
      </tr>
    </table>
    <div align="center">
      <center>
      <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="76%" id="AutoNumber3">
        <tr>
          <td width="100%">
          <p align="center">
          <a target="contenido" href="funciona.php" style="text-decoration: none">
			<font size="3" color="#000066">
          ¿CÓMO FUNCIONA?</font></a></p>
			<p align="center">
          <a target="contenido" href="intro.php" style="text-decoration: none">
			<font size="3" color="#000066">
          INTRODUCCIÓN</font></a></p>
          <p align="center">
          <a target="contenido" href="material.php" style="text-decoration: none">
			<font size="3" color="#000066">
          MATERIAL ADICIONAL</font></a></p>
          <p align="center">
          <a target="contenido" href="retos.php" style="text-decoration: none">
			<font size="3" color="#000066">
          RETOS</font></a></p>
			<p align="center">
          <a target="contenido" href="publicaciones.php" style="text-decoration: none">
			<font size="3" color="#000066">
          PUBLICACIONES</font></a></p>
			<p align="center">
          <a target="contenido" href="comentarios.php" style="text-decoration: none">
			<font size="3" color="#000066">
          COMENTARIOS</font></a></p>
			<p align="center">
          <a target="contenido" href="facilitador.php" style="text-decoration: none">
			<font size="3" color="#000066">
          FACILITADOR</font></a></p>
			<p align="center">
          <a target="contenido" href="soporte.php" style="text-decoration: none">
			<font size="3" color="#000066">
          SOPORTE</font></a></p>
			<p align="center">
          <a target="contenido" href="tablap.php" style="text-decoration: none">
			<font size="3" color="#000066">
          TABLA DE POSICIONES</font></a></p>
			<p align="center">
          <a target="contenido" href="tiendita.php" style="text-decoration: none">
			<font size="3" color="#000066">
          TIENDITA</font></a></p>
			<p align="center">
          <a target="contenido" href="avisos.php" style="text-decoration: none; font-weight:700">
			<font size="3" color="#FF0000">
          AVISOS</font></a></p>
          <p align="center"><font size="4" color="#FFFFFF">
          <a href="aut_logout.php" target="contenido" style="text-decoration: none">
			<font color="#000066">Salir</font></a></font></td>
        </tr>
      </table>
      </center>
    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    </td>
  </tr>
</table>

</body>

</html>