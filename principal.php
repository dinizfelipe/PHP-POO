<?php

  require_once "Produto.php";

  $produto = new Produto();

  $produto->codigo = "001";
  $produto->nome = "Vasco";
  $produto->preco = 320;

  $produto->imprimeProduto();

?>