<?php

  class Humano {

    public $idade;
    public $nome;
    public $profissao;

    public function falar() {}

    public function andar() {}

  }

  if(class_exists("Humano")) {
    echo "A classe Humano existe <br>";
  } else {
    echo "A classe Humano não existe <br>";
  }

  // A classe Humano existe

  if(class_exists("Cachorro")) {
    echo "A classe Cachorro existe <br>";
  } else {
    echo "A classe Cachorro não existe <br>";
  }

  // A classe Cachorro não existe

  print_r(get_class_vars("Humano")); // Array ( [idade] => [nome] => [profissao] => )

  print_r(get_class_methods("Humano")); // Array ( [0] => falar [1] => andar )