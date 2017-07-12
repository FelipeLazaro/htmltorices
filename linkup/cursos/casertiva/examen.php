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
</head>

<body topmargin="0">

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="86%" id="AutoNumber1">
  <tr>
    <td width="100%">
    <p align="left">
    <font color="#000066">
	<img border="0" src="images/bin2.jpg" width="180" height="187" align="left"><br>
	</font><font face="Times New Roman" size="4" color="#000066">Estimad<? echo $usrwellcome; ?>&nbsp; 
	este examen tiene una duración de 10 minutos, se cerrara automáticamente al 
	termino de este tiempo.<br> 
    </font><font color="#000066">
	<br>
	&nbsp;</font></p><center>
	<table class="frame" border="0" cellSpacing="0" borderColor="#ce2900" cellPadding="0" width="856" height="500">
		<tr>
			<td bgColor="#ffffff" vAlign="top" rowSpan="4" colSpan="17">
			&nbsp;
			
			
			
			
			
			
			<p><table cellpadding=0 cellspacing=0 border=0 width="100%">
<tr><td width=200>&nbsp;</td><td width="100%" align=center class=top_section>
	EJEMPLO DE EXAMEN</td></tr>
<tr><td colspan=2 height=1 width=100% style="background-color: #E7E9EF;"><img src="images/1x1.gif" width=1 height=1></td></tr>
 
<tr><td colspan=2 height=7 width=100%><img src="images/1x1.gif" width=1 height=7></td></tr>
<tr><td colspan=2>
 
<table cellpadding=0 cellspacing=0 border=0 width="100%">
<tr vAlign=top><td width="1%"><img src="images/1x1.gif" width=2 height=1></td><td>
 
<table cellpadding=0 cellspacing=0 border=0 width="100%">
<tr><td class=box_area>
 
<p><form name=testqForm method=post action="test.php"><table cellpadding=0 cellspacing=5 border=0 width="100%">
<tr><td>
 
<table class=rowtable3 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr class=rowtwo valign=top><td id=vtimer align=center title="Tiempo para el examen">
	tiempo: 10min.</td><td width="80%" id=testname align=center title="Nombre del examen">TOEFL - Test 2</td></tr>
<tr><td class=rowone colspan=2>
 
 
<table cellpadding=0 cellspacing=0 border=0 width="100%">
<tr vAlign=top><td width=10 style="padding-top: 8px;"><b>1.&nbsp;</b></td><td width="100%">
 
<table cellpadding=5 cellspacing=3 border=0 width="100%"><tr><td class=question><b>Who did you eat with? - No one, I ate ....<br />
</b></td></tr></table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[1] value=1></td>
<td class=answer width="100%">myself</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[1] value=2></td>
<td class=answer width="100%">by myself</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[1] value=3></td>
<td class=answer width="100%">ourselves</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[1] value=4></td>
<td class=answer width="100%">ourself</td></tr>
</table>
 
</td></tr>
<tr vAlign=top><td width=10 style="padding-top: 8px;"><b>2.&nbsp;</b></td><td width="100%">
 
<table cellpadding=5 cellspacing=3 border=0 width="100%"><tr><td class=question><b>He retired ... 56 and went to live ... the country.<br />
</b></td></tr></table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[2] value=1></td>
<td class=answer width="100%">of, in</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[2] value=2></td>
<td class=answer width="100%">at, in</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[2] value=3></td>
<td class=answer width="100%">of, at</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[2] value=4></td>
<td class=answer width="100%">in, in</td></tr>
</table>
 
</td></tr>
<tr vAlign=top><td width=10 style="padding-top: 8px;"><b>3.&nbsp;</b></td><td width="100%">
 
<table cellpadding=5 cellspacing=3 border=0 width="100%"><tr><td class=question><b>.... anyone in. I'm too busy to see anybody.<br />
</b></td></tr></table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[3] value=1></td>
<td class=answer width="100%">Let's not</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[3] value=2></td>
<td class=answer width="100%">Not let</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[3] value=3></td>
<td class=answer width="100%">Don't let</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[3] value=4></td>
<td class=answer width="100%">Don't let's</td></tr>
</table>
 
</td></tr>
<tr vAlign=top><td width=10 style="padding-top: 8px;"><b>4.&nbsp;</b></td><td width="100%">
 
<table cellpadding=5 cellspacing=3 border=0 width="100%"><tr><td class=question><b>I explained ....<br />
</b></td></tr></table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[4] value=1></td>
<td class=answer width="100%">to him the homework</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[4] value=2></td>
<td class=answer width="100%">the homework to him</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[4] value=3></td>
<td class=answer width="100%">the homewirk him</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[4] value=4></td>
<td class=answer width="100%">him the homework</td></tr>
</table>
 
</td></tr>
<tr vAlign=top><td width=10 style="padding-top: 8px;"><b>5.&nbsp;</b></td><td width="100%">
 
<table cellpadding=5 cellspacing=3 border=0 width="100%"><tr><td class=question><b>I would like .....<br />
</b></td></tr></table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[5] value=1></td>
<td class=answer width="100%">some potatoes</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[5] value=2></td>
<td class=answer width="100%">any potatoes</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[5] value=3></td>
<td class=answer width="100%">potato</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[5] value=4></td>
<td class=answer width="100%">some potato</td></tr>
</table>
 
</td></tr>
<tr vAlign=top><td width=10 style="padding-top: 8px;"><b>6.&nbsp;</b></td><td width="100%">
 
<table cellpadding=5 cellspacing=3 border=0 width="100%"><tr><td class=question><b>I have ... little money left, let's have dinner in ... restaurant.<br />
</b></td></tr></table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[6] value=1></td>
<td class=answer width="100%"><empty>, a</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[6] value=2></td>
<td class=answer width="100%">a, the</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[6] value=3></td>
<td class=answer width="100%"><empty>, the</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[6] value=4></td>
<td class=answer width="100%">a,a</td></tr>
</table>
 
</td></tr>
<tr vAlign=top><td width=10 style="padding-top: 8px;"><b>7.&nbsp;</b></td><td width="100%">
 
<table cellpadding=5 cellspacing=3 border=0 width="100%"><tr><td class=question><b>Come on, children! .... time to get up!<br />
</b></td></tr></table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[7] value=1></td>
<td class=answer width="100%">there are</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[7] value=2></td>
<td class=answer width="100%">it</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[7] value=3></td>
<td class=answer width="100%">it is</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[7] value=4></td>
<td class=answer width="100%">there is</td></tr>
</table>
 
</td></tr>
<tr vAlign=top><td width=10 style="padding-top: 8px;"><b>8.&nbsp;</b></td><td width="100%">
 
<table cellpadding=5 cellspacing=3 border=0 width="100%"><tr><td class=question><b>..... so mush candy. She is getting fat.<br />
</b></td></tr></table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[8] value=1></td>
<td class=answer width="100%">Don't let her eat</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[8] value=2></td>
<td class=answer width="100%">Don't let her to eat</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[8] value=3></td>
<td class=answer width="100%">Let her not to eat</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[8] value=4></td>
<td class=answer width="100%">Let her not eating</td></tr>
</table>
 
</td></tr>
<tr vAlign=top><td width=10 style="padding-top: 8px;"><b>9.&nbsp;</b></td><td width="100%">
 
<table cellpadding=5 cellspacing=3 border=0 width="100%"><tr><td class=question><b>They gave .... his birthday.<br />
</b></td></tr></table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[9] value=1></td>
<td class=answer width="100%">a watch Tom for</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[9] value=2></td>
<td class=answer width="100%">to Tom a watch for</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[9] value=3></td>
<td class=answer width="100%">Tom a watch on</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[9] value=4></td>
<td class=answer width="100%">Tom a watch for</td></tr>
</table>
 
</td></tr>
<tr vAlign=top><td width=10 style="padding-top: 8px;"><b>10.&nbsp;</b></td><td width="100%">
 
<table cellpadding=5 cellspacing=3 border=0 width="100%"><tr><td class=question><b>I'm not very tall, and my sister isn't very tall ....<br />
</b></td></tr></table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[10] value=1></td>
<td class=answer width="100%">also</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[10] value=2></td>
<td class=answer width="100%">too</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[10] value=3></td>
<td class=answer width="100%">either</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[10] value=4></td>
<td class=answer width="100%">neither</td></tr>
</table>
 
</td></tr>
<tr vAlign=top><td width=10 style="padding-top: 8px;"><b>11.&nbsp;</b></td><td width="100%">
 
<table cellpadding=5 cellspacing=3 border=0 width="100%"><tr><td class=question><b>This isn't yours,....?<br />
</b></td></tr></table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[11] value=1></td>
<td class=answer width="100%">isn't it</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[11] value=2></td>
<td class=answer width="100%">is it</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[11] value=3></td>
<td class=answer width="100%">is this</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[11] value=4></td>
<td class=answer width="100%">is there</td></tr>
</table>
 
</td></tr>
<tr vAlign=top><td width=10 style="padding-top: 8px;"><b>12.&nbsp;</b></td><td width="100%">
 
<table cellpadding=5 cellspacing=3 border=0 width="100%"><tr><td class=question><b>There is homework for tommorow, ...?<br />
</b></td></tr></table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[12] value=1></td>
<td class=answer width="100%">isn't it</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[12] value=2></td>
<td class=answer width="100%">is it</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[12] value=3></td>
<td class=answer width="100%">is there</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[12] value=4></td>
<td class=answer width="100%">isn't there</td></tr>
</table>
 
</td></tr>
<tr vAlign=top><td width=10 style="padding-top: 8px;"><b>13.&nbsp;</b></td><td width="100%">
 
<table cellpadding=5 cellspacing=3 border=0 width="100%"><tr><td class=question><b>Would you like to hear ...story about ... Englishman, ... Irishman and ... Scotsman?<br />
</b></td></tr></table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[13] value=1></td>
<td class=answer width="100%">the, an, an, a</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[13] value=2></td>
<td class=answer width="100%">a, an, a, a</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[13] value=3></td>
<td class=answer width="100%">a, an, an, an, a</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[13] value=4></td>
<td class=answer width="100%">a, <empty>, <empty>, <empty></td></tr>
</table>
 
</td></tr>
<tr vAlign=top><td width=10 style="padding-top: 8px;"><b>14.&nbsp;</b></td><td width="100%">
 
<table cellpadding=5 cellspacing=3 border=0 width="100%"><tr><td class=question><b>That book is ... .<br />
</b></td></tr></table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[14] value=1></td>
<td class=answer width="100%">my</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[14] value=2></td>
<td class=answer width="100%">theirs</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[14] value=3></td>
<td class=answer width="100%">her</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[14] value=4></td>
<td class=answer width="100%">our</td></tr>
</table>
 
</td></tr>
<tr vAlign=top><td width=10 style="padding-top: 8px;"><b>15.&nbsp;</b></td><td width="100%">
 
<table cellpadding=5 cellspacing=3 border=0 width="100%"><tr><td class=question><b>There aren't any more flights to Chicago tonight, ....?<br />
</b></td></tr></table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[15] value=1></td>
<td class=answer width="100%">are there</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[15] value=2></td>
<td class=answer width="100%">are they</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[15] value=3></td>
<td class=answer width="100%">aren't there</td></tr>
</table>
<table cellpadding=5 cellspacing=3 border=0 width="100%">
<tr>
<td width="20"><input type=radio name=answer[15] value=4></td>
<td class=answer width="100%">aren't they</td></tr>
</table>
 
</td></tr>
</table>
 
</td></tr>
 
<tr><td class=rowtwo colspan=2>
<table cellpadding=0 cellspacing=0 border=0 width="100%"><tr vAlign=top>
<td width="100%"><input class=btn type=submit name=bsubmit value=" Responder "></td>
<td><input class=btn type=submit name=bfinish value=" Finish this test " onclick="f=document.testqForm;if (confirm('Are you sure want to finish this test?')) { f.action='test.php?action=finish&confirmed=1';f.submit();} else {return false;}"></td></tr></table>
</td></tr></table>
</td></tr></table></form>
 
</td></tr></table>
</td><td width="1%"><img src="images/1x1.gif" width=2 height=1></td></tr></table>
 
</td></tr>
<tr><td colspan=2 height=9 width=100%><img src="images/1x1.gif" width=1 height=9></td></tr>
<tr><td colspan=2 height=1 width=100% style="background-color: #E7E9EF;"><img src="images/1x1.gif" width=1 height=1></td></tr>
<tr><td colspan=2 height=2 width=100%><img src="images/1x1.gif" width=1 height=2></td></tr>
<tr><td colspan=2 align=right>&nbsp;</td></tr>
<tr><td colspan=2 align=center>&nbsp;</td></tr>
</table>
			
			
			
			
			
			
			
			
			</td>
		</tr>
	</table>
	</center></td>
  </tr>
</table>

</body>

</html>