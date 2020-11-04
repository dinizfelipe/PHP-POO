<?php

  require_once 'autoload.php';

  use Classes\Funcionario;
  use Classes\Gerente;
  use Classes\Programador; 

  //1a Etapa - Pegar os valores de cada campo
  $nome = $_POST['nome'];
  $salario = $_POST['salario'];
  $cargo = $_POST['cargo']; // 1 para Gerente / 2 - para programador
  $obs = $_POST['obs'];


  // 2a Etapa - Instanciar um Gerente ou um Programador
  if($cargo == 1){
    $funcionario = new Gerente($nome, $salario, $obs);
  }else {
    $funcionario = new Programador($nome, $salario, $obs);
  }

  // 3a - Exibir as informações desse funcionário no navegador
  $funcionario->relatorioFunc();

?>