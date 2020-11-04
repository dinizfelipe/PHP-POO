<?php

  namespace Classes;

  class Funcionario
  {
    protected $nome;
    protected $salario;

    public function __construct($nome, $salario)
    {
      $this->nome = $nome;
      $this->salario = $salario;
    }

    public function relatorioFunc() 
    {
      echo "Nome do funcionário: {$this->getNome()}<br/>";
      echo "Salário do funcionário {$this->getSalario()}<br/>";
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of salario
     */ 
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     *
     * @return  self
     */ 
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }
  }


?>