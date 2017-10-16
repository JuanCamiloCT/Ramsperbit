<?php
$msg = null;
if (isset($_POST["phpmailer"])) {
	$nombre = htmlspecialchars($_POST["nombre"]);
	$email = htmlspecialchars($_POST["email"]);
	$asunto = htmlspecialchars($_POST["asunto"]);
	$mensaje = $_POST["mensaje"];
	$adjunto = $_FILES["adjunto"];

	require "class.phpmailer.php";

	$mail = new PHPMailer;
	$mail->Host = "localhost";
	$mail->From = "destiven99@gmail.com";
	$mail->FromName = "Administrador";
	$mail->Subject = $asunto;
	$mail->addAddress($email, $nombre);
	$mail->MsgHTML($mensaje);

	if ($adjunto["size"] > 0) {
	 $mail->addAttachment($adjunto["tmp_name"], $adjunto["name"]);
	}

	if ($mail->Send()) {
		$msg = "Enhorabuena email enviado con exito";
	}
	else
	{
		$msg = "Ha ocorrido un error al enviar email a $email";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Enviar correo</title>
</head>
<body>
<h1>Enviar correo electronico</h1>
<strong><?php echo $msg; ?></strong>
<form method="POST" enctype="multipart/form-data" >
	<table>
		<tr>
			<td>Nombre del destinatario: </td>
			<td><input type="text" name="nombre"></td>
		</tr>
		<tr>
			<td>Email del destinatario: </td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Asunto: </td>
			<td><input type="text" name="asunto"></td>
		</tr>
		<tr>
			<td>Adjuntar: </td>
			<td><input type="file" name="adjunto"></td>
		</tr>
		<tr>
			<td>Mensaje: </td>
			<td><textarea name="mensaje" cols="30" rows="10"></textarea></td>
		</tr>
	</table>
	<input type="hidden" name="phpmailer">
	<input type="submit" value="enviar formulario">

</form>
</body>
</html>