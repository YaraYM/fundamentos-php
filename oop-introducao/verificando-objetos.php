<?php

  class Humano {

    public function falar() {
      echo "Olá <br>";
    }

  }

  $tony = new Humano();
  $teste = 10;

  if(is_object($tony)) {
    echo "É um objeto <br>";
  } else {
    echo "Não é um objeto <br>";
  }

  if(is_object($teste)) {
    echo "É um objeto <br>";
  } else {
    echo "Não é um objeto <br>";
  }

  // É um objeto
  // Não é um objeto

  echo get_class($tony) . "<br>"; // Humano

  if(method_exists($tony, "falar")) {
    echo "O método falar existe <br>";
  } else {
    echo "O método falar não existe <br>";
  }

  // O método falar existe



  