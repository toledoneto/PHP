<?php 

require_once("config.php");

// essa função força a criação de um novo id de sessão
session_regenerate_id();

echo session_id();
 ?>