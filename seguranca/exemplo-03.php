<?php
// PERMISSÕES DE PASTAS
// cuidar para permissões de pastas ao criar alguma coisa com mkdir e afins
// permissões costumam vir em 4 números -> 0XYZ
// 			X->permissão de quem criou a pasta
//			Y->permissão de um grupo de pessoas autorizadas
//			Z->permissão dos visitantes
// As permissões vão de 0-7
//			0-> sempermissão
//			1-> execução
//			2-> gravação
//			3-> 1 + 2
//			4-> leitura
//			5-> leitura e execução
//			6-> leitura e gravação
//			7-> tds permissões

$pasta = "arqv";
$permissao = "0775"

if (!is_dir($pasta)) mkdir($pasta, $permissao)

echo "Pasta criada com sucesso";

?>