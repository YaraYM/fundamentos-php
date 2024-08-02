<?php

// Exercício 16

  // Faça as seguintes verificações em estruturas if:
  // - 5 é maior que 2?
  // - Matheus é diferente de Pedro?
  // - 12 é menor ou igual a 11?
  // - Você deve inserir os valores em variáveis.

  // $a = 5;
  // $b = 2;

  // if($a > $b) {
  //   echo "5 é maior que 2 <br>";
  // }

  // $nome1 = "Matheus";
  // $nome2 = "Pedro";

  // if($nome1 != $nome2) {
  //   echo "Matheus é diferente de Pedro <br>";
  // }

  // $c = 12;
  // $d = 11;

  // if($c <= $d) {
  //   echo "12 é menor ou igual a 11 <br>";
  // }   

  // Exercício 17

  // - Crie variáveis que recebam idades.
  // - Cheque se as idades são maiores ou iguais a 18.
  // - Se sim, imprima que a pessoa é maior de idade.
 
  // $idadeUm = 16;
  // $idadeDois = 18;
  // $idadeTres = 20;

  // if($idadeUm >= 18) {
  //   echo "A pessoa é maior de idade <br>";
  // } 

  // if($idadeDois >= 18) {
  //   echo "A pessoa é maior de idade <br>";
  // }

  // if($idadeTres >= 18) {
  //   echo "A pessoa é maior de idade <br>";
  // } 

  // Exercício 18

  // - Crie algumas variáveis com tipos de dados diferentes: string, int e boolean, por exemplo.
  // - Cheque se a variável é um inteiro.
  // - Se sim, imprima que a variável é um inteiro.
  // - Caso contrário, imprima que a variável não é um inteiro.

  // $exemploUm = "Tony Stark";
  // $exemploDois = 45;
  // $exemploTres = true;

  // if(is_int($exemploUm)) {
  //   echo "A variável é um inteiro <br>";
  // } else {
  //   echo "A variável não é um inteiro <br>";
  // } 

  // Exercício 25

  // - Crie variáveis com números e outras com string.
  // - Faça um if checando se é um número.
  // - Caso seja, atribua a multiplicação deste número por 2 em outra variável.
  // - Crie um outro if, que checa se o novo número é maior que 100.
  // - Se sim, imprima uma mensagem.

  // $a = 10;
  // $b = "Ipa";
  // $c = 20;
  // $d = "Tony";

  // if(is_int($a)) {
  //   $resultado = $a * 2;
  // } if($resultado > 100) {
  //   echo "O número é maior que 100 <br>";
  // }

// Else if

  // if(10 > 5) {
  //   echo "Entrou no if <br>";
  // } else if(10 > 6) {
  //   echo "Entrou no else if <br>";
  // }

  // Exercício 26

  // - Crie uma variável que recebe uma velocidade de um carro.
  // - Depois crie uma estrutura if que verifica essa velocidade.
  // - Se a velocidade for menor que 40, imprima que o motorista está na velocidade correta.
  // - Se igual a 40, imprima uma mensagem para o motorista tomar cuidado.
  // - Se for maior de 40, imprima uma mensagem de multa.

  // $velocidade = 50;

  // if($velocidade < 40) {
  //   echo "Você está na velocidade correta <br>";
  // } else if($velocidade == 40) {
  //   echo "Cuidado! <br>";
  // } else {
  //   echo "Você foi multado! <br>";
  // }

// Switch

  $x = 0;

  switch($x) {
    case 0:
      echo "O valor de x é 0 <br>";
      break;
    case 1:
      echo "O valor de x é 1 <br>";
      break;
    case 2:
      echo "O valor de x é 2 <br>";
      break;
    default:
      echo "O valor de x é diferente de 0, 1 e 2 <br>";
  }

  $y = "Tony";

  switch($y) {
    case "Tony":
      echo "O nome é Tony <br>";
      break;
    case "Ipa":
      echo "O nome é Ipa <br>";
      break;
    default:
      echo "O nome não foi encontrado";
  }

