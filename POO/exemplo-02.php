<?php 

class Carro{

	private $modelo;
	private $motor;
	private $ano;

	public function __construct($modelo, $motor, $ano){
		$this->modelo = $modelo;
		$this->motor = $motor;
		$this->ano = $ano;
	}

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo)
	{
		$this->modelo = $modelo;
	}

	public function getMotor(){
		return $this->motor;
	}

	public function setMotor($motor)
	{
		$this->motor = $motor;
	}

	public function getAno(){
		return $this->ano;
	}

	public function setAno($ano)
	{
		$this->ano = $ano;
	}

	public function exibir(){

		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);
	}
}

$gol = new Carro('Gol GT', '1.6', '2018');
$gol->setModelo('Gol GT');
$gol->setMotor('1.6');
$gol->setAno('2018');

$ford = new Carro("Fusca Azul", "Caos", "1900");

print_r($gol->exibir());
var_dump($gol->exibir());

print_r($ford->exibir());
var_dump($ford->exibir());

 ?>