<?php

  // function soma() {

  //   $a = 5;
  //   $b = 4;

  //   echo $a + $b . "<br>";
  // }

  // // chamando / invocando função
  // soma(); // 9
  // soma(); // 9

  // // função do php para deixar as letras maiúsculas
  // echo strtoupper("testando função");

  // Exercício 31

  // - Crie um array com strings
  // - Utilize a função implode no array
  // - Primeiro argumento: ","
  // - Segundo argumento: o seu array
  // - Atribua a invocação da função a uma variável
  // - Exiba o resultado

  // $arr = ["Teste", "Olá", "Balão", "Janela", "Planta"];

  // $teste = implode(", ", $arr);

  // echo $teste; // Teste, Olá, Balão, Janela, Planta

  // Exercício 32

  // - Crie uma função
  // - Defina três variáveis numéricas dentro dela
  // - Exiba a multiplicação destes números com um echo

  // definição
  // function multiplicacao() {

  //   $a = 5;
  //   $b = 4.12;
  //   $c = 8;

  //   $resultado = $a * $b * $c;

  //   echo $resultado . "<br>";
  // }

  // // invocação
  // multiplicacao(); // 164.8

  // Exercício 32b

  // - Crie uma função
  // - Defina uma variável nome e sobrenome
  // - Imprima os valores concatenados

  // function nomeCompleto() {

  //   $nome = "João";
  //   $sobrenome = "Silva";

  //   $nomeCompleto = $nome . " " . $sobrenome;

  //   echo $nomeCompleto . "<br>";
  // }

  // nomeCompleto(); // João Silva

  // Exercício 33

  // - Crie uma função
  // - Ela deve receber um parâmetro de nome e idade
  // - Imprima "Olá, eu sou o NOME e tenho IDADE anos"

  function apresentacao($nome, $idade) {

    echo "Olá, eu sou o $nome e tenho $idade anos <br>";
  }

  apresentacao("João", 25); // Olá, eu sou o João e tenho 25 anos