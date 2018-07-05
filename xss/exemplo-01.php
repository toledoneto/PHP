<!-- 
ATK XSS
Passar tags html em um formulário podendo acessar dados sensíveis
Para evitar, basta negar qquer tag OU permitir algumas -->

<form method="POST">
	<input type="text" name="busca">
	<button type="submit">Enviar</button>

</form>

<?php

// para testar o problema, 
$_POST['busca'] = '<a href="#"><strong>Oi</strong></a><script>alert("ok")</script>';


if (isset($_POST['busca'])) {
	
	// strip_tags retira td e qquer tag transformado td em string
	// caso alguma seja permitida, passar no 2º parâmetro
	echo strip_tags($_POST['busca'], "<strong><a>");

	//com htmlentities podemos receber essas tags enviadas em forma de string e
	// não será executada
	echo htmlentities($_POST['busca'])

}

?>