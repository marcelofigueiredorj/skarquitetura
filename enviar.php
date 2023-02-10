<?php
	$to = "suporte@marcelotech.net"; //destinário que receberá o e-mail

	$assunto = "Formulário do site";

	$mensagem  = "Mensagem: ".$_POST['mensagem']; 
	$mensagem .= "<br>"; 
	$mensagem .= "Enviado por: ".$_POST['nome'];

	$email = $_POST['email']; //remetente

	$headers  = "MIME-Version: 1.1\n";
	$headers .= "Content-type: text/html; charset=utf-8\n";
	$headers .= "To: $to\n";
	$headers .= "From: $email\n";
	$headers .= "Reply-To: $email\n";
	


	mail($to, $assunto, $mensagem, $headers, $from);
	header('Location:obrigado.html')
	
?>