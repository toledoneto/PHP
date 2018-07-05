<?php

// command injections -> injeções de cmds:
// passar cmds diretamente via post/get pela URL adicionando cmds a serem executados pelo PHP
// especialmente preocupante para envio dinâmicos, p.e um formlárioc om submit, em instruções
// que excutam funções de sistema como "system" ou "exec"

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
	
	// o escapeshellcmd evita que esse atk possa ser feito uma vez que desconsidera
	// qquer instrução enviada de forma forçada pela URL. Para testar a diferença,
	// descomentar a var $cms SEM essa função e verificar o var dump:
	// $cmd = $_POST["cmd"];
	$cmd = escapeshellcmd($_POST["cmd"]);

	var_dump($cmd);

	echo "<pre>";

	$comando = system($cmd, $retorno);

	echo "</pre>";
}

?>

<!-- Formulário para ser invadido -->

<form>
	<input type="text" name="cmd">
	<button type="submit">Enviar</button>

</form>