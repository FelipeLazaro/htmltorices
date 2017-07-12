<html>
<head><title>PHP Mail Sender</title></head>
<body>
<?php

/* All form fields are automatically passed to the PHP script through the array $HTTP_POST_VARS. */
$name = $HTTP_POST_VARS['name'];
$email = $HTTP_POST_VARS['email'];
$telefono = $HTTP_POST_VARS['telefono'];
$subject = "Solicitud de Cotizacion de CondorPrint.com.mx";
$message = $HTTP_POST_VARS['message'];

$producto= $HTTP_POST_VARS['producto'];
$cantidad= $HTTP_POST_VARS['cantidad'];
$numpaginas= $HTTP_POST_VARS['numpaginas'];
$medidafinal= $HTTP_POST_VARS['medidafinal'];

$tipopapel= $HTTP_POST_VARS['tipopapel'];
$forros= $HTTP_POST_VARS['forros'];
$interiores= $HTTP_POST_VARS['interiores'];
$otro= $HTTP_POST_VARS['otro'];

$numtintas= $HTTP_POST_VARS['numtintas'];
$forros2= $HTTP_POST_VARS['forros2'];
$interiores2= $HTTP_POST_VARS['interiores2'];

$numtintas= $HTTP_POST_VARS['numtintas'];
$forros2= $HTTP_POST_VARS['forros2'];
$interiores2= $HTTP_POST_VARS['interiores2'];

$encuadernado= $HTTP_POST_VARS['encuadernado'];
$acabado= $HTTP_POST_VARS['acabado'];
$forros3= $HTTP_POST_VARS['forros3'];
$interiores3= $HTTP_POST_VARS['interiores3'];
$otro2= $HTTP_POST_VARS['otro2'];

$texto= "Nombre:  ".$name."\n E-mail:  ".$email."\n Telefono:  ".$telefono."\r\n\n";

$texto= $texto."Producto:  ".$producto."\n";
$texto= $texto."Cantidad:  ".$cantidad."\n";
$texto= $texto."Numero de Paginas e Interiores mas Portadas:  ".$numpaginas."\n";
$texto= $texto."Medida Final del Ejemplar:  ".$medidafinal."\n\n";

$texto= $texto."Tipo de Papel:  ".$tipopapel."\n";
$texto= $texto."Forros:  ".$forros."\n";
$texto= $texto."Interiores:  ".$interiores."\n";
$texto= $texto."Otro:  ".$otro."\n\n";

$texto= $texto."Numero de Tintas:  ".$numtintas."\n";
$texto= $texto."Forros:  ".$forros2."\n";
$texto= $texto."Interiores:  ".$interiores2."\n\n";


$texto= $texto."Tipo de Encuadernado:  ".$encuadernado."\n";
$texto= $texto."Tipo de Acabado:  ".$acabado."\n";
$texto= $texto."Forros:  ".$forros3."\n";
$texto= $texto."Interiores:  ".$interiores3."\n";
$texto= $texto."Otro:  ".$otro2."\n\n";

			




$texto= $texto."Mensaje:  \n".$message;




$info = "impresoscondor@hotmail.com,edgar.torices@gmail.com,randy_cortes@hotmail.com";


/* PHP form validation: the script checks that the Email field contains a valid email address and the Subject field isn't empty. preg_match performs a regular expression match. It's a very powerful PHP function to validate form fields and other strings - see PHP manual for details. */
if (!preg_match("/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/", $email)) {
  echo "<h4>Direccion de correo invalida intentalo de nuevo. Gracias.</h4>";
  echo "<a href='javascript:history.back(1);'>Back</a>";
} elseif ($subject == "") {
  echo "<h4>No especificaste asunto por favor llenar el campo. Gracias.</h4>";
  echo "<a href='javascript:history.back(1);'>Back</a>";
}

/* Sends the mail and outputs the "Thank you" string if the mail is successfully sent, or the error string otherwise. */
elseif (mail($info,$subject,$texto)) {
  echo "<h4>Tu cotizacion ha sido enviado correctamente</h4>";
  echo "<a href='index.html'>Inicio</a>";
  

} else {
  echo "<h4>Lo sentimos por el momento no esta disponible esta funcion, te sugerimos intentar mas tarde, Disculpa las molestias y gracias por tu comprension.</h4>";
}
?>
</html>
