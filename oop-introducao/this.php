<?php

  class Animal {

    public $nome;

    function escolherNome($nome) {
      $this->nome = $nome;
    }

    function latir() {
      return "Au au au <br>";
    }

    function latirForte() {
      return strtoupper($this->latir());
    }

  }

  $frida = new Animal();
  echo "O nome do animal é: $frida->nome <br>"; // O nome do animal é:

  $frida->escolherNome("Frida");
  echo "O nome do animal é: $frida->nome <br>"; // O nome do animal é: Frida

  echo $frida->latir(); // Au au au
  echo $frida->latirForte(); // AU AU AU
