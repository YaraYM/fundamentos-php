<?php

  // function soma() {

  //   $a = 5;
  //   $b = 4;

  //   echo $a + $b . "<br>";
  // }

  // // chamando / invocando fun��o
  // soma(); // 9
  // soma(); // 9

  // // fun��o do php para deixar as letras mai�sculas
  // echo strtoupper("testando fun��o");

  // Exerc�cio 31

  // - Crie um array com strings
  // - Utilize a fun��o implode no array
  // - Primeiro argumento: ","
  // - Segundo argumento: o seu array
  // - Atribua a invoca��o da fun��o a uma vari�vel
  // - Exiba o resultado

  // $arr = ["Teste", "Ol�", "Bal�o", "Janela", "Planta"];

  // $teste = implode(", ", $arr);

  // echo $teste; // Teste, Ol�, Bal�o, Janela, Planta

  // Exerc�cio 32

  // - Crie uma fun��o
  // - Defina tr�s vari�veis num�ricas dentro dela
  // - Exiba a multiplica��o destes n�meros com um echo

  // defini��o
  // function multiplicacao() {

  //   $a = 5;
  //   $b = 4.12;
  //   $c = 8;

  //   $resultado = $a * $b * $c;

  //   echo $resultado . "<br>";
  // }

  // // invoca��o
  // multiplicacao(); // 164.8

  // Exerc�cio 32b

  // - Crie uma fun��o
  // - Defina uma vari�vel nome e sobrenome
  // - Imprima os valores concatenados

  // function nomeCompleto() {

  //   $nome = "Jo�o";
  //   $sobrenome = "Silva";

  //   $nomeCompleto = $nome . " " . $sobrenome;

  //   echo $nomeCompleto . "<br>";
  // }

  // nomeCompleto(); // Jo�o Silva

  // Exerc�cio 33

  // - Crie uma fun��o
  // - Ela deve receber um par�metro de nome e idade
  // - Imprima "Ol�, eu sou o NOME e tenho IDADE anos"

  // function apresentacao($nome, $idade) {

  //   echo "Ol�, eu sou o $nome e tenho $idade anos <br>";
  // }

  // apresentacao("Jo�o", 25); // Ol�, eu sou o Jo�o e tenho 25 anos

  // Exerc�cio 34

  // - Crie uma fun��o que verifica se um n�mero � par ou �mpar
  // - Se for par, imprima uma mensagem
  // - Se for �mpar, imprima outra mensagem

  // function parOuImpar($numero) {
  //   if ($numero % 2 == 0) {
  //     echo "O n�mero $numero � par <br>";
  //   } else {
  //     echo "O n�mero $numero � �mpar <br>";
  //   }
  // }

  // parOuImpar(5); // �mpar
  // parOuImpar(10); // par

  // Exerc�cio 35

  // - Crie uma fun��o que recebe um n�mero
  // - Retorne o valor deste n�mero ao quadrado

  // function quadrado($numero) {
  //   $resultado = $numero ** 2;
  //   return $resultado;
  // } 

  // echo quadrado(5) . "<br>"; // 25
  // $num = quadrado(10);
  // echo $num . "<br>"; // 100
  // $x = quadrado(3);
  // echo $x . "<br>"; // 9

  // Exerc�cio 36

  // - Crie uma fun��o que recebe um array de n�meros
  // - Crie um novo array com apenas os n�meros que s�o maiores que 7
  // - Retorne este novo array e imprima na tela
  
  $arr = [];

  for($i = 0; $i <= 30; $i++) {
    array_push($arr, $i);
  }

  // print_r($arr);
  
  function arrayMaiorQueSete($array) {
      $novoArray = [];
  
      for($j = 0; $j < count($array); $j++) {
  
          if ($array[$j] > 7) {
              array_push($novoArray, $array[$j]);
          }
  
      }

      return $novoArray;
  }

  $novoArray = arrayMaiorQueSete($arr);

  print_r($novoArray);