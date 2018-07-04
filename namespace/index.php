<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Toledo Neto");
$cad->setEmail("toledo@tol.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();
?>