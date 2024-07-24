<?php

// Declarando variáveis

  // $teste = "Algum texto";

  // echo $teste;

  // $num = 10;

  // echo "<br>";  
  // echo $num;

  // $_nome = "Ipa";
  // echo "<br>";
  // echo $_nome;

  // echo "<br>";

  // $velocidadeMaxima = 100;
  // $velocidade_minima = 60;

  // $velocidade = 100; // int
  // $marca = "Ferrari"; // string
  // $itens = ["Teto solar", "Motor 2.0", "Porta-malas grande"]; // array

  // echo $velocidade;
  // echo "<br>";
  // echo $marca;
  // echo "<br>";
  // print_r($itens);

  // $num1 = 11; // int
  // $num2 = 99.324; // float

  // $soma = $num1 + $num2;

  // echo "<br>";
  // echo "A soma de $num1 + $num2 é igual a $soma";

// Variável de variável

  // $x = "nome"; // valor de nome
  // echo "$x <br>"; // nome

  // $$x = "Ipa"; // var com o nome de x (nome) e valor de Ipa
  // echo "$nome <br>"; // Ipa

// Variável por referência

  // $x = 10;
  // $y =& $x;

  // echo $x; // 10
  // echo "<br>";
  // echo $y; // 10
  // echo "<br>";

  // $y = 15;

  // echo $x; // 15
  // echo "<br>";
  // echo $y; // 15
  // echo "<br>";

  // $x = 20;

  // echo $x; // 20
  // echo "<br>";
  // echo $y; // 20
  // echo "<br>";

// Escopo local

  // $x = 10;

  // echo "$x global <br>"; // 10 global

  // function teste() {
  //   $x = 5;
  //   echo "$x local <br>";
  // }

  // teste(); // 5 local

  // echo "$x global <br>"; // 10 global

  // teste(); // 5 local

  // function testando() {
  //   $x = 12;
  //   echo "$x local 2 <br>";
  // }

  // $x = 99;

  // testando(); // 12 local 2
  // teste(); // 5 local
  // echo "$x global <br>"; // 99 global

// Escopo global

  $teste = "asd";
  echo "$teste global 1 <br>"; // asd global 1

  if(true) {
    $teste = "qwe";
    echo "$teste if <br>"; // qwe if
  }

  echo "$teste global 2 <br>"; // qwe global 2

