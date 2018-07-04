<?php 

/**
 * 
 */
class Pessoa {

	public $nome;
	
	public function falar(){

		return "o meu nome é ".$this->nome;
	}
}

$toledo = new Pessoa();
$toledo->nome = "Toledo Neto";
echo $toledo->falar();

 ?>