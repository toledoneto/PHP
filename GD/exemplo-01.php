<?php

header("Content-Type: image/png");

//cria uma img do zero, um fundo branco
$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 0, 0, 0);

$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 6, 60, 120, "Curso de PHP 7", $red);

imagepng($image);

imagedestroy($image);

?>