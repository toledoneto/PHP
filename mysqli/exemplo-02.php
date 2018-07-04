<?php

//local, user, senha, banco
$conn = new mysqli('localhost', 'root', '', 'dbphp7');

if($conn->connect_error){
	echo "Error: ". $conn->connect_error;
	exit;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

//MYSQLI_ASSOC traz os valores sem os nomes das colunas. Para trazer tudo, basta deixar sem parâmetro
while ($row = $result->fetch_array(MYSQLI_ASSOC)){
	array_push($data, $row);
	// var_dump($row);
}

echo json_encode($data)

?>