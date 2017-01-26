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
$from = new SendGrid\Email("Contacto Redtranet", "contacto@redtranet.com.mx");
$subject = 'Contacto desde redtranet.com.mx';
$to = new SendGrid\Email("Misael Azamar ", "misael.azamar.ramos@gmail.com");
$content = new SendGrid\Content("text/html", $html);
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = base64_decode("U0cueExRTl83Y3pRVEc4LTRqdEhIellZZy5qVjNSQUVCZ2pGNzQ4T2ZuTmkwNXNwSXlKV1NhOVJHbU83ZkZHM1NqeHVB");
$sg = new \SendGrid($apiKey);
$response = $sg->client->mail()->send()->post($mail);
?>
