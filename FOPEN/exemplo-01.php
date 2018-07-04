<?php

// existem várias opções de abertura de arqv, como Python
$file = fopen("log.txt", "a+");

fwrite($file, date("Y-m-d H:i:s"));

fclose($file);

echo "Arqv criado com sucesso";

?>