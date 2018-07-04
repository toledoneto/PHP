<?php

if (!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item) {
	if (!in_array($item, array(".", ".."))) {
		
		// apaga arqvs
		unlink("images/" . $item);
	}
}

echo "Ok";

?>