<?php

  // pular linha
  // echo "Isso aqui vai ficar na primeira linha \n E isso na segunda linha <br>";

  // // tab
  // echo "Testando o \t aqui <br>";

  // // barra invertida
  // echo "Barra invertida \\ <br>";

  // // dólar
  // echo "Dólar \$ <br>";

  // Exercício 39

  // - Crie uma função que recebe características de algum objeto como argumento (carro, sofá, cafeteira), em array associativo
  // - O array deve conter nome => preco
  // - Retorne apenas os itens que custam mais de R$ 10
  // - Imprima o retorno

  // $arr = [
  //   'porta' => 100,
  //   'maçaneta' => 5,
  //   'motor' => 2000,
  //   'retrovisor' => 8
  // ];

  // function itensCaros($arr) {

  //   $arrItensCaros = [];

  //   foreach($arr as $item => $preco) {
  //     if($preco > 10) {
  //       array_push($arrItensCaros, $item);
  //     }
  //   }

  //   return $arrItensCaros;
    
  // }

  // $novoArr = itensCaros($arr);

  // print_r($novoArr); // Array ( [0] => porta [1] => motor )

  // Exercício 40

  // - Percorra a string: O rato roeu a roupa do rei de Roma, a partir de um loop
  // - Imprima o número de letras "a" desta string

  // $frase = "O rato roeu a roupa do rei de Roma";

  // $contadorDeAs = 0;

  // for($i = 0; $i < strlen($frase); $i++) {

  //   if($frase[$i] == 'a') {
  //     $contadorDeAs++;
  //   }

  // }

  // echo "O número de letras 'a' é: $contadorDeAs"; // 4

  // Exercício 41

  // - Transforme a string "este item está em promoção" em "Este item está em PROMOÇÃO"
  // - Observação: você pode separar as strings, mas não pode escrever em caixa alta ou baixa manualmante, só com funções

  // $frase = "este item está em promoção";
  // echo ucfirst($frase) . strtoupper(substr($frase, -9)); // Este item está em PROMOÇÃO

  // $str = "este item está em promoção";
  // $promo = "promoção";

  // echo ucfirst($str) . strtoupper($promo); // Este item está em PROMOÇÃO

  // Exercício 42

  // - Na frase "Cadê meu queijo? Ele estava aqui em cima
  // - Resgate a palavra 'queijo'
  // - Resgate a palavre 'estava'

  // $frase = "Cadê meu queijo? Ele estava aqui em cima";
  // $queijo = substr($frase, 12, 6); 
  // echo $queijo . "<br>"; // queijo
  // $estava = substr($frase, 24, 6);
  // echo $estava; // estava

  // Exercício 43

  // - Converta a seguinte string para array:
  //   carro-navio-helicóptero-barco-jangada

  $str = "carro-navio-helicóptero-barco-jangada";
  $arr = explode("-", $str);
  
  for($i = 0; $i < count($arr); $i++) {
    echo "Item: $arr[$i] . <br>";
  }
  // Item: carro
  // Item: navio
  // Item: helicóptero
  // Item: barco
  // Item: jangada

  // Exercício 44

  // - Converta a seguinte array para uma string:
  //   ["O", "PHP", "é", "muito", "legal"]

  $arr = ["O", "PHP", "é", "muito", "legal"];
  $str = implode(" ", $arr);
  echo "$str <br>"; // O PHP é muito legal




  