<?php

	/*
		Definindo a localização regional com setlocale.

		Cada sistema operacional aceita de uma forma a codificação
		então por via das dúvidas usar as 3 formas possíveis.

		formatar a data com strftime para a tradução funcionar.
	*/

	setlocale(LC_ALL, 'pt_BR','pt_BR.utf-8','portuguese');

	echo '<h1>Date e Time</h1>';

	function mostra_data($n)
	{
		//return date ('l, d/m/Y',$n);
		return strftime("%A, %d %B %G", $n);
	}

	// strtotime() converte uma string em timestamp

	$stamp = strtotime('1987-08-29');
	echo mostra_data($stamp).'<br><br>';

	$stamp = strtotime('now');
	echo mostra_data($stamp).'<br><br>';	

	$stamp = strtotime('+1 day');
	echo mostra_data($stamp).'<br><br>';	

	$stamp = strtotime('+1 week');
	echo mostra_data($stamp).'<br><br>';	

	$stamp = strtotime('+2 week');
	echo mostra_data($stamp).'<br><br>';	

	$stamp = strtotime('+1 year');
	echo mostra_data($stamp).'<br><br>';

	echo "<h1>Função DateTime() </h1>";

	// estancia um objeto DateTime
	$dt = new DateTime();

	// estancia um objeto período de tempo
	$periodo = new DateInterval("P5D");

	echo 'Data Atual: '.$dt->format('d/m/Y H:i:s').'<br>';

	$dt->add($periodo);

	echo 'Data Atual + 5 dias: '.$dt->format('d/m/Y H:i:s').'<br>';