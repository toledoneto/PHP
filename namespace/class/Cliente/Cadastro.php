<?php

namespace Cliente;

class Cadastro extends \Cadastro{ // a '\' serve para voltar à raiz do projeto e prourar o outro cadastro

	public function registrarVenda(){
		echo "Foi registrada a venda para o cliente ".$this->getNome();
	}
}

?>