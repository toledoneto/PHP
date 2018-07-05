<?php

// SQL INJECTIONS
// injeções de queries SQL via URL que podem vazar conteúdo de cadastro sensíveis
// principalmente em programas mais antigos que não adotam PDO ou a classe MySqli.
// Para evitar, verificar se o parâmetro do Where é dígito, colocar aspas para garantir
// que serão passadas strings na busca ou colocar o nº máx de comprimento de dígito aceito

$id = (isset($_GET["id"])) ? $_GET["id"] : 3;


if (!is_numeric($id) || strlen($id) > 5) {
	exit("Atk frustrado");
}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
	var_dump($resultado);
}

?>