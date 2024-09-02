<?php

  // Exerc�cio 45

  // - Crie um array com a fun��o range de 10 a 45
  // - Imprima todos os n�meros com uma soma de 6
  // - Se a soma passar de 30, imprima tamb�m que o n�mero � muito alto

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

  // Exerc�cio 46

  // - Crie um array multidimensional com 3 arrays que t�m 4 elementos cada
  // - Imprima todos os elementos de cada um dos arrays
  // - Imprima tamb�m quando est� mudando de array

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

  // Exerc�cio 47

  // - Crie um array com os seguintes valores: jaguar, 3.0, azul, 18, teto solar, autom�tico
  // - Chame este array de carro
  // - Crie vari�veis com base neste array

  // $carro = ["jaguar", 3.0, "azul", 18, "teto solar", "autom�tico"];
  // list($marca, $motor, $cor, $portas, $tetoSolar, $cambio) = $carro;
  // echo $marca . "<br>"; // jaguar
  // echo $motor . "<br>"; // 3
  // print_r($carro); // Array ( [0] => jaguar [1] => 3 [2] => azul [3] => 18 [4] => teto solar [5] => autom�tico )

  // Exerc�cio 48

  // - Crie um array com os valores: batata, ma��, pera, feij�o, arroz
  // - Remova pera e feij�o

  // $arr = ["batata", "ma��", "pera", "feij�o", "arroz"];
  // $removidos = array_splice($arr, 2, 2);
  // print_r($arr); // Array ( [0] => batata [1] => ma�� [2] => arroz )
  // echo "<br>";
  // print_r($removidos); // Array ( [0] => pera [1] => feij�o )

  // Exerc�cio 49

  // - Crie vari�veis com caracter�stica de algum objeto ou animal
  // - Crie um array com compact com estas mesmas vari�veis
  // - Fa�a um loop no array e imprima os valores

  // $ra�a = "Poodle";
  // $porte = "Pequeno";
  // $cor = "Branco";
  // $idade = 2;

  // $cachorro = compact("ra�a", "porte", "cor", "idade");

  // foreach($cachorro as $caracteristica => $value) {
  //   echo "$caracteristica: $value<br>";
  // }

  // Exerc�cio 50

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

  // Exerc�cio 51

  // - Crie um array associativo com chaves com valor de nomes e valores com uma pontua��o
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