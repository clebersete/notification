<?php
	require __DIR__.'/lib_ext/autoload.php';

	use notification\Email;

	$novoEmail = new Email;
	$novoEmail->sendMail("Assunto de Teste", "<p>Esse eh um e-mail de <b>teste</b>", "carneirosete@gmail.com", "Cleber Sete", "carneirosete@gmail.com", "Sete");

	var_dump($novoEmail);
