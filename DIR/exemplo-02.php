<?php 

// retorna um array
$images = scandir("images");

$data = array();

foreach ($images as $img) {
	# code...
	if (!in_array($img, array(".", ".."))) {
		# code...
		$filename = "images".DIRECTORY_SEPARATOR.$img;

		$info = pathinfo($filename);

		//var_dump($info);

		$info['size'] = filesize($filename);
		// qdo o arq foi modificado
		$info['modified'] = date("d/m/Y H:i:s", filemtime($filename));
		$info['url'] = "http://localhost/DIR/".str_replace("\\", "/", $filename);

		array_push($data, $info);
	}
}

echo json_encode($data);

?>