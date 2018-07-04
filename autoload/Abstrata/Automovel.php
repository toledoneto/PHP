<?php 

interface Veiculo{

	public function acelerar($velocidade);
	public function frear($velocidade);
	public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {

	public function acelerar($velocidade){
		echo "o veículo acelerou até ".$velocidade." Km/h";
	}

	public function frear($velocidade){
		echo "o veículo freou até ".$velocidade." Km/h";
	}

	public function trocarMarcha($marcha){
		echo "o veículo engatou a marcha ".$marcha;
	}


}

 ?>