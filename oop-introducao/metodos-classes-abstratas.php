<?php

  abstract class Teste {

    public static function testandoClasse() {
      echo "Este m�todo � de uma classe abstrata <br>";
    }

    abstract public function testeAbs();

  }

  Teste::testandoClasse(); // Este m�todo � de uma classe abstrata

  class Nova extends Teste {

    public function testeAbs() {
      echo "Teste m�todo abstrato <br>";
    }

  }

  $n = new Nova; // Este m�todo � de uma classe abstrata
  $n->testeAbs(); // Teste m�todo abstrato