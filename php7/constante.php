<?php

	/*
	Existe uma convensão de criar sempre constantes
	com letras em maiúsculo
	*/

	define('SERVIDOR','127.0.0.1');
	echo SERVIDOR;

	/*
	à partir do php 7 é possivel criar constante de arrays
	*/

	define ('BANCO_DE_DADOS',[
		'127.0.0.1',
		'root',
		'password',
		'bdteste'
	]);

	print_r(BANCO_DE_DADOS);

	/*
	exemplo de constantes da propria linguaguem;
	Lista completa das contantes do sistema:
	http://php.net/manual/pt_BR/info.constants.php
	*/

	echo 'versão do PHP'.PHP_VERSION;
	echo phpcredits();