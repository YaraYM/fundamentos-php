<?php

  class Humano {

    public function falar() {
      echo "Ol� <br>";
    }

  }

  $tony = new Humano();
  $teste = 10;

  if(is_object($tony)) {
    echo "� um objeto <br>";
  } else {
    echo "N�o � um objeto <br>";
  }

  if(is_object($teste)) {
    echo "� um objeto <br>";
  } else {
    echo "N�o � um objeto <br>";
  }

  // � um objeto
  // N�o � um objeto

  echo get_class($tony) . "<br>"; // Humano

  if(method_exists($tony, "falar")) {
    echo "O m�todo falar existe <br>";
  } else {
    echo "O m�todo falar n�o existe <br>";
  }

  // O m�todo falar existe



  