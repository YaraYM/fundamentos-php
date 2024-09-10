<?php

  $pessoa = new class() {

    public $nome = "Maria";

    public function dizerNome() {
      echo "Meu nome é $this->nome <br>";
    }

  };

  echo $pessoa->nome; // Maria
  $pessoa->dizerNome(); // Meu nome é Maria