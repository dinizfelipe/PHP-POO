<?php

  // 1a e 2a Etapa - Conexão com uma SGBD e com uma base de dados específica
  $servidor = new PDO('mysql:host=localhost;dbname=livros','root', '');

  //3a Etapa = Executar uma consulta a partir do meu objeto PDO
  // Insert, Update e Delete
  $servidor->exec("INSERT INTO famosos (nome) VALUES ('Joãozinho da Silva')");

  
  $servidor = null;



?>