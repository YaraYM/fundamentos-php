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

  function apresentacao($nome, $idade) {

    echo "Ol�, eu sou o $nome e tenho $idade anos <br>";
  }

  apresentacao("Jo�o", 25); // Ol�, eu sou o Jo�o e tenho 25 anos