<?php

$link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);

//var_dump($parse);

//var_dump(basename($parse["path"]));

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">