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
			<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:150%"><b>INFORMACI�N: COMUNICACI�N ASERTIVA</b></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			Usted est� a punto de comenzar un curso de capacitaci�n virtual, el 
			cual tiene como objetivo revisar el tema de la comunicaci�n 
			asertiva, de una forma amena, pr�ctica y �til.</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">La 
			comunicaci�n humana es un tema fascinante, vasto y complejo, 
			comunicar ideas y sentimientos es algo tan b�sico que a menudo lo 
			damos por supuesto. �Comunicar? �Cu�l es el problema? Pues 
			precisamente ese es el problema. Una parte importante de los asuntos 
			humanos se ve afectada directamente por las dificultades en la 
			comunicaci�n. Gran parte de los problemas cotidianos de individuos, 
			grupos, organizaciones y Estados est�n relacionados con la 
			comunicaci�n.</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">La 
			buena noticia es que las competencias comunicativas se aprenden y se 
			construyen d�a a d�a; si se tiene disposici�n y voluntad de aprender 
			la habilidad de comunicarse asertivamente aumenta y trae consigo 
			asombrosos resultados. </p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">El 
			presente curso te ayudar� a desarrollar esas habilidades 
			comunicativas y a entender mejor la comunicaci�n desde una 
			perspectiva anal�tica; te aconsejamos que adem�s de divertirte en la 
			competencia que se te presenta, abras tu mente al aprendizaje que el 
			curso te ofrece, analices las preguntas y los retos, y tengas en 
			cuenta que todos los temas son aplicables a tu trabajo cotidiano.</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">Ser 
			comunicativamente competente es una de las habilidades m�s valoradas 
			en el mundo actual, por que un buen comunicador escucha, se expresa 
			con claridad y es capaz de convertir grandes problemas en grandes 
			oportunidades. Nada est� m�s condenado al fracaso que dos personas o 
			dos equipos que se esfuerzan en no comunicarse, en no entenderse, en 
			no aceptarse�</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">Uno 
			de los puntos centrales de este curso se centra en c�mo manejamos 
			nuestras relaciones y m�s concretamente en la interferencias que 
			puede haber en la comunicaci�n.</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			Partimos de la premisa de que no existe una buena o mala 
			comunicaci�n, mucha o poca; sino que �Todo es Comunicaci�n! 
			Actividad o inactividad, palabras o silencio, tienen siempre un 
			valor de mensaje, influyen sobre los dem�s, quienes a su vez 
			reaccionan frente a los mensajes y comunican de vuelta.</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">�No 
			se puede no comunicar�, los mensajes nunca dejan de circular. 
			Podr�amos decir que la comunicaci�n no es algo que suceda en la 
			realidad, sino que la realidad se construye en la comunicaci�n. 
			Todas nuestras experiencias e interacciones suceden en la 
			comunicaci�n, esto es real incluso en la comunicaci�n intrapersonal, 
			aquella que tenemos con nosotros mismos, es un di�logo interno y 
			depende de c�mo lo manejemos, el impacto que tiene. </p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">Si 
			desapareciera la comunicaci�n no habr�a un referente para explicar 
			la realidad, no existir�a consenso ni entendimiento. La comunicaci�n 
			es una comuni�n, nos mantiene unidos por que nos relaciona. </p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">La comunicaci�n no es f�cil o dif�cil, es 
			simplemente comunicaci�n; somos las personas las que podemos 
			agilizar o complicar el proceso comunicativo.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Hay muchos factores que pueden 
			obstaculizar la comunicaci�n, pero cuando se trata de los problemas 
			que interfieren en las relaciones, es decir en la comunicaci�n que 
			depende de las personas y su forma de abordar los problemas, 
			mencionaremos los principios de Xavier Guix, como las principales 
			interferencias de la comunicaci�n en las relaciones interpersonales:</span></p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="color: black; text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				<b>Intencionalidad:</b></li>
			</ul>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">No hacemos nada por que s�. Lo hacemos 
			por que tenemos intenciones, sean conscientes o inconscientes. 
			Cuando un sujeto realiza acciones, van acompa�adas de la captaci�n 
			de las propias intenciones que impulsaron el hacerlas. La acci�n, 
			pues, queda asociada a la intenci�n que la puso en marcha.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">&nbsp;</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">El problema surge cuando asociamos 
			nuestras intenciones a las acciones de los dem�s: Si yo s� que 
			cuando hago X es por Y, entonces cuando tu haces Y seguro que es por 
			X.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Debemos de hacer conciencia de que no 
			podemos estar en la mente de los dem�s, es un error que al observar 
			las acciones de otros les atribuyamos nuestras intenciones.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Un ejemplo puede ser:</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%"><i>
			<span style="color: black">Acci�n:</span></i><span style="color: black"> 
			Llegu� tarde a una reuni�n organizada por mi pareja.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%"><i>
			<span style="color: black">Intenci�n:</span></i><span style="color: black"> 
			Perder tiempo por que la gente que asiste no me cae bien y no quiero 
			pasar mucho tiempo con ellos.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%"><i>
			<span style="color: black">Consecuencia:</span></i><span style="color: black"> 
			Si tiempo despu�s yo organizo una comida con mis amigos, y mi pareja 
			llega tarde, probablemente estar� molesto creyendo que su acci�n 
			comunica su falta de inter�s hacia mis amigos; sin embargo, tal vez 
			ella tuvo alg�n otro problema por el cual no lleg� a tiempo, que no 
			tiene nada que ver con esa intenci�n, que en realidad es m�a. Este 
			problema de intencionalidad afecta constantemente nuestras 
			relaciones.</span></p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="color: black; text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				<b>Diferencias y Similitudes:</b></li>
			</ul>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">El hombre es altamente impredecible en 
			sus respuestas, puede cambiar en sus reacciones y elecciones, ante 
			situaciones aparentemente id�nticas.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Tendemos a presuponer que las personas no 
			cambian, sin embargo el cambio es una constante en el mundo y en los 
			individuos, las situaciones nunca son id�nticas y el cerebro que 
			elige tampoco es el mismo, ya que constantemente aprendemos, cambian 
			nuestras percepciones y deseos.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Las circunstancias influyen en nosotros y 
			el momento que vivimos tambi�n nos determina, por lo que nuestras 
			reacciones se adaptan a las condiciones.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Hay que entender que cada vez que estamos 
			con alguien debemos hacer un esfuerzo por entenderlo&nbsp; en ese 
			momento, en el presente. �Qu� siente ahora y aqu�? �C�mo se 
			desarrolla nuestra relaci�n ahora y aqu�? </span></p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="color: black; text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				<b>Diferentes formas de manejar las emociones</b></li>
			</ul>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Mientras que la expresi�n de las 
			emociones es universal, en la forma en que reacciona el cuerpo y el 
			cerebro; la velocidad, intensidad y duraci�n de las mismas varia de 
			una persona a otra.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Este punto es fundamental para las 
			relaciones, tendemos a creer que las emociones funcionan igual en 
			los dem�s que en nosotros mismos, como sucede con las intenciones, 
			ya que es la referencia m�s real y cercana que encontramos; sin 
			embargo esto provoca una infinidad de problemas. </span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Muchos conflictos y malentendidos se 
			basan en la incomprensi�n del ritmo en que cada uno necesita vivir 
			sus emociones. Un estallido de ira puede tener consecuencias de 
			larga duraci�n en una persona, que provoquen que est� por m�s tiempo 
			propenso a enojarse por algo insignificante; mientras que otra 
			persona puede sobreponerse muy r�pido a la emoci�n, controlarla y 
			dejarla pasar.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Asimilar que existen distintos ritmos y 
			estilos en el manejo de emociones es el punto de partida y aprender 
			a respetarlos es fundamental en el proceso de comunicaci�n 
			interpersonal.</span></p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="color: black; text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				<b>Principio sist�mico de la relaci�n</b></li>
			</ul>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Cuando dos personas logran una relaci�n, 
			es decir que la comunicaci�n trasciende el encuentro casual y se 
			transforma en una comunicaci�n de entendimiento mutuo; se establece 
			entre ellas un sistema.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Ese sistema se puede explicar como la 
			forma particular en que esas personas se comunican y entienden, y a 
			su vez esta determinado por sistemas superiores, como son las 
			familias de ambas, la sociedad en la que viven y su contexto 
			hist�rico.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Muchas veces nos damos cuenta que lo que 
			no pod�amos hacer con una persona nos resulta sumamente sencillo con 
			otra� esto se debe a que las relaciones tienen caracter�sticas 
			sist�micas, las aportaciones que hace cada persona hacen de cada 
			interacci�n un sistema �nico que no se puede reproducir.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Las empresas, por ejemplo, son un 
			sistema; la organizaci�n en la que trabajamos est� construida sobre 
			el conjunto de relaciones de sus miembros. Cada individuo hace su 
			aportaci�n individual y construye el sistema de relaciones global; 
			la entidad que manda en las organizaciones es el resultado de esa 
			suma de relaciones que producen un sistema �nico. Es un error pensar 
			que la organizaci�n ya tiene una forma de funcionar y que las 
			personas no influyen en ella; por el contrario cada individuo forma 
			parte del sistema y lo determina, si faltan individuos o entran 
			nuevos, el sistema forzosamente se modifica. </span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Es decir, la comunicaci�n define el clima 
			organizacional, es altamente probable que si no nos gusta el clima 
			de nuestra empresa sea por que no nos gusta la forma en que nos 
			relacionamos unos con otros y esto es consecuencia de que no nos 
			estamos comunicando adecuadamente, o de forma asertiva.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Si logramos aprender a controlar las 
			relaciones y las gestionamos adecuadamente �el sistema� puede 
			cambiar; aunque parezca que los sistemas toman vida propia y no son 
			modificables, por que generan un clima y una cultura; �ste principio 
			de sist�mico de la relaci�n demuestra&nbsp; que los sistemas son 
			modificables y el cambio depende de la aportaci�n individual de cada 
			uno de sus miembros.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Nos podemos preguntar entonces: �en qu� 
			contribuyo yo para hacer permanente lo bueno y en qu� al hacer 
			permanente lo malo dentro de sistema organizacional?</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Si reflexionamos y hacemos conscientes 
			nuestras aportaciones al sistema, es el principio necesario para 
			lograr un cambio en las relaciones y para modificar aquellas que no 
			nos gustan y que parece que est�n �institucionalizadas�, pero que en 
			realidad son consecuencia de nuestro propio comportamiento.</span></p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="color: black; text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				<b>Principio de la libertad condicional</b></li>
			</ul>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Aunque creemos que nuestras relaciones 
			son libres, por que elegimos con quien nos relacionamos y c�mo nos 
			relacionamos con las personas, incluso las que no elegimos, la 
			realidad es que tenemos una fuerte limitante.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Nuestros aprendizajes y experiencias nos 
			condicionan, todas nuestras conductas y elecciones en las relaciones 
			vienen precedidas por aprendizajes y sobre ellos basamos nuestras 
			creencias y comportamientos futuros.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Los l�mites que tienen nuestras 
			relaciones son entonces consecuencia de nosotros mismos, pero estar 
			condicionado no implica estar determinado y podemos aprender sobre 
			lo aprendido y trascenderlo, sin embargo debemos poner especial 
			atenci�n a nuestras relaciones, para ver qu� conductas repetimos y 
			obstaculizan la buena comunicaci�n.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">&nbsp;</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">As� pues, todos estos principios provocan 
			que en ocasiones, no podamos entendernos; s� estamos comunicando 
			pero la otra persona parece no escucharnos, nos encontramos en una 
			especie de vacio en la comunicaci�n en el cual nos perdemos.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Cuando una relaci�n llega al punto en que 
			no nos podemos entender se produce la descomunicaci�n. 
			Experimentamos&nbsp; una sensaci�n de impotencia y un sentimiento de 
			incomprensi�n.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">El hecho de poder interpretar las 
			acciones de nuestros cong�neres es lo que nos lleva al desastre 
			comunicativo, sobre todo por que a veces nos relacionamos con el 
			otro, no a partir del conocimiento de sus intenciones y deseos, sino 
			a partir de nuestras presuposiciones de lo que creemos son sus 
			intenciones y deseos. Y no s�lo eso: adem�s, contrastamos sus 
			intenciones con las nuestras y en funci�n del resultado valoraos la 
			situaci�n, siendo esta una percepci�n emocional.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">La soluci�n en la mayor�a de los casos de 
			descomunicaci�n es: Preguntar.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Preguntando evitamos presuponer, 
			aclaramos la informaci�n y, lo m�s importante, hacemos pensar al 
			otro sobre sus propios pensamientos.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">En muchas ocasiones no preguntamos porque 
			tendemos a presuponer c�mo reaccionar� la gente ante las preguntas, 
			nos basamos en experiencias pasadas, las cuales no tienen por que 
			repetirse, ya que ning�n momento es id�ntico en forma y fondo; en 
			ocasiones &nbsp;lo que nos frena es una asociaci�n con nuestro propio 
			referente de c�mo reaccionar�amos.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black"><br>
			</span><font color="#FF3300">Descargar este documento en PDF</font><span style="color: black">&nbsp;
			<a href="docs/intro.pdf">
			<img border="0" src="images/pdf.jpg" width="50" height="50"></a></span></td>
		</tr>
		</table>
	</td>
  </tr>
</table>

</body>

</html>