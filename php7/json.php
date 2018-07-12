<?php

	$pessoas = array();

	array_push($pessoas, array(
	'nome'=>'Joao',
	'idade'=>20
	),array(
	'nome'=>'Jose',
	'idade'=>25
	));

	print_r($pessoas);

	echo json_encode($pessoas);

	$json = '[{"nome":"Joao","idade":20},{"nome":"Jose","idade":25}]';

	$data = json_decode($json, true);

	print_r($data);

?>