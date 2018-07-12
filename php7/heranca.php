<h1>Herança</h1>

<?php

/*  HERANÇA */

class Documento
{
	private $numero;

	public function getNumero()
	{
		return $this->numero;
	}
	public function setNumero($n)
	{
		$this->numero = $n;
	}
}//documento

class CPF extends Documento
{
	public function validar():bool
	{
		//validação CPF
		return true;
	}
}

class CNPJ extends Documento
{
	public function validar():bool
	{
		//validação CNPJ
		return true;
	}
}

$doc = new CPF();
$doc->setNumero('00801582938');
if($doc->validar())
{
	echo 'cpf: '.$doc->getNumero().' válido';
}

$doc2 = new CNPJ();
$doc2->setNumero('11669155000131');
if($doc2->validar())
{
	echo "<br> cnpj: ".$doc2->getNumero()." válido";
}