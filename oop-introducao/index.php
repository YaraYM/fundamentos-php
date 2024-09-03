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
      
  class Pessoa {
      
      public $nome;
      public $idade;
  
      function andar($m) {
        echo "A pessoa andou $m metros <br>";
      }

  }

  $joao = new Pessoa();

  $joao->nome = 'João';
  $joao->idade = 25;

  echo "O nome dele é $joao->nome e ele tem $joao->idade anos <br>"; // O nome dele é João e ele tem 25 anos

  $joao->andar(10); // A pessoa andou 10 metros
