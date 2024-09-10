<?php

  trait Objeto {

    public function teste() {
      echo "Testando trait de objeto <br>";
    }

  }

  trait Testando {

    public $y = 10;

    public function traitTest() {
      echo "Este método é da trait Testando <br>";
    }

  }

  class Central {

    use Objeto;
    use Testando;

  }

  $x = new Central;
  $x->teste(); // Testando trait de objeto
  $x->traitTest(); // Este método é da trait Testando
  echo $x->y; // 10