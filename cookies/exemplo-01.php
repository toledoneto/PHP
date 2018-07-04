<?php

// dados para serem passados no cookie
$data = array("empresa"=>"Tol");

setcookie("NOME_DO_COOKIE",
		  json_encode($data), // formato em que será armazeno as info do cookie
		  time() + 3600       // tempo de duração do cookie até expirar em segundos
);

echo "OK";

?>