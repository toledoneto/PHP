<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 300, 150, $titleColor, __DIR__ .DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Bevan'.DIRECTORY_SEPARATOR.'Bevan-Regular.ttf', "CERTIFICADO");
 imagettftext($image, 32, 0, 320, 300, $titleColor, __DIR__ .DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Playball'.DIRECTORY_SEPARATOR.'Playball-Regular.ttf', "Divanei Aparecido");

imagettftext($image, 18, 0, 320, 350, $titleColor, __DIR__ .DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Playball'.DIRECTORY_SEPARATOR.'Playball-Regular.ttf', utf8_decode("Concluíu o curso de PHP 7"));

header("Content-Type: image/jpeg");

// cria a img(var_de_img, nome_do_arqv_salvo, %_da_qualidade_do_arqv)
// imagepng($image, "certificado-".date("d/m/Y").".jpg", 100);

imagejpeg($image);

imagedestroy($image);

?>