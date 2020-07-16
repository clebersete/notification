<?php
	require __DIR__.'/../lib_ext/autoload.php';

	use notification\Email;

	$novoEmail = new Email(2, "smtp.gmail.com","carneirosete@gmail.com", "test@123", "tls", "587", "carneirosete@gmail.com", "" );
	$novoEmail->sendMail("Assunto de Teste", "<p>Esse eh um e-mail de <b>teste</b>", "carneirosete@gmail.com", "Cleber Sete", "sete@gmail.com", "cleber sete");

	var_dump($novoEmail);
