<?php

  // pular linha
  // echo "Isso aqui vai ficar na primeira linha \n E isso na segunda linha <br>";

  // // tab
  // echo "Testando o \t aqui <br>";

  // // barra invertida
  // echo "Barra invertida \\ <br>";

  // // d�lar
  // echo "D�lar \$ <br>";

  // Exerc�cio 39

  // - Crie uma fun��o que recebe caracter�sticas de algum objeto como argumento (carro, sof�, cafeteira), em array associativo
  // - O array deve conter nome => preco
  // - Retorne apenas os itens que custam mais de R$ 10
  // - Imprima o retorno

  // $arr = [
  //   'porta' => 100,
  //   'ma�aneta' => 5,
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

  // Exerc�cio 40

  // - Percorra a string: O rato roeu a roupa do rei de Roma, a partir de um loop
  // - Imprima o n�mero de letras "a" desta string

  // $frase = "O rato roeu a roupa do rei de Roma";

  // $contadorDeAs = 0;

  // for($i = 0; $i < strlen($frase); $i++) {

  //   if($frase[$i] == 'a') {
  //     $contadorDeAs++;
  //   }

  // }

  // echo "O n�mero de letras 'a' �: $contadorDeAs"; // 4

  // Exerc�cio 41

  // - Transforme a string "este item est� em promo��o" em "Este item est� em PROMO��O"
  // - Observa��o: voc� pode separar as strings, mas n�o pode escrever em caixa alta ou baixa manualmante, s� com fun��es

  // $frase = "este item est� em promo��o";
  // echo ucfirst($frase) . strtoupper(substr($frase, -9)); // Este item est� em PROMO��O

  // $str = "este item est� em promo��o";
  // $promo = "promo��o";

  // echo ucfirst($str) . strtoupper($promo); // Este item est� em PROMO��O

  // Exerc�cio 42

  // - Na frase "Cad� meu queijo? Ele estava aqui em cima
  // - Resgate a palavra 'queijo'
  // - Resgate a palavre 'estava'

  // $frase = "Cad� meu queijo? Ele estava aqui em cima";
  // $queijo = substr($frase, 12, 6); 
  // echo $queijo . "<br>"; // queijo
  // $estava = substr($frase, 24, 6);
  // echo $estava; // estava

  // Exerc�cio 43

  // - Converta a seguinte string para array:
  //   carro-navio-helic�ptero-barco-jangada

  $str = "carro-navio-helic�ptero-barco-jangada";
  $arr = explode("-", $str);
  
  for($i = 0; $i < count($arr); $i++) {
    echo "Item: $arr[$i] . <br>";
  }
  // Item: carro
  // Item: navio
  // Item: helic�ptero
  // Item: barco
  // Item: jangada

  // Exerc�cio 44

  // - Converta a seguinte array para uma string:
  //   ["O", "PHP", "�", "muito", "legal"]

  $arr = ["O", "PHP", "�", "muito", "legal"];
  $str = implode(" ", $arr);
  echo "$str <br>"; // O PHP � muito legal




  