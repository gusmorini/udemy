<?php

function pula()
{
	echo '<br>';
}

function titulo($n)
{
	echo "<h1>$n</h1>";
}

titulo('Classe Pessoa');

class Pessoa
{
	//atributos
	public $nome;

	//métodos
	public function falar ()
	{
		return "O meu nome é ". $this->nome;
	}
}


$p = new Pessoa();
$p->nome = 'Gustavo Morini';
echo $p->falar();

titulo('Classe Carro');

class Carro
{
	private $modelo;
	private $motor;
	private $ano;
	
	//seters
	public function setModelo($i)
	{
		$this->modelo = $i;
	}
	public function setMotor($i)
	{
		$this->motor = ($i);
	}
	public function setAno($i)
	{
		$this->ano = ($i);
	}

	//geters
	public function getModelo()
	{
		return $this->modelo;
	}
	public function getMotor()
	{
		return $this->motor;
	}
	public function getAno():int
	{
		return $this->ano;
	}

	public function exibir()
	{
		return array(
			'modelo'=>$this->getModelo(),
			'motor'=>$this->getMotor(),
			'ano'=>$this->getAno()
		);
	}

}

$c = new Carro();
$c->setModelo('Uno Mille');
$c->setMotor('1.0 Fire');
$c->setAno('2013');

var_dump($c->exibir());

titulo('Classe Documento');

class Documento
{
	private $numero;

	public function getNumero()
	{
		return $this->numero;
	}
	public function setNumero($n)
	{
		$res = Documento::validarCPF($n);
		if ($res === false)
		{
			throw new Exception("CPF informado não é válido", 1);
		}
		$this->numero = $n;
	}

	public static function validarCPF($cpf):bool
	{
	 	if(empty($cpf))
	 	{
	        return false;
	    }
	    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
	    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
	    if (strlen($cpf) != 11)
	    {
	        echo "length";
	        return false;
	    }
	    else if ($cpf == '00000000000' || 
	        $cpf == '11111111111' || 
	        $cpf == '22222222222' || 
	        $cpf == '33333333333' || 
	        $cpf == '44444444444' || 
	        $cpf == '55555555555' || 
	        $cpf == '66666666666' || 
	        $cpf == '77777777777' || 
	        $cpf == '88888888888' || 
	        $cpf == '99999999999')
	    {
	    	return false;
	    } 
	    else
	    {   
	         
	        for ($t = 9; $t < 11; $t++)
	        {
	             
	            for ($d = 0, $c = 0; $c < $t; $c++)
	            {
	                $d += $cpf{$c} * (($t + 1) - $c);
	            }
	            $d = ((10 * $d) % 11) % 10;
	            if ($cpf{$c} != $d)
	            {
	                return false;
	            }
	        }
	 
	        return true;
	    }
	}
}


$cpf = new Documento();
$cpf->setNumero('00801582938');
var_dump($cpf);

titulo('Método Mágico');

class Endereco
{
	private $estado;
	private $cidade;
	private $bairro;

	public function __construct($e,$c,$b)
	{
		$this->estado = $e;
		$this->cidade = $c;
		$this->bairro = $b;
	}
	public function __destruct()
	{
		echo '<br> ... método destruidor executado';
	}
	public function __toString():string
	{
		return $this->bairro.", ".$this->cidade.", ".$this->estado;
	}
}

$end = new Endereco('pr','maria helena','centro');
print_r($end);
pula();
echo $end;