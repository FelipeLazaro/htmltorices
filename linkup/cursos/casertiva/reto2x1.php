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
			<p class="MsoNormal" style="text-align:justify;line-height:150%"><b>
			LECTURA</b></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Estudios sobre problemas en el trabajo 
			demuestran que cuatro de cada cinco problemas son causados por una 
			mala o deficiente comunicación.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">La experiencia nos demuestra que muchas 
			personas, incluso excelentes profesionales técnicos, personal con 
			una enorme valía en su trabajo son pésimos comunicadores. En muchos 
			casos no son conscientes de la importancia de la comunicación en su 
			trabajo. Les interesa el tornillo, el proyecto, el producto, el 
			dato, pero no demasiado las personas que deben apretar el tornillo, 
			realizar el proyecto, acabar el producto, anotar el dato.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Si esas personas, que pueden ser jefes, o 
			trabajar en un ámbito donde se maneja mucha información necesaria 
			para otras personas, no tienen conciencia de que la comunicación 
			forma parte de su trabajo, estarán en una posición privilegiada para 
			generar múltiples problemas.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">¿Por qué razón&nbsp; en bastantes casos esa 
			falta de conciencia del papel de la comunicación genera conflictos y 
			problemas? Sucede que hay personas que informan pero que no 
			escuchan, personas que mandan pero no dirigen, personas que creen 
			que lo importante ‘es lo suyo’ y lo de los demás es secundario y 
			puede esperar.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Ignorar el papel de la comunicación 
			produce errores, fallos, retrasos, esperas, disculpas, pretextos, 
			mala o nula atención al cliente, problemas o conflictos con 
			compañeros del grupo de trabajo, con jefes o subordinados, con 
			personal de otros departamentos.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Ya hemos revisado 3 de los principios de 
			Xavier Guix, como las principales interferencias de la comunicación 
			en las relaciones interpersonales:</span></p>
			<p class="MsoListParagraphCxSpFirst" style="text-align: justify; text-indent: -18.0pt; line-height: 150%">
			<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></span><span style="color: black">Principio de la 
			Intencionalidad</span></p>
			<p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -18.0pt; line-height: 150%">
			<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></span><span style="color: black">Principio de las 
			Diferencias Similitudes</span></p>
			<p class="MsoListParagraphCxSpLast" style="text-align: justify; text-indent: -18.0pt; line-height: 150%">
			<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></span><span style="color: black">Principio de los diferentes 
			estilos afectivos</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">A continuación mencionaremos otros de los 
			obstáculos más importantes para las relaciones. La intención de 
			conocer estas interferencias y que logremos hacer conciencia acerca 
			de los principales problemas que nos impiden comunicarnos 
			adecuadamente, es lograr sobre esa conciencia un aprendizaje de 
			herramientas que nos ayuden en un cambio real hacia una mejor 
			comunicación en nuestro ambiente laboral y nuestra vida.</span></p>
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
			sistémicas, las aportaciones que hace cada persona, hacen de cada 
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
			relaciones y las gestionamos adecuadamente, “el sistema” puede 
			cambiar; aunque parezca que los sistemas toman vida propia y no son 
			modificables, por que generan un clima y una cultura; éste principio 
			demuestra&nbsp; que los sistemas son modificables y el cambio depende de 
			la aportación individual de cada uno de sus miembros.</span></p>
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
			atención a nuestras relaciones, para ver cuáles conductas que 
			repetimos obstaculizan la buena comunicación.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Así pues, todos estos principios provocan 
			que en ocasiones que no podamos entendernos; estamos comunicando 
			pero la otra persona parece no escucharnos, nos encontramos en una 
			especie de vacio en la comunicación en el cual nos perdemos.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Cuando una relación llega al punto en que 
			no nos podemos entender, se produce la descomunicación. 
			Experimentamos&nbsp; una sensación de impotencia y un sentimiento de 
			incomprensión.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">¿Cuántas veces no le ha sucedido en su 
			trabajo que siente que su jefe o sus compañeros de trabajo no lo 
			entienden? o ¿cuántas veces ha tenido problemas por que entendió 
			algo distinto a lo que su jefe pretendía expresar?</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">El hecho de poder interpretar las 
			acciones de nuestros congéneres es lo que nos lleva al desastre 
			comunicativo, sobre todo por que a veces nos relacionamos con el 
			otro, no a partir del conocimiento de sus intenciones y deseos, sino 
			a partir de nuestras presuposiciones de lo que creemos son sus 
			intenciones y deseos. Y no sólo eso: además, contrastamos sus 
			intenciones con las nuestras y en función del resultado valoramos la 
			situación, siendo ésta una percepción emocional.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Ejemplo: </span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Jefe: Ya me tengo que ir a la reunión de 
			las cuatro, y ya no me dio tiempo de terminar el documento, de 
			cualquier forma hay que tenerlo listo sin falta para mañana.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Colaborador: Hasta luego, suerte en la 
			reunión.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Al día siguiente:</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Jefe: Me puedes dar el documento 
			terminado</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Colaborador: No lo tengo</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Jefe: ¡Cómo!, pensé que lo ibas a hacer, 
			por que te comenté que estaba muy apurado y yo no tenía tiempo.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">La clave para resolver gran parte de 
			estos problemas la tenemos en todo momento a nuestro alcance y es 
			sumamente sencilla:</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">¡Preguntar! Preguntando evitamos 
			presuponer, aclaramos la información y, lo más importante, hacemos 
			pensar al otro sobre sus propios pensamientos.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">En muchas ocasiones no preguntamos porque 
			tendemos a presuponer cómo reaccionará la gente ante las preguntas, 
			nos basamos en experiencias pasadas, las cuales no tienen por que 
			repetirse, ya que ningún momento es idéntico en forma y fondo; en 
			otras ocasiones &nbsp;lo que nos frena es una asociación con nuestro 
			propio referente de cómo reaccionaríamos, lo cual también esta 
			equivocado, por que, como ya vimos, nuestros sentimientos no son los 
			de la otra persona.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<a href="reto2x2.php">Continuar-&gt;</a></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			&nbsp;</p></td>
		</tr>
		</table>
	</td>
  </tr>
</table>

</body>

</html>