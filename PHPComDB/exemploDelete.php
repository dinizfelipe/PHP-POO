<?php

  $id = $_GET['id'];

// 1a e 2a Etapa - Conexão com uma SGBD e com uma base de dados específica
$servidor = new PDO('mysql:host=localhost;dbname=livros','root', '');

$servidor->exec("DELETE from famosos WHERE id = $id");

$servidor = null;

header("Location: exemploSelect.php");

?>