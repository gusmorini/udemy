<?php 

class Pessoa
{
	/*
		encapsulamento:
		public - o Objeto tem acesso
		protected - O Objeto não tem acesso mas a classe filha sim
		private - Nem o Objeto nem a classe filha tem acesso
	*/

	public $nome = 'Gustavo Morini';
	protected $idade = 30;
	private $senha ='1234';

	public function verDados()
	{
		echo $this->nome.'<br>';
		echo $this->idade.'<br>';
		echo $this->senha.'<br>';
	}

}//pesssoa

$pessoa = new Pessoa();
$pessoa->verDados();

class Programador extends Pessoa
{
	/*
		quando um método é criado dentro da classe filha com o mesmo nome da classe mãe, ele automaticamente sobrescreve o método herdado.
	
		no exemplo abaixo o atributo senha não será acessível pois é private e só quem está dentro da classe dele pode acessar.

	*/
	public function verDados()
	{
		echo $this->nome.'<br>';
		echo $this->idade.'<br>';
		echo $this->senha.'<br>';
		//get_class é uma função que mostra a classe do objeto		
		echo get_class($this).'<br>';
	}
}//programador

$programador = new Programador();
$programador->verDados();