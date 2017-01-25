<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="0" cellspacing="0" cellpadding="0" width="600" align="center">
		<tr>
			<td colspan="4" align="center"><img src="http://graphicsandcode.com/redtranet/img/logo_azul.png"/></td>
		</tr>
		<tr>
			<td width="17"></td>
			<td width="569" colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">
				<p style="margin:5px 0;">Usuario: '.$nombre.'</p>
				<p style="margin:5px 0;">&nbsp;</p>
				<div style="margin:5px 0; white-space: pre-wrap;">'.$mensaje.'</div>
				<p style="margin:5px 0;">&nbsp;</p>
				<p style="margin:5px 0;">Email:</p>
				<p style="margin:5px 0;">'.$email.'</p>
				<p style="margin:5px 0;">Telefono:</p>
				<p style="margin:5px 0;">'.$telefono.'</p>
			</td>
			<td width="14"></td>
		</tr>
  </table>
</body>
</html>
';
include("vendor/autoload.php");
$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
$mail->isSMTP();
$mail->Host = 'smtp.sendgrid.net';
$mail->SMTPAuth = true;
$mail->Username = 'antonio.becerra@grupomedios.com';
$mail->Password = '\@D7ctdg.jQk#NjF';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->setFrom('contacto@redtranet.com.mx', 'Contacto Redtranet');
$mail->addAddress('jbecerraromero@gmail.com', 'Pepe Becerra');
$mail->addAddress('misael.azamar.ramos@gmail.com', 'Misael Azamar');
$mail->addAddress('contacto@redtranet.com.mx', 'Contacto REdtranet');
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Contacto desde redtranet.com.mx';
$mail->Body    = $html;
if(!$mail->send()) {
    echo 'error';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'success';
}
?>
