<form method="POST" enctype="multipart/form-data">
	<input type="file" name="fileUpload">

	<button type="submit">Send</button>
</form>

<?php

// variavel global que verificase o método de envio foi POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	
	$file = $_FILES["fileUpload"];

	// caso ocorra algum erro durate o upload
	if($file["error"]){

		throw new Exception("Error: ".$file["error"]);

	}

	// criar uma pasta temp para o upload ser enviado antes de ir para os server
	$dirUploads = "uploads";

	if (!is_dir($dirUploads)) {
		mkdir($dirUploads);
	}

	if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){

		echo "Upload realizado com sucesso";

	} else {

		throw new Exception("Não foi possível realizar o upload");

	}


}

?>