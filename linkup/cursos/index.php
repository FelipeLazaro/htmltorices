<?
  // No almacenar en el cache del navegador esta página.
		header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");             		// Expira en fecha pasada
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");		// Siempre página modificada
		header("Cache-Control: no-cache, must-revalidate");           		// HTTP/1.1
		header("Pragma: no-cache");                                   		// HTTP/1.0
?>
<html>
<title>B-IN  - CAPACITACION EN LINEA </title>
<style type="text/css">
<!--
.botones {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9pt; color: #FFFFFF; background-color: #0099FF; border-color: #000000 ; border-top-width: 1pix; border-right-width: 1pix; border-bottom-width: 1pix; border-left-width: 1pix}
.imputbox {  border-left:1pix solid solid; border-right:1pix solid solid; border-top:1pix solid #000000; border-bottom:1pix solid #000000; font-size: 10pt; color: #000099; background-color: #CCFFCC; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: normal}
-->
</style>

<body bgcolor="#2157D7">
<br><br><br>
<div align="center">
  <center>
<table width="250" border="3" cellspacing="0" cellpadding="0" bordercolor="#2271F2" style="border-collapse: collapse" bordercolordark="#0000FF" height="99">
  <tr>
    <td height="99">
      <table width=100% border=0 align="center" cellpadding="0" cellspacing="0" bordercolor="#009999" bgcolor="#CCFFCC">
        <form action="index2.php" method="post">
          <tr bgcolor="#0099FF"> 
            <td colspan="2" height="40"> 
              <div align="center"><font face="Arial" color="#FFFFFF" size=2><b>Acceso Restringido</b></div>
            </td>
          </tr>
          <tr> 
            <td colspan="2"> 
              <div align="center"> 
                <table width="292" border="0" cellspacing="0" cellpadding="5" height="97">
                  <tr valign="middle"> 
                    <td colspan="2" height="20" bgcolor="#2271F2" width="282"> 
                      <div align="center">

                         <?
                          // Mostrar error de Autentificación.
                          include ("aut_mensaje_error.inc.php");
                          if (isset($_GET['error_login'])){
                              $error=$_GET['error_login'];
                          echo "<font face='Verdana, Arial, Helvetica, sans-serif' size='1' color='#FF0000'>Error: $error_login_ms[$error]";
                          }
                         ?>
                         
                    </div>
                    </td>
                  </tr>
                  <tr> 
                    <td width="85" bgcolor="#2271F2" height="35"> 
                      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                        <img border="0" src="images/user.gif" width="32" height="32"> </font></div>
                    </td>
                    <td width="187" bgcolor="#2271F2" height="35"> 
                      <div align="left"> 
                        <input type="text" name="user" size="22" class="imputbox" style="color: #FFFFFF; border: 1px solid #000000; background-color: #0099FF">
                      </div>
                    </td>
                  </tr>
                  <tr> 
                    <td width="85" bgcolor="#2271F2" height="12"> 
                      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                        <img border="0" src="images/pass.gif" width="32" height="32"> </font></div>
                    </td>
                    <td width="187" bgcolor="#2271F2" height="12"> 
                      <div align="left"> 
                        <input type="password" name="pass" size="22" class="imputbox" style="color: #FFFFFF; border: 1px solid #000000; background-color: #0099FF">
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
            </td>
          </tr>
          <tr valign="middle"> 
            <td colspan="2" height="50" bgcolor="#2271F2"> 
              <div align="center"><font face="Arial" color=black size=2> 
                <input name=submit type=submit value="  Entrar  " class="botones" style="border: 1px solid #000000">
                </font></div>
            </td>
          </tr>
        </form>
      </table>
    </td>
  </tr>
</table>
  </center>
</div>
</body>
</html>