<?php

// Ordem dos operadores

  // echo 3 + 2 * 5; // 13
  // echo "<br>";
  // echo (3 + 2) * 5; // 25
  // echo "<br>";
  // echo 5 + 2 / 10; // 5.2
  // echo "<br>";

  // $a = 5;
  // $b = 2;
  // $c = 10;

  // echo $a + $b / $c; // 5.2
  // echo "<br>";
  // echo $c + $b / $a; // 10.4
  // echo "<br>";

  // $d = $a * $b * $c;

  // echo $d; // 100
  // echo "<br>";

  // Exercício 10

  // - Crie um arquivo PHP
  // - Crie uma operação que utiliza subtração, divisão e multiplicação
  // - Armazene todos os valores em variáveis
  // - Imprima o resultado final na tela

  // $a = 10;
  // $b = 10;
  // $c = 10;
  // $d = 10;

  // $resultado = $a - $b / $c * $d;

  // echo $resultado; // 0

// Mudança de tipo implícita

  // $exp = "5" * 12;

  // echo $exp . "<br>"; // 60

  // echo gettype($exp); // integer
  // echo "<br>";
  // echo gettype([]); // array
  // echo "<br>";
  // echo gettype(12.2); // double
  // echo "<br>";
  // echo gettype("teste"); // string

// Operadores aritméticas

  // $soma = 5 + 5;
  // echo $soma . "<br>"; // 10

  // $subtracao = 10 - 2;
  // echo $subtração . "<br>"; // 8

  // $multi = 2 * 199;
  // echo $multi . "<br>"; // 398

  // $divisao = 123 / 48;
  // echo $divisao . "<br>"; // 2.5625

  // Exercício 12

  // - Crie um arquivo PHP.
  // - Crie uma operação com cada um dos operadores básicos.
  // - Cada operação deve estar em uma variável diferente.
  // - Imprima cada uma das etapas.
  // - Ex.: soma -> multiplicação -> divisão -> subtração;

  // +, -, /, *
  // $a = 3;
  // $b = 12;

  // $op1 = $a - $b;
  // echo $op1; // -9
  // echo "<br>";

  // $c = 12.4;

  // $op2 = $op1 * $c;
  // echo $op2; // 111.6
  // echo "<br>";

  // $d = 4.8;

  // $op3 = $op2 + $d;
  // echo $op3; // 106.8
  // echo "<br>";

  // $e = 9.2;
  // $op4 = $op3 / $e;
  // echo $op4; // 11.608695652174
  // echo "<br>";

// Operador de módulo

  // echo 12 % 2; // 0
  // echo "<br>";
  // echo 12 / 2; // 6

  // Exercício 14

  // - Crie um arquivo PHP.
  // - Crie uma variável saudação, nome e outra de sobrenome.
  // - Imprima com echo a concatenação de saudação, nome e sobrenome.

  // $saudacao = "Boa noite, ";
  // $nome = "Tony";
  // $sobrenome = "Corleone";

  // $frase = $saudacao . $nome . " " . $sobrenome;

  // echo $frase;

// Operador de auto incremento e decremento

  // $x = 0;
  // $y = 0;

  // $x++;
  // $y = $y = 1;

  // echo "x: " . $x . "<br>"; // 1
  // echo "y: " . $y . "<br>"; // 1

  // $n = 10;
  // $m = 10;

  // $n--;
  // $m = $m - 1;

  // echo "n: " . $n . "<br>"; // 9
  // echo "m: " . $m . "<br>"; // 9

  // Operador de igualdade

  // if(3 == 3) {
  //   echo "Comparação verdadeira <br>";
  // }

  // $nome = "Tony";
  // $nomeDoSistema = "Tony";

  // if($nome == $nomeDoSistema) {
  //   echo "O nome coincide <br>";
  // }

  // Operador idêntico a 

  // if (3 === "3") {
  //   echo "Comparação verdadeira <br>";
  // } else {
  //   echo "Comparação falsa <br>"; // Comparação falsa
  // }

  // Operador de diferença

  // $a = 3;
  // $b = 4;

  // if($a != $b) {
  //   echo "Os números são diferentes <br>";
  // }

  // Operador não idêntico a

  $a = 1;
  $b = "1";

  if($a !== $b) {
    echo "Os números são diferentes <br>";
  }

  if(1 !== 2) {
    echo "Os números são diferentes <br>";
  }