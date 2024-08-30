<?php

  // Exercício 45

  // - Crie um array com a função range de 10 a 45
  // - Imprima todos os números com uma soma de 6
  // - Se a soma passar de 30, imprima também que o número é muito alto

  // $arr = range(10, 45);

  // for($i = 0; $i < count($arr); $i++) {
  //   $soma = $arr[$i] + 6;
  //   echo $soma . "<br>";

  //   if ($soma > 30) {
  //     echo "$arr[$i] + 6 = $soma (muito alto)<br>";
  //   } else {
  //     echo "$arr[$i] + 6 = $soma<br>";
  //   }
  // }

  // Exercício 46

  // - Crie um array multidimensional com 3 arrays que têm 4 elementos cada
  // - Imprima todos os elementos de cada um dos arrays
  // - Imprima também quando está mudando de array

  // $arr = [
  //   [1, 2, 3, 4],
  //   [5, 6, 7, 8],
  //   [9, 10, 11, 12]
  // ];
  
  // for($i = 0; $i < count($arr); $i++) {
    
  //   // Imprimindo array
  //   echo "Imprimindo array externo: " . ($i + 1) . "<br>";

  //   // Imprimindo o array interno
  //   for($j = 0; $j < count($arr[$i]); $j++) {
  //     echo $arr[$i][$j] . "<br>";
  //   }
  // }

  // Imprimindo array externo: 1
  // 1
  // 2
  // 3
  // 4
  // Imprimindo array externo: 2
  // 5
  // 6
  // 7
  // 8
  // Imprimindo array externo: 3
  // 9
  // 10
  // 11
  // 12

  // Exercício 47

  // - Crie um array com os seguintes valores: jaguar, 3.0, azul, 18, teto solar, automático
  // - Chame este array de carro
  // - Crie variáveis com base neste array

  $carro = ["jaguar", 3.0, "azul", 18, "teto solar", "automático"];
  list($marca, $motor, $cor, $portas, $tetoSolar, $cambio) = $carro;
  echo $marca . "<br>"; // jaguar
  echo $motor . "<br>"; // 3
  print_r($carro); // Array ( [0] => jaguar [1] => 3 [2] => azul [3] => 18 [4] => teto solar [5] => automático )
