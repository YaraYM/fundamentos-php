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

  // $carro = ["jaguar", 3.0, "azul", 18, "teto solar", "automático"];
  // list($marca, $motor, $cor, $portas, $tetoSolar, $cambio) = $carro;
  // echo $marca . "<br>"; // jaguar
  // echo $motor . "<br>"; // 3
  // print_r($carro); // Array ( [0] => jaguar [1] => 3 [2] => azul [3] => 18 [4] => teto solar [5] => automático )

  // Exercício 48

  // - Crie um array com os valores: batata, maçã, pera, feijão, arroz
  // - Remova pera e feijão

  // $arr = ["batata", "maçã", "pera", "feijão", "arroz"];
  // $removidos = array_splice($arr, 2, 2);
  // print_r($arr); // Array ( [0] => batata [1] => maçã [2] => arroz )
  // echo "<br>";
  // print_r($removidos); // Array ( [0] => pera [1] => feijão )

  // Exercício 49

  // - Crie variáveis com característica de algum objeto ou animal
  // - Crie um array com compact com estas mesmas variáveis
  // - Faça um loop no array e imprima os valores

  // $raça = "Poodle";
  // $porte = "Pequeno";
  // $cor = "Branco";
  // $idade = 2;

  // $cachorro = compact("raça", "porte", "cor", "idade");

  // foreach($cachorro as $caracteristica => $value) {
  //   echo "$caracteristica: $value<br>";
  // }

  // Exercício 50

  // - Crie um array associativo com nomes e idades
  // - Imprima estes dados em uma tabela de HTML
  // - Dica: utilize as tags do elemento table

  // $pessoas =[ 
  //   "Tony" => 8,
  //   "Ipa" => 5,
  //   "Bia" => 3,
  //   "Lia" => 1
  // ];

  // ?>

  // <table border="1">
  //   <tr>
  //     <th>Nome</th>
  //     <th>Idade</th>
  //   </tr>
  //   <?php foreach($pessoas as $nome => $idade): ?>
  //     <tr>
  //       <td><?= $nome; ?></td>
  //       <td><?= $idade; ?></td>
  //     </tr>
  //   <?php endforeach; ?>
  // </table>

  <?php

  // Exercício 51

  // - Crie um array associativo com chaves com valor de nomes e valores com uma pontuação
  // - Ordene os dados do maior para o menor
  // - Exiba uma lista, simulando um ranking, em HTML

  $pontuacao = [
    "Tony" => 100,
    "Ipa" => 50,
    "Bia" => 75,
    "Lia" => 25
  ];

  asort($pontuacao);

  ?>

  <h1>Ranking:</h1>
  <ol>
    <?php foreach($pontuacao as $nome => $pontos): ?>
      <li><?= $nome; ?> - <?= $pontos; ?> pontos</li>
    <?php endforeach; ?>
  </ol>