<?php

//local, user, senha, banco
$conn = new mysqli('localhost', 'root', '', 'dbphp7');

if($conn->connect_error){
	echo "Error: ". $conn->connect_error;
	exit;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

// cada letra do 1º param significa o tipo de data enviado. No caso abaixo é o que signfica cada 's' 
$stmt-> bind_param("ss", $login, $senha);

// como é uma preparação e aidna não foi feito o envio pro DB, pode-se declarar a variável após o uso no bind_param
$login = "user";
$senha = "abcd";

$stmt->execute();

?>