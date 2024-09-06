<?php

  // Exercício 52

  // - Crie uma classe Car
  // - Instancie 3 objetos da classe Car

  // class Car {

  // }

  // $fusca = new Car();
  // $gol = new Car();
  // $uno = new Car();

  // Exercício 53

  // - Crie uma classe Cachorro
  // - Crie o méteodo latir e andar
  // - Execute o método em novas instâncias da classe

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

  // Exercício 54

  // - Crie uma classe Pessoa
  // - Crie a propriedade nome e idade
  // - Crie um método andar
      
  // class Pessoa {
      
  //     public $nome;
  //     public $idade;
  
  //     function andar($m) {
  //       echo "A pessoa andou $m metros <br>";
  //     }

  // }

  // $joao = new Pessoa;

  // $joao->nome = 'João';
  // $joao->idade = 25;

  // echo "O nome dele é $joao->nome e ele tem $joao->idade anos <br>"; // O nome dele é João e ele tem 25 anos

  // $joao->andar(10); // A pessoa andou 10 metros
  
  // Exercício 55

  // - Crie uma classe Carro
  // - Crie algumas propriedades e também a propriedade velocidade_maxima
  // - Crie o método setVelocidadeMaxima, one é possível alterara velocidade máxima do carro
  // - Crie também o getVelocidadeMaxima, onde é possível imprimir a velocidade do carro

  class Carro {

    public $cor;
    public $tetoSolar;
    public $velocidade_maxima;

    function setVelocidadeMaxima($vel) {
      $this->velocidade_maxima = $vel;
    }

    function getVelocidadeMaxima() {
      echo "A velocidade máxima do carro é $this->velocidade_maxima km/h <br>";
    }

  }

  $bmw = new Carro;
  $bmw->cor = "Branca";
  $bmw->tetoSolar = true;

  $bmw->setVelocidadeMaxima(200);

  $bmw->getVelocidadeMaxima(); // A velocidade máxima do carro é 200 km/h