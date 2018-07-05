<?php
// ataque de captura de ID de sessão
// descobre-se seu ID de sessão e, com ele, você pode acessar os dados de sessão de outras pessoas

session_start();

// Depois de verificar o login e senha, reiniciar o ID de sessão
session_destroy();

session_start();

session_regenerate_id();

echo session_id();

?>