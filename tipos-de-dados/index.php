<?php

  // echo 5;
  // echo "<br>";
  // echo 50;
  // echo "<br>";
  // echo 5000;

  // if(is_int(5)){
  //   echo "É um inteiro <br>";
  // } else {
  //   echo "Não é um inteiro";
  // }

  // $a = "teste";
  // $b = 12.8;

  // if(is_float($a)) {
  //   echo "É float! <br>";
  // }

  // if(is_float($b)) {
  //   echo "É float! <br>";
  // }

  // $str = "Tony";
  // $num = 8;

  // if(is_string($str)) {
  //   echo "$str uma string 1<br>";
  // }

  // if(is_string($num)) {
  //   echo "$num uma string 2<br>";
  // }

  // if(is_string("asd")) {
  //   echo "É uma string 3<br>";
  // }

  // $a = true;

  // if(is_bool($a)) {
  //   echo "É booleano";
  // }

  // ************* ARRAYS *************

  // $arr = [1, 2, 3, 4, 5];
  // print_r($arr); // Array([0] => 1, [1] => 2, [2] => 3, [3] => 4, [4] => 5)
  // echo "<br>";
  // echo $arr[0]; // 1
  // echo "<br>";
  // $b  = ["Matheus", 1, true];
  // echo "<br>";
  // print_r($b); // Array([0] => Matheus, [1] => 1, [2] => 1)

  // ************* ARRAYS ASSOCIATIVOS *************

  // $arr = [
  //   'nome' => 'Shark',
  //   'patas' => 4,
  //   'cor' => 'caramelo'
  // ];

  // echo $arr['nome']; // Shark
  // echo "<br>";
  // echo $arr['patas']; // 4
  // print_r($arr); // Array([nome] => Shark, [patas] => 4, [cor] => caramelo)

  // $arrAssoc = ['chave' => 'valor', 'bool' => true];
  // echo "<br>";
  // print_r($arrAssoc); // Array([chave] => valor, [bool] => 1)

  // $carro = [
  //   'marca' => 'Fiat',
  //   'modelo' => 'Uno',
  //   'ano' => 2018,
  //   'cor' => 'vermelho'
  // ];
  
  // echo "Meu carro é um {$carro['marca']} modelo {$carro['modelo']} de cor {$carro['cor']} e ano {$carro['ano']}";
  // echo "<br>";
  // echo "Marca: {$carro['marca']} <br>";
  // echo "Modelo: {$carro['modelo']} <br>";

  // $pessoa = [
  //   'nome' => 'Matheus',
  //   'idade' => 20,
  //   'profissao' => 'Desenvolvedor'
  // ];
  
  // if($pessoa['idade'] >= 18) {
  //   echo "É maior de idade";
  // } else {
  //   echo "É menor de idade";
  // }

  // ************* OBJETOS *************

  // class Pessoa {
  //     public $nome;
  
  //     function falar() {
  //         echo "Olá, pessoal!";
  //     }
  
  // }
  
  // $matheus = new Pessoa();
  // $matheus->nome = "Matheus";
  // echo $matheus->nome;
  // echo "<br>";
  // $matheus->falar();

  // ************* NULL *************

  echo NULL;

  $nome = NULL;

  if(is_null($nome)) {
    echo "O valor é nulo";
  }
