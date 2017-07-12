<?
require_once('PHPMailer/class.phpmailer.php');

$mail             = new PHPMailer();
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.condorprint.com.mx"; // sets the SMTP server
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "mail.condorprint.com.mx"; // sets the SMTP server
$mail->Port       = 25;                    // set the SMTP port for the GMAIL server
$mail->Username   = "soportecondor@condorprint.com.mx"; // SMTP account username
$mail->Password   = "Sistemas2015";        // SMTP account password

$mail->SetFrom('soportecondor@condorprint.com.mx', 'Soporte Condor'); //DirecciÃ³n del Remitente

$mail->AddAddress("contacto@condorprint.com.mx","Cotizaciones"); //DirecciÃ³n del Destinatario
$mail->AddAddress("impresoscondor@hotmail.com"); //DirecciÃ³n del Destinatario
$mail->AddAddress($_REQUEST["mail"]); //Copia al usuario de Internet

// $mail->AddAddress("cotizaciones@condorprint.com.mx","Cotizaciones"); //Aqui se puede agregar otro destinatario

$mail->Subject = "CONTACTO DE INTERNET ". $_REQUEST["nombre"];

					$cuerpo = '<html> <head> 
					    <title>Contacto de visitante en Internet</title> 
						</head> <body><center>
						<h1>condorprint.com.mx</h1> ';
												 
					$cuerpo .= "<table width='70%'  border='2' cellspacing='3' cellpadding='3'>";
					$cuerpo .= "<tr><td>Nombre</td><td>".$_REQUEST["nombre"]."</td></tr>";
					$cuerpo .= "<tr><td>E-mail</td><td>".$_REQUEST["mail"]."</td></tr>";
					$cuerpo .= "<tr><td>Asunto</td><td>".$_REQUEST["asunto"]."</td></tr>";
					$cuerpo .= "<tr><td>Mensaje</td><td>".$_REQUEST["mensaje"]."</td></tr>";
					
					$cuerpo .= "</table></center><br><br>";
					
					$cuerpo .= '</body> </html> '; 
									
$mail->MsgHTML($cuerpo);

if(!$mail->Send()) {
  echo "Error de envio de correo: " . $mail->ErrorInfo;
} else {
  header('Location: index.html');  
}
?>