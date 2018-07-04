<?php 

$name = "images";

if (!is_dir($name)) {
	
	// cria um diretório
	mkdir($name);
	echo "O diretório $name foi criado com sucesso";
} else {

	rmdir($name);
	echo "O diretório $name foi removido com sucesso";
}

?>