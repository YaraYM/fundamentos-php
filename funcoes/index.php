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

  // function apresentacao($nome, $idade) {

  //   echo "Olá, eu sou o $nome e tenho $idade anos <br>";
  // }

  // apresentacao("João", 25); // Olá, eu sou o João e tenho 25 anos

  // Exercício 34

  // - Crie uma função que verifica se um número é par ou ímpar
  // - Se for par, imprima uma mensagem
  // - Se for ímpar, imprima outra mensagem

  // function parOuImpar($numero) {
  //   if ($numero % 2 == 0) {
  //     echo "O número $numero é par <br>";
  //   } else {
  //     echo "O número $numero é ímpar <br>";
  //   }
  // }

  // parOuImpar(5); // ímpar
  // parOuImpar(10); // par

  // Exercício 35

  // - Crie uma função que recebe um número
  // - Retorne o valor deste número ao quadrado

  // function quadrado($numero) {
  //   $resultado = $numero ** 2;
  //   return $resultado;
  // } 

  // echo quadrado(5) . "<br>"; // 25
  // $num = quadrado(10);
  // echo $num . "<br>"; // 100
  // $x = quadrado(3);
  // echo $x . "<br>"; // 9

  // Exercício 36

  // - Crie uma função que recebe um array de números
  // - Crie um novo array com apenas os números que são maiores que 7
  // - Retorne este novo array e imprima na tela
  
  // $arr = [];

  // for($i = 0; $i <= 30; $i++) {
  //   array_push($arr, $i);
  // }

  // // print_r($arr);
  
  // function arrayMaiorQueSete($array) {
  //     $novoArray = [];
  
  //     for($j = 0; $j < count($array); $j++) {
  
  //         if ($array[$j] > 7) {
  //             array_push($novoArray, $array[$j]);
  //         }
  
  //     }

  //     return $novoArray;
  // }

  // $novoArray = arrayMaiorQueSete($arr);

  // print_r($novoArray);

  // Exercício 37

  // - Crie uma função chamada defineCorCarro, onde há um parâmetro chamado cor, com valor default de "vermelha"
  // - Retorne a cor do carro
  // - Imprima o retorno tanto com parâmetro default, como também definindo a cor

  // function defineCorCarro($cor = "vermelha") {
  //   return "A cor do carro é: $cor";
  // }

  // $carroVermelho = defineCorCarro(); 
  // echo $carroVermelho . "<br>"; // A cor do carro é: vermelha

  // $carroAzul = defineCorCarro("azul"); 
  // echo  $carroAzul . "<br>"; // A cor do carro é: azul  

// Argumentos das funções

  // function soma($a, $b) {

  //   print_r(func_get_args());

  //   echo "<br>";

  //   echo func_num_args(). "<br>";

  //   return $a + $b;
  // }

  // soma(2, 4); 
  // // Array ( [0] => 2 [1] => 4 )
  // // 2

  // Exercício 38

  // - Crie uma função que recebe um array de itens de supermercado
  // - Retorne este array em forma de string, separando os itens por vírgula

  // $lista = ["Arroz", "Feijão", "Carne", "Macarrão", "Batata"];

  // function listaParaString($arr) {

  //   $str = "Você levou estes itens do mercado: ";

  //   for($i = 0; $i < count($arr); $i++) {

  //     if($i == count($arr)) {
  //       $str .= "$arr[$i].";
  //     } else {
  //       $str .= "$arr[$i], ";
  //     }
  //   }

  //   return $str;
  // }

  // echo listaParaString($lista); // Você levou estes itens do mercado: Arroz, Feijão, Carne, Macarrão, Batata. 

// Retorno de múltiplos dados

  // function alteraDados($nome, $idade) {

  //   $nome = "Sr. $nome";
  //   $idade = "$idade anos";

  //   return [$nome, $idade];

  // }

  // $dados = alteraDados("João", 25);

  // print_r($dados); // Array ( [0] => Sr. João [1] => 25 anos )

  // echo "<br>";

  // echo "Olá, eu sou o $dados[0] e tenho $dados[1]"; // Olá, eu sou o Sr. João e tenho 25 anos

// Depurando dados

  $arr = [
    "Teste",
    123,
    12393.45843,
    true,
    [1,2,3]
  ];

  print_r($arr); // Array ( [0] => Teste [1] => 123 [2] => 12393.45843 [3] => 1 [4] => Array ( [0] => 1 [1] => 2 [2] => 3 ) )

  echo "<br>";

  var_dump($arr); // array(5) { [0]=> string(5) "Teste" [1]=> int(123) [2]=> float(12393.45843) [3]=> bool(true) [4]=> array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) } }