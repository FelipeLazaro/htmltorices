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
			<p class="MsoNormal" style="text-align:justify;line-height:150%"><b>
			LECTURA</b></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Estudios sobre problemas en el trabajo 
			demuestran que cuatro de cada cinco problemas son causados por una 
			mala o deficiente comunicaci�n.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">La experiencia nos demuestra que muchas 
			personas, incluso excelentes profesionales t�cnicos, personal con 
			una enorme val�a en su trabajo son p�simos comunicadores. En muchos 
			casos no son conscientes de la importancia de la comunicaci�n en su 
			trabajo. Les interesa el tornillo, el proyecto, el producto, el 
			dato, pero no demasiado las personas que deben apretar el tornillo, 
			realizar el proyecto, acabar el producto, anotar el dato.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Si esas personas, que pueden ser jefes, o 
			trabajar en un �mbito donde se maneja mucha informaci�n necesaria 
			para otras personas, no tienen conciencia de que la comunicaci�n 
			forma parte de su trabajo, estar�n en una posici�n privilegiada para 
			generar m�ltiples problemas.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">�Por qu� raz�n&nbsp; en bastantes casos esa 
			falta de conciencia del papel de la comunicaci�n genera conflictos y 
			problemas? Sucede que hay personas que informan pero que no 
			escuchan, personas que mandan pero no dirigen, personas que creen 
			que lo importante �es lo suyo� y lo de los dem�s es secundario y 
			puede esperar.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Ignorar el papel de la comunicaci�n 
			produce errores, fallos, retrasos, esperas, disculpas, pretextos, 
			mala o nula atenci�n al cliente, problemas o conflictos con 
			compa�eros del grupo de trabajo, con jefes o subordinados, con 
			personal de otros departamentos.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Ya hemos revisado 3 de los principios de 
			Xavier Guix, como las principales interferencias de la comunicaci�n 
			en las relaciones interpersonales:</span></p>
			<p class="MsoListParagraphCxSpFirst" style="text-align: justify; text-indent: -18.0pt; line-height: 150%">
			<span style="font-family: Symbol; color: black">�<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></span><span style="color: black">Principio de la 
			Intencionalidad</span></p>
			<p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -18.0pt; line-height: 150%">
			<span style="font-family: Symbol; color: black">�<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></span><span style="color: black">Principio de las 
			Diferencias Similitudes</span></p>
			<p class="MsoListParagraphCxSpLast" style="text-align: justify; text-indent: -18.0pt; line-height: 150%">
			<span style="font-family: Symbol; color: black">�<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></span><span style="color: black">Principio de los diferentes 
			estilos afectivos</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">A continuaci�n mencionaremos otros de los 
			obst�culos m�s importantes para las relaciones. La intenci�n de 
			conocer estas interferencias y que logremos hacer conciencia acerca 
			de los principales problemas que nos impiden comunicarnos 
			adecuadamente, es lograr sobre esa conciencia un aprendizaje de 
			herramientas que nos ayuden en un cambio real hacia una mejor 
			comunicaci�n en nuestro ambiente laboral y nuestra vida.</span></p>
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
			sist�micas, las aportaciones que hace cada persona, hacen de cada 
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
			relaciones y las gestionamos adecuadamente, �el sistema� puede 
			cambiar; aunque parezca que los sistemas toman vida propia y no son 
			modificables, por que generan un clima y una cultura; �ste principio 
			demuestra&nbsp; que los sistemas son modificables y el cambio depende de 
			la aportaci�n individual de cada uno de sus miembros.</span></p>
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
			atenci�n a nuestras relaciones, para ver cu�les conductas que 
			repetimos obstaculizan la buena comunicaci�n.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">As� pues, todos estos principios provocan 
			que en ocasiones que no podamos entendernos; estamos comunicando 
			pero la otra persona parece no escucharnos, nos encontramos en una 
			especie de vacio en la comunicaci�n en el cual nos perdemos.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Cuando una relaci�n llega al punto en que 
			no nos podemos entender, se produce la descomunicaci�n. 
			Experimentamos&nbsp; una sensaci�n de impotencia y un sentimiento de 
			incomprensi�n.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">�Cu�ntas veces no le ha sucedido en su 
			trabajo que siente que su jefe o sus compa�eros de trabajo no lo 
			entienden? o �cu�ntas veces ha tenido problemas por que entendi� 
			algo distinto a lo que su jefe pretend�a expresar?</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">El hecho de poder interpretar las 
			acciones de nuestros cong�neres es lo que nos lleva al desastre 
			comunicativo, sobre todo por que a veces nos relacionamos con el 
			otro, no a partir del conocimiento de sus intenciones y deseos, sino 
			a partir de nuestras presuposiciones de lo que creemos son sus 
			intenciones y deseos. Y no s�lo eso: adem�s, contrastamos sus 
			intenciones con las nuestras y en funci�n del resultado valoramos la 
			situaci�n, siendo �sta una percepci�n emocional.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Ejemplo: </span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Jefe: Ya me tengo que ir a la reuni�n de 
			las cuatro, y ya no me dio tiempo de terminar el documento, de 
			cualquier forma hay que tenerlo listo sin falta para ma�ana.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Colaborador: Hasta luego, suerte en la 
			reuni�n.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Al d�a siguiente:</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Jefe: Me puedes dar el documento 
			terminado</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Colaborador: No lo tengo</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">Jefe: �C�mo!, pens� que lo ibas a hacer, 
			por que te coment� que estaba muy apurado y yo no ten�a tiempo.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">La clave para resolver gran parte de 
			estos problemas la tenemos en todo momento a nuestro alcance y es 
			sumamente sencilla:</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">�Preguntar! Preguntando evitamos 
			presuponer, aclaramos la informaci�n y, lo m�s importante, hacemos 
			pensar al otro sobre sus propios pensamientos.</span></p>
			<p class="MsoNormal" style="text-align:justify;line-height:150%">
			<span style="color: black">En muchas ocasiones no preguntamos porque 
			tendemos a presuponer c�mo reaccionar� la gente ante las preguntas, 
			nos basamos en experiencias pasadas, las cuales no tienen por que 
			repetirse, ya que ning�n momento es id�ntico en forma y fondo; en 
			otras ocasiones &nbsp;lo que nos frena es una asociaci�n con nuestro 
			propio referente de c�mo reaccionar�amos, lo cual tambi�n esta 
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