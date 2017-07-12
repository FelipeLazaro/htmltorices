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
			<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:150%"><b>INFORMACIÓN: COMUNICACIÓN ASERTIVA</b></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			Usted está a punto de comenzar un curso de capacitación virtual, el 
			cual tiene como objetivo revisar el tema de la comunicación 
			asertiva, de una forma amena, práctica y útil.</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">La 
			comunicación humana es un tema fascinante, vasto y complejo, 
			comunicar ideas y sentimientos es algo tan básico que a menudo lo 
			damos por supuesto. ¿Comunicar? ¿Cuál es el problema? Pues 
			precisamente ese es el problema. Una parte importante de los asuntos 
			humanos se ve afectada directamente por las dificultades en la 
			comunicación. Gran parte de los problemas cotidianos de individuos, 
			grupos, organizaciones y Estados están relacionados con la 
			comunicación.</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">La 
			buena noticia es que las competencias comunicativas se aprenden y se 
			construyen día a día; si se tiene disposición y voluntad de aprender 
			la habilidad de comunicarse asertivamente aumenta y trae consigo 
			asombrosos resultados. </p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">El 
			presente curso te ayudará a desarrollar esas habilidades 
			comunicativas y a entender mejor la comunicación desde una 
			perspectiva analítica; te aconsejamos que además de divertirte en la 
			competencia que se te presenta, abras tu mente al aprendizaje que el 
			curso te ofrece, analices las preguntas y los retos, y tengas en 
			cuenta que todos los temas son aplicables a tu trabajo cotidiano.</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">Ser 
			comunicativamente competente es una de las habilidades más valoradas 
			en el mundo actual, por que un buen comunicador escucha, se expresa 
			con claridad y es capaz de convertir grandes problemas en grandes 
			oportunidades. Nada está más condenado al fracaso que dos personas o 
			dos equipos que se esfuerzan en no comunicarse, en no entenderse, en 
			no aceptarse…</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">Uno 
			de los puntos centrales de este curso se centra en cómo manejamos 
			nuestras relaciones y más concretamente en la interferencias que 
			puede haber en la comunicación.</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			Partimos de la premisa de que no existe una buena o mala 
			comunicación, mucha o poca; sino que ¡Todo es Comunicación! 
			Actividad o inactividad, palabras o silencio, tienen siempre un 
			valor de mensaje, influyen sobre los demás, quienes a su vez 
			reaccionan frente a los mensajes y comunican de vuelta.</p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">“No 
			se puede no comunicar”, los mensajes nunca dejan de circular. 
			Podríamos decir que la comunicación no es algo que suceda en la 
			realidad, sino que la realidad se construye en la comunicación. 
			Todas nuestras experiencias e interacciones suceden en la 
			comunicación, esto es real incluso en la comunicación intrapersonal, 
			aquella que tenemos con nosotros mismos, es un diálogo interno y 
			depende de cómo lo manejemos, el impacto que tiene. </p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">Si 
			desapareciera la comunicación no habría un referente para explicar 
			la realidad, no existiría consenso ni entendimiento. La comunicación 
			es una comunión, nos mantiene unidos por que nos relaciona. </p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">La comunicación no es fácil o difícil, es 
			simplemente comunicación; somos las personas las que podemos 
			agilizar o complicar el proceso comunicativo.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Hay muchos factores que pueden 
			obstaculizar la comunicación, pero cuando se trata de los problemas 
			que interfieren en las relaciones, es decir en la comunicación que 
			depende de las personas y su forma de abordar los problemas, 
			mencionaremos los principios de Xavier Guix, como las principales 
			interferencias de la comunicación en las relaciones interpersonales:</span></p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="color: black; text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				<b>Intencionalidad:</b></li>
			</ul>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">No hacemos nada por que sí. Lo hacemos 
			por que tenemos intenciones, sean conscientes o inconscientes. 
			Cuando un sujeto realiza acciones, van acompañadas de la captación 
			de las propias intenciones que impulsaron el hacerlas. La acción, 
			pues, queda asociada a la intención que la puso en marcha.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">&nbsp;</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">El problema surge cuando asociamos 
			nuestras intenciones a las acciones de los demás: Si yo sé que 
			cuando hago X es por Y, entonces cuando tu haces Y seguro que es por 
			X.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Debemos de hacer conciencia de que no 
			podemos estar en la mente de los demás, es un error que al observar 
			las acciones de otros les atribuyamos nuestras intenciones.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Un ejemplo puede ser:</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%"><i>
			<span style="color: black">Acción:</span></i><span style="color: black"> 
			Llegué tarde a una reunión organizada por mi pareja.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%"><i>
			<span style="color: black">Intención:</span></i><span style="color: black"> 
			Perder tiempo por que la gente que asiste no me cae bien y no quiero 
			pasar mucho tiempo con ellos.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%"><i>
			<span style="color: black">Consecuencia:</span></i><span style="color: black"> 
			Si tiempo después yo organizo una comida con mis amigos, y mi pareja 
			llega tarde, probablemente estaré molesto creyendo que su acción 
			comunica su falta de interés hacia mis amigos; sin embargo, tal vez 
			ella tuvo algún otro problema por el cual no llegó a tiempo, que no 
			tiene nada que ver con esa intención, que en realidad es mía. Este 
			problema de intencionalidad afecta constantemente nuestras 
			relaciones.</span></p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="color: black; text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				<b>Diferencias y Similitudes:</b></li>
			</ul>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">El hombre es altamente impredecible en 
			sus respuestas, puede cambiar en sus reacciones y elecciones, ante 
			situaciones aparentemente idénticas.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Tendemos a presuponer que las personas no 
			cambian, sin embargo el cambio es una constante en el mundo y en los 
			individuos, las situaciones nunca son idénticas y el cerebro que 
			elige tampoco es el mismo, ya que constantemente aprendemos, cambian 
			nuestras percepciones y deseos.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Las circunstancias influyen en nosotros y 
			el momento que vivimos también nos determina, por lo que nuestras 
			reacciones se adaptan a las condiciones.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Hay que entender que cada vez que estamos 
			con alguien debemos hacer un esfuerzo por entenderlo&nbsp; en ese 
			momento, en el presente. ¿Qué siente ahora y aquí? ¿Cómo se 
			desarrolla nuestra relación ahora y aquí? </span></p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="color: black; text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				<b>Diferentes formas de manejar las emociones</b></li>
			</ul>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Mientras que la expresión de las 
			emociones es universal, en la forma en que reacciona el cuerpo y el 
			cerebro; la velocidad, intensidad y duración de las mismas varia de 
			una persona a otra.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Este punto es fundamental para las 
			relaciones, tendemos a creer que las emociones funcionan igual en 
			los demás que en nosotros mismos, como sucede con las intenciones, 
			ya que es la referencia más real y cercana que encontramos; sin 
			embargo esto provoca una infinidad de problemas. </span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Muchos conflictos y malentendidos se 
			basan en la incomprensión del ritmo en que cada uno necesita vivir 
			sus emociones. Un estallido de ira puede tener consecuencias de 
			larga duración en una persona, que provoquen que esté por más tiempo 
			propenso a enojarse por algo insignificante; mientras que otra 
			persona puede sobreponerse muy rápido a la emoción, controlarla y 
			dejarla pasar.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Asimilar que existen distintos ritmos y 
			estilos en el manejo de emociones es el punto de partida y aprender 
			a respetarlos es fundamental en el proceso de comunicación 
			interpersonal.</span></p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="color: black; text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				<b>Principio sistémico de la relación</b></li>
			</ul>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Cuando dos personas logran una relación, 
			es decir que la comunicación trasciende el encuentro casual y se 
			transforma en una comunicación de entendimiento mutuo; se establece 
			entre ellas un sistema.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Ese sistema se puede explicar como la 
			forma particular en que esas personas se comunican y entienden, y a 
			su vez esta determinado por sistemas superiores, como son las 
			familias de ambas, la sociedad en la que viven y su contexto 
			histórico.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Muchas veces nos damos cuenta que lo que 
			no podíamos hacer con una persona nos resulta sumamente sencillo con 
			otra… esto se debe a que las relaciones tienen características 
			sistémicas, las aportaciones que hace cada persona hacen de cada 
			interacción un sistema único que no se puede reproducir.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Las empresas, por ejemplo, son un 
			sistema; la organización en la que trabajamos está construida sobre 
			el conjunto de relaciones de sus miembros. Cada individuo hace su 
			aportación individual y construye el sistema de relaciones global; 
			la entidad que manda en las organizaciones es el resultado de esa 
			suma de relaciones que producen un sistema único. Es un error pensar 
			que la organización ya tiene una forma de funcionar y que las 
			personas no influyen en ella; por el contrario cada individuo forma 
			parte del sistema y lo determina, si faltan individuos o entran 
			nuevos, el sistema forzosamente se modifica. </span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Es decir, la comunicación define el clima 
			organizacional, es altamente probable que si no nos gusta el clima 
			de nuestra empresa sea por que no nos gusta la forma en que nos 
			relacionamos unos con otros y esto es consecuencia de que no nos 
			estamos comunicando adecuadamente, o de forma asertiva.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Si logramos aprender a controlar las 
			relaciones y las gestionamos adecuadamente “el sistema” puede 
			cambiar; aunque parezca que los sistemas toman vida propia y no son 
			modificables, por que generan un clima y una cultura; éste principio 
			de sistémico de la relación demuestra&nbsp; que los sistemas son 
			modificables y el cambio depende de la aportación individual de cada 
			uno de sus miembros.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Nos podemos preguntar entonces: ¿en qué 
			contribuyo yo para hacer permanente lo bueno y en qué al hacer 
			permanente lo malo dentro de sistema organizacional?</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Si reflexionamos y hacemos conscientes 
			nuestras aportaciones al sistema, es el principio necesario para 
			lograr un cambio en las relaciones y para modificar aquellas que no 
			nos gustan y que parece que están “institucionalizadas”, pero que en 
			realidad son consecuencia de nuestro propio comportamiento.</span></p>
			<ul style="margin-top: 0cm; margin-bottom: 0cm" type="disc">
				<li class="MsoNormal" style="color: black; text-align: justify; line-height: 150%; margin-bottom: .0001pt">
				<b>Principio de la libertad condicional</b></li>
			</ul>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Aunque creemos que nuestras relaciones 
			son libres, por que elegimos con quien nos relacionamos y cómo nos 
			relacionamos con las personas, incluso las que no elegimos, la 
			realidad es que tenemos una fuerte limitante.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Nuestros aprendizajes y experiencias nos 
			condicionan, todas nuestras conductas y elecciones en las relaciones 
			vienen precedidas por aprendizajes y sobre ellos basamos nuestras 
			creencias y comportamientos futuros.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Los límites que tienen nuestras 
			relaciones son entonces consecuencia de nosotros mismos, pero estar 
			condicionado no implica estar determinado y podemos aprender sobre 
			lo aprendido y trascenderlo, sin embargo debemos poner especial 
			atención a nuestras relaciones, para ver qué conductas repetimos y 
			obstaculizan la buena comunicación.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">&nbsp;</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Así pues, todos estos principios provocan 
			que en ocasiones, no podamos entendernos; sí estamos comunicando 
			pero la otra persona parece no escucharnos, nos encontramos en una 
			especie de vacio en la comunicación en el cual nos perdemos.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Cuando una relación llega al punto en que 
			no nos podemos entender se produce la descomunicación. 
			Experimentamos&nbsp; una sensación de impotencia y un sentimiento de 
			incomprensión.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">El hecho de poder interpretar las 
			acciones de nuestros congéneres es lo que nos lleva al desastre 
			comunicativo, sobre todo por que a veces nos relacionamos con el 
			otro, no a partir del conocimiento de sus intenciones y deseos, sino 
			a partir de nuestras presuposiciones de lo que creemos son sus 
			intenciones y deseos. Y no sólo eso: además, contrastamos sus 
			intenciones con las nuestras y en función del resultado valoraos la 
			situación, siendo esta una percepción emocional.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">La solución en la mayoría de los casos de 
			descomunicación es: Preguntar.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Preguntando evitamos presuponer, 
			aclaramos la información y, lo más importante, hacemos pensar al 
			otro sobre sus propios pensamientos.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">En muchas ocasiones no preguntamos porque 
			tendemos a presuponer cómo reaccionará la gente ante las preguntas, 
			nos basamos en experiencias pasadas, las cuales no tienen por que 
			repetirse, ya que ningún momento es idéntico en forma y fondo; en 
			ocasiones &nbsp;lo que nos frena es una asociación con nuestro propio 
			referente de cómo reaccionaríamos.</span></p>
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