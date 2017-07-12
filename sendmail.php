<?
require_once('PHPMailer/class.phpmailer.php');

//error_reporting(E_ALL);
error_reporting(E_STRICT);

$mail             = new PHPMailer();
$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "mail.condorprint.com.mx"; // sets the SMTP server
$mail->Port       = 25;                    // set the SMTP port for the GMAIL server
$mail->Username   = "soportecondor@condorprint.com.mx"; // SMTP account username
$mail->Password   = "Sistemas2015";        // SMTP account password

$mail->SetFrom('soportecondor@condorprint.com.mx', 'Soporte Condor');

$mail->AddAddress("tribi68@hotmail.com","Jaime Ocampo");

$mail->Subject = "CONTACTO DE INTERNET ". $_REQUEST["nombre"];

					$cuerpo = '<html> <head> 
					    <title>Contacto de visitante en Internet</title> 
						</head> <body><center>
						<h1>condorprint.com.mx</h1> ';
												 
					$cuerpo .= "<table width='70%'  border='2' cellspacing='3' cellpadding='3'>";
					$cuerpo .= "<tr><td>Nombre</td><td>".$_REQUEST["nombre"]."</td></tr>";
					$cuerpo .= "<tr><td>Empresa</td><td>".$_REQUEST["empresa"]."</td></tr>";
					$cuerpo .= "<tr><td>e-mail</td><td>".$_REQUEST["mail"]."</td></tr>";
					$cuerpo .= "<tr><td>Mensaje</td><td>".$_REQUEST["comentarios"]."</td></tr>";
					
					$cuerpo .= "</table></center><br><br>";
					
					$cuerpo .= '</body> </html> '; 
									
$mail->MsgHTML($cuerpo);

if(!$mail->Send()) {
  echo "Error de envio de correo: " . $mail->ErrorInfo;
} else {
  echo "Correo Enviado!";
}

?>