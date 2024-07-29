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

  // Exerc�cio 10

  // - Crie um arquivo PHP
  // - Crie uma opera��o que utiliza subtra��o, divis�o e multiplica��o
  // - Armazene todos os valores em vari�veis
  // - Imprima o resultado final na tela

  // $a = 10;
  // $b = 10;
  // $c = 10;
  // $d = 10;

  // $resultado = $a - $b / $c * $d;

  // echo $resultado; // 0

// Mudan�a de tipo impl�cita

  // $exp = "5" * 12;

  // echo $exp . "<br>"; // 60

  // echo gettype($exp); // integer
  // echo "<br>";
  // echo gettype([]); // array
  // echo "<br>";
  // echo gettype(12.2); // double
  // echo "<br>";
  // echo gettype("teste"); // string

// Operadores aritm�ticas

  // $soma = 5 + 5;
  // echo $soma . "<br>"; // 10

  // $subtracao = 10 - 2;
  // echo $subtra��o . "<br>"; // 8

  // $multi = 2 * 199;
  // echo $multi . "<br>"; // 398

  // $divisao = 123 / 48;
  // echo $divisao . "<br>"; // 2.5625

  // Exerc�cio 12

  // - Crie um arquivo PHP.
  // - Crie uma opera��o com cada um dos operadores b�sicos.
  // - Cada opera��o deve estar em uma vari�vel diferente.
  // - Imprima cada uma das etapas.
  // - Ex.: soma -> multiplica��o -> divis�o -> subtra��o;

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

// Operador de m�dulo

  // echo 12 % 2; // 0
  // echo "<br>";
  // echo 12 / 2; // 6

  // Exerc�cio 14

  // - Crie um arquivo PHP.
  // - Crie uma vari�vel sauda��o, nome e outra de sobrenome.
  // - Imprima com echo a concatena��o de sauda��o, nome e sobrenome.

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
  //   echo "Compara��o verdadeira <br>";
  // }

  // $nome = "Tony";
  // $nomeDoSistema = "Tony";

  // if($nome == $nomeDoSistema) {
  //   echo "O nome coincide <br>";
  // }

  // Operador id�ntico a 

  // if (3 === "3") {
  //   echo "Compara��o verdadeira <br>";
  // } else {
  //   echo "Compara��o falsa <br>"; // Compara��o falsa
  // }

  // Operador de diferen�a

  // $a = 3;
  // $b = 4;

  // if($a != $b) {
  //   echo "Os n�meros s�o diferentes <br>";
  // }

  // Operador n�o id�ntico a

  $a = 1;
  $b = "1";

  if($a !== $b) {
    echo "Os n�meros s�o diferentes <br>";
  }

  if(1 !== 2) {
    echo "Os n�meros s�o diferentes <br>";
  }