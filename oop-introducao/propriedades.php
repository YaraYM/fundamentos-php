<?php

  class Car {
    
    public $rodas;
    public $aro = 20;
    public $cor = 'Vermelha';

    function ligar() {
      echo "Vrummmmm <br>";
    }
    
  }

  $ferrari = new Car();

  $ferrari->rodas = 4;

  echo $ferrari->rodas . "<br>"; // 4
  echo $ferrari->aro . "<br>"; // 20

  $ferrari->cor = 'Azul';

  echo $ferrari->cor . "<br>"; // Azul

  $ferrari->ligar(); // Vrummmmm