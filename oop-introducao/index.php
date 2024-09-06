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
      
  // class Pessoa {
      
  //     public $nome;
  //     public $idade;
  
  //     function andar($m) {
  //       echo "A pessoa andou $m metros <br>";
  //     }

  // }

  // $joao = new Pessoa;

  // $joao->nome = 'Jo�o';
  // $joao->idade = 25;

  // echo "O nome dele � $joao->nome e ele tem $joao->idade anos <br>"; // O nome dele � Jo�o e ele tem 25 anos

  // $joao->andar(10); // A pessoa andou 10 metros
  
  // Exerc�cio 55

  // - Crie uma classe Carro
  // - Crie algumas propriedades e tamb�m a propriedade velocidade_maxima
  // - Crie o m�todo setVelocidadeMaxima, one � poss�vel alterara velocidade m�xima do carro
  // - Crie tamb�m o getVelocidadeMaxima, onde � poss�vel imprimir a velocidade do carro

  class Carro {

    public $cor;
    public $tetoSolar;
    public $velocidade_maxima;

    function setVelocidadeMaxima($vel) {
      $this->velocidade_maxima = $vel;
    }

    function getVelocidadeMaxima() {
      echo "A velocidade m�xima do carro � $this->velocidade_maxima km/h <br>";
    }

  }

  $bmw = new Carro;
  $bmw->cor = "Branca";
  $bmw->tetoSolar = true;

  $bmw->setVelocidadeMaxima(200);

  $bmw->getVelocidadeMaxima(); // A velocidade m�xima do carro � 200 km/h