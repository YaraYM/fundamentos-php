<?php

  // Exerc�cio 52

  // - Crie uma classe Car
  // - Instancie 3 objetos da classe Car

  // class Car {

  // }

  // $fusca = new Car();
  // $gol = new Car();
  // $uno = new Car();

  // Exerc�cio 53

  // - Crie uma classe Cachorro
  // - Crie o m�teodo latir e andar
  // - Execute o m�todo em novas inst�ncias da classe

  // class Cachorro {

  //   function latir() {
  //     echo "Au au au <br>";
  //   }

  //   function andar($m) {
  //     echo "O cachorro andou $m metros <br>";
  //   }

  // }

  // $rex = new Cachorro();
  // $rex->latir();
  // $rex->andar(15);

  // $toto = new Cachorro();
  // $toto->latir();
  // $toto->andar(2);

  // Exerc�cio 54

  // - Crie uma classe Pessoa
  // - Crie a propriedade nome e idade
  // - Crie um m�todo andar
      
  class Pessoa {
      
      public $nome;
      public $idade;
  
      function andar($m) {
        echo "A pessoa andou $m metros <br>";
      }

  }

  $joao = new Pessoa();

  $joao->nome = 'Jo�o';
  $joao->idade = 25;

  echo "O nome dele � $joao->nome e ele tem $joao->idade anos <br>"; // O nome dele � Jo�o e ele tem 25 anos

  $joao->andar(10); // A pessoa andou 10 metros
