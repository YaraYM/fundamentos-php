<?php

// While

  // defini��o do contador
  // $x = 0;

  // // in�cio/defini��o da estrutura
  // while($x < 10) {
  //     // corpo do loop
  //     echo $x . "<br>";
  //     // incremento do contador
  //     $x++;
  // }

  // echo "Continuando c�digo <br>";

  // $y = 0;

  // while($y <= 10) {
  //     echo $y . "<br>";
  //     $y += 2;
  // }

  // echo "Continuando c�digo <br>";

  // $z = 10;

  // while($z > 0) {
  //     echo $z . "<br>";
  //     $z--;
  // }

  // echo "Continuando c�digo <br>";

  // $a = 10;

  // while($a > 0) {
    
  //   if($a % 2 != 0) {
  //     echo $a . "<br>";
  //   }

  //   $a--;
  // }

  // Exerc�cio 27

  // - Crie um array com alguns valores (pelo menos 10) de tipos de dados diferentes
  // - Fa�a um loop while para exibir apenas os dados que s�o strings

  // $arr = [1, 2.5, "string", true, false, 5, "outra string", 8, 9, "mais uma string"];

  // $x = count($arr);
  // $i = 0;

  // while($i < $x) {

  //   if(is_string($arr[$i])) {
  //     echo $arr[$i] . "<br>";
  //   }

  //   $i++;

  // }

// Break

  // $x = 0;

  // while($x < 10) {
  //   echo $x . "<br>";

  //   if($x === 5) {
  //     break;
  //   }

  //   $x++;
  // }

  // echo "Saiu do loop <br>";

  // Exerc�cio 28

  // - Crie um loop que vai at� o n�mero 30
  // - O contador deve iniciar com 4
  // - Fa�a incrementos de 2 em 2 no contador
  // - Utilize o break para parar o loop quando chegar no n�emro 24

  // $x = 4;

  // while($x <= 30) {
  //   echo $x . "<br>";

  //   if($x === 24) {
  //     echo "Parando o loop <br>";
  //     break;
  //   }

  //   $x += 2;
  // }

// Loop aninhado

  // $i = 0;

  // $c = 'vari�vel teste';

  // while($i < 10) {
  //   echo "Loop exter $i <br>";

  //   $j = 1;

  //   echo "$c <br>";

  //   while($j <= 5) {
  //     echo "Loop inter $j <br>";
  //     echo "$c 2 <br>";
  //     $j++;
  //   }

  //   $i++;

  // }

// Continue

  // $a = 10;

  // while($a > 0) {
  //   if($a == 5 || $a == 7)  {
  //     echo "Pulou a execu��o $a <br>";
  //     $a--;
  //     continue;
  //   }

  //   echo "Executando o loop $a <br>";

  //   $a--;
  // }

  // Exerc�cio 29

  // - Crie um array com valores inteiros de 10 a 100
  // - Aplique um loop neste array
  // - Quando entrar os valores 30 ou 40, pule para a pr�xima execu��o

  // $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

  // $i = 0;

  // while($i < count($arr)) {

  //   $numeroAtual = $arr[$i];

  //   if($numeroAtual == 30 || $numeroAtual == 40) {
  //     $i++;
  //     continue;
  //   }

  //   echo "Elemento: $numeroAtual <br>";

  //   $i++;

  // }

// Do while

  // $j = 0;

  // $teste = "Matheus";

  // do {

  //   echo "Testando do while $j <br>";

  //   if($j == 2) {
  //     echo "Teste $teste <br>";
  //   }

  //   $j++;

  // } while($j < 10);

  // $i = 10;

  // do {

  //   echo "Testando do while 2 $i <br>";

  //   $i--;

  // } while($i > 10);

// For

  // $nome = "Tony";

  // for($i = 0; $i < 10; $i++) {
  //   if($i == 4) {
  //     echo "Teste $nome <br>";
  //   }

  //   if($i == 8) {
  //     break;
  //   }

  //   echo "Testando for $i <br>";
  // }

  // Exerc�cio 30

  // - Crie um array com n�mero de 1 a 20
  // - Crie um loop for para este array
  // - Imprima apenas os pares

  // $arr = range(1, 20);

  // for($i = 0; $i < count($arr); $i++) {

  //   if($arr[$i] % 2 == 0) {
  //     echo "Elemento: $arr[$i] <br>";
  //   }

  // }

  // Exerc�cio 30b

  // - Crie um array de 1 a 10
  // - Utilize um loop for para criar este array
  // - Dica: voc� pode utilizar o m�todo array_push(arr, elemento) para inserir um elemento em um array
  // - Imprima o array criado com print_r

  // $arr = [];

  // for($i = 1; $i <= 10; $i++) {
  //   array_push($arr, $i);
  // }

  // print_r($arr); // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 [9] => 10 )

  // Exerc�cio 30c

  // - Crie um array de 10 a 20 com for
  // - Fa�a um loop em cima do array criado dinamicamente
  // - Imprima apenas os valores �mpares

  // $arr = [];

  // for($i = 10; $i <= 20; $i++) {
  //   array_push($arr, $i);
  // }

  // print_r($arr);

  // for($i = 0; $i < count($arr); $i++) {
  //   if($arr[$i] % 2 != 0) {
  //     echo "Elemento: $arr[$i] <br>";
  //   }
  // }

// Foreach

  $nomes = ["Matheus", "Jo�o", "Maria", "Jos�"];

  foreach($nomes as $nome) {
    echo "Nome: $nome <br>";
  }
