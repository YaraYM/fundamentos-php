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

  // function apresentacao($nome, $idade) {

  //   echo "Ol�, eu sou o $nome e tenho $idade anos <br>";
  // }

  // apresentacao("Jo�o", 25); // Ol�, eu sou o Jo�o e tenho 25 anos

  // Exerc�cio 34

  // - Crie uma fun��o que verifica se um n�mero � par ou �mpar
  // - Se for par, imprima uma mensagem
  // - Se for �mpar, imprima outra mensagem

  // function parOuImpar($numero) {
  //   if ($numero % 2 == 0) {
  //     echo "O n�mero $numero � par <br>";
  //   } else {
  //     echo "O n�mero $numero � �mpar <br>";
  //   }
  // }

  // parOuImpar(5); // �mpar
  // parOuImpar(10); // par

  // Exerc�cio 35

  // - Crie uma fun��o que recebe um n�mero
  // - Retorne o valor deste n�mero ao quadrado

  // function quadrado($numero) {
  //   $resultado = $numero ** 2;
  //   return $resultado;
  // } 

  // echo quadrado(5) . "<br>"; // 25
  // $num = quadrado(10);
  // echo $num . "<br>"; // 100
  // $x = quadrado(3);
  // echo $x . "<br>"; // 9

  // Exerc�cio 36

  // - Crie uma fun��o que recebe um array de n�meros
  // - Crie um novo array com apenas os n�meros que s�o maiores que 7
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

  // Exerc�cio 37

  // - Crie uma fun��o chamada defineCorCarro, onde h� um par�metro chamado cor, com valor default de "vermelha"
  // - Retorne a cor do carro
  // - Imprima o retorno tanto com par�metro default, como tamb�m definindo a cor

  // function defineCorCarro($cor = "vermelha") {
  //   return "A cor do carro �: $cor";
  // }

  // $carroVermelho = defineCorCarro(); 
  // echo $carroVermelho . "<br>"; // A cor do carro �: vermelha

  // $carroAzul = defineCorCarro("azul"); 
  // echo  $carroAzul . "<br>"; // A cor do carro �: azul  

// Argumentos das fun��es

  // function soma($a, $b) {

  //   print_r(func_get_args());

  //   echo "<br>";

  //   echo func_num_args(). "<br>";

  //   return $a + $b;
  // }

  // soma(2, 4); 
  // // Array ( [0] => 2 [1] => 4 )
  // // 2

  // Exerc�cio 38

  // - Crie uma fun��o que recebe um array de itens de supermercado
  // - Retorne este array em forma de string, separando os itens por v�rgula

  // $lista = ["Arroz", "Feij�o", "Carne", "Macarr�o", "Batata"];

  // function listaParaString($arr) {

  //   $str = "Voc� levou estes itens do mercado: ";

  //   for($i = 0; $i < count($arr); $i++) {

  //     if($i == count($arr)) {
  //       $str .= "$arr[$i].";
  //     } else {
  //       $str .= "$arr[$i], ";
  //     }
  //   }

  //   return $str;
  // }

  // echo listaParaString($lista); // Voc� levou estes itens do mercado: Arroz, Feij�o, Carne, Macarr�o, Batata. 

// Retorno de m�ltiplos dados

  // function alteraDados($nome, $idade) {

  //   $nome = "Sr. $nome";
  //   $idade = "$idade anos";

  //   return [$nome, $idade];

  // }

  // $dados = alteraDados("Jo�o", 25);

  // print_r($dados); // Array ( [0] => Sr. Jo�o [1] => 25 anos )

  // echo "<br>";

  // echo "Ol�, eu sou o $dados[0] e tenho $dados[1]"; // Ol�, eu sou o Sr. Jo�o e tenho 25 anos

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