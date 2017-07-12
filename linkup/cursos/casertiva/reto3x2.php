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
			Reflexión:</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Atender nuestros propios procesos 
			comunicativos es una tarea muy recomendable, no sólo por la mejora 
			que supone en las relaciones interpersonales, sino para tomar 
			conciencia de qué comunicamos. </span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">“La vida es como un eco. Si no te gusta 
			lo que recibes, presta atención a lo que emites”</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Podemos decir que todo comunica y que 
			muchas veces es más importante lo que comunicamos con las actitudes 
			y no con las palabras.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">En la Universidad de California en Los 
			Ángeles en 1964, Albert Merhabian inició un trabajo que se ha 
			convertido en un referente para los cursos de comunicación. </span>
			<span lang="EN-US" style="color: black">En 1981concluyó y publicó el 
			libro <i>Silent Messages: Implicit Communication of Emotions and 
			Attitudes.</i></span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">En él expone el porcentaje de importancia 
			de los diferentes factores de la comunicación, entendiendo que éstos 
			son:</span></p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="color: black; text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				Las palabras</li>
				<li class="MsoNormal" style="color: black; text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				El tono de la voz</li>
				<li class="MsoNormal" style="color: black; text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				El lenguaje corporal</li>
			</ul>
			<p class="MsoNormal" style="margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-align:justify;line-height:150%">
			<span style="color: black">&nbsp;</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Si pensamos en cómo nos comunicamos con 
			los demás veremos que no hay nada más que lo evidente: usamos la 
			voz, las palabras y el cuerpo. Pero ¿cuál es el factor más 
			importante?</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">El resultado que Albert Merhabian obtuvo 
			después de infinidad de encuestas sigue siendo aún hoy sorprendente 
			y motivador de grandes debates:</span></p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="color: black; text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				Las palabras 7%</li>
				<li class="MsoNormal" style="color: black; text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				El tono de la voz 38%</li>
				<li class="MsoNormal" style="color: black; text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				El lenguaje corporal 55%</li>
			</ul>
			<p class="MsoNormal" style="margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;text-align:justify;line-height:150%">
			<span style="color: black">&nbsp;</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Saber leer el lenguaje corporal es la 
			mejor manera de captar a otra persona, de darse cuenta de lo que 
			expresa, de lo que comunica más allá de sus palabras.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Normalmente a lo que dice el cuerpo es a 
			lo que damos más credibilidad. Muchas veces sin ser conscientes 
			mandamos mensajes contradictorios, es decir, las palabras dicen una 
			cosa y el cuerpo otra, en estos casos lo seguro es que las personas 
			hagan caso a lo que expresamos con el cuerpo.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Aunque el estudio de Merhabian queda ya 
			un poco lejos a nuestra realidad actual (1981), la propuesta sigue 
			teniendo pleno vigor en la actualidad. Aunque recientes estudios de 
			neurociencia han otorgado mas importancia a las palabras, aun están 
			lejos de tener el mismo impacto que el tono de voz y el lenguaje 
			corporal.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Lo más interesante para hacer una 
			reflexión es si alguna vez nos hemos preguntado qué comunicamos con 
			nuestro cuerpo. Si nuestros gestos, actitudes, posturas, etc. pueden 
			ser modificados y usados a nuestra conveniencia; si estos factores 
			tienen tanta importancia y los problemas de comunicación son tan 
			comunes y frecuentes ¿Por qué no tomarnos un tiempo para analizar 
			esta parte fundamental de nuestra comunicación y comenzar a 
			gestionarla en función de nuestros intereses?</span></p>
			<p class="MsoListParagraphCxSpFirst" style="text-align: justify; text-indent: -18.0pt; line-height: 150%">
			<b>1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></b><a href="reto3x2.php">Continuar-&gt;</a></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			&nbsp;</p></td>
		</tr>
		</table>
	</td>
  </tr>
</table>

</body>

</html>