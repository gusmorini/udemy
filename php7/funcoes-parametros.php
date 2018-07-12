<?php

	echo '<h1>Parâmetros por referência</h1>'; 

	$pessoa = array(
		'nome'=>'Gustavo',
		'idade'=>25,
		'sexo'=>'masculino'
	);

	print_r($pessoa);

	echo '<br>';

	/*
		O "&" antes do parâmetro significa que o parâmetro é por referência
		que troca o valor da variável em questão até fora do escopo da função.
	*/

	foreach ($pessoa as &$value) {

		if(gettype($value) === 'integer'){
			$value += 5;
		}

		echo $value.'<br>';
	}

	print_r($pessoa);

	echo '<h1>Multiplos parâmetros com (...) </h1>'; 

	/*
		depois do php 7 é possivel criar funcções com (n) parâmetros
		com o uso do (...)
	*/

	function soma(int ... $valores)
	{

		//array_sum é uma função que soma automativamente um array
		return array_sum($valores);
	}

	echo soma(25,10);
	echo '<br>'.soma(10,10);

	echo '<h1>Expecificar o tipo da saída da função</h1>';

	/*
	dentro da função os dados entram como int o calculo é feito e no
	final o resultado é convertido em string
	*/

	function soma2 (int ... $n):string 
	{
		return array_sum($n);
	}

	echo var_dump(soma2(10,10));

	echo '<h1>Funções recursivas</h1>';

	/*
	função recursiva é a função que chama ela mesma
	*/

	$hierarquia = array(
		//ceo
		array(
			'nome_cargo'=>'CEO',
			'subordinados'=>array(
				//diretores
				array(
					'nome_cargo'=>'Diretor Comercial',
					'subordinados'=>array(
						//gerente comercial
						array(
							'nome_cargo'=>'Gerente Comercial',
							'subordinados'=>array(
								//funcionarios comercial
								array('nome_cargo'=>'Funcionario Comercial 01'),
								array('nome_cargo'=>'Funcionario Comercial 02'),
								array('nome_cargo'=>'Funcionario Comercial 03'),
								array('nome_cargo'=>'Funcionario Comercial 04')
							)
						)
					)
				),
				array(
					'nome_cargo'=>'Diretor Financeiro',
					'subordinados'=>array(
						//gerente financeiro
						array(
							'nome_cargo'=>'Gerente Financeiro',
							'subordinados'=>array(
								// funcionarios financeiro
								array('nome_cargo'=>'Funcionario Financeiro 01'),
								array('nome_cargo'=>'Funcionario Financeiro 02'),
								array('nome_cargo'=>'Funcionario Financeiro 03')
							)
						)
					)
				)
			)
		)
	);

	//print_r($hierarquia);

	function exibe($cargos)
	{
		$html = '<ul>';

		foreach ($cargos as $cargo)
		{
			
			$html .= '<li>';
			$html .= $cargo['nome_cargo'];

			// agora que será usado o recurso recursivo
			// a função chama ela mesma

			if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0)
			{
				$html .= exibe($cargo['subordinados']);
			}

			$html .= '</li>';
		}

		$html .= '</ul>';
		return $html;
	}

	echo exibe($hierarquia);

	echo '<h1>Funções Anônimas (callback) </h1>';

	/*
		funções anônimas, não tem nome e não tem return
	*/

	$fn = function($a)
	{
		var_dump($a);
	};

	$fn('teste funções anônimas');