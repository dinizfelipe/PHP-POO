<?php

  require_once 'autoload.php';

  use Classes\Veiculo;
  use Classes\Carro;
  use Classes\Moto;

  $nome = $_POST['nome'];
  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $veiculo = $_POST['veiculo'];

  if($veiculo == 1){
    $veiculo = new Carro($nome, $marca, $modelo);
  }else{
    $veiculo = new Moto($nome, $marca, $modelo);
  }

  $veiculo->exibeNome();
  $veiculo->exibeMarca();
  $veiculo->exibeModelo();

?>