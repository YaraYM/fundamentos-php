<?php

// Exerc�cio 16

  // Fa�a as seguintes verifica��es em estruturas if:
  // - 5 � maior que 2?
  // - Matheus � diferente de Pedro?
  // - 12 � menor ou igual a 11?
  // - Voc� deve inserir os valores em vari�veis.

  // $a = 5;
  // $b = 2;

  // if($a > $b) {
  //   echo "5 � maior que 2 <br>";
  // }

  // $nome1 = "Matheus";
  // $nome2 = "Pedro";

  // if($nome1 != $nome2) {
  //   echo "Matheus � diferente de Pedro <br>";
  // }

  // $c = 12;
  // $d = 11;

  // if($c <= $d) {
  //   echo "12 � menor ou igual a 11 <br>";
  // }   

  // Exerc�cio 17

  // - Crie vari�veis que recebam idades.
  // - Cheque se as idades s�o maiores ou iguais a 18.
  // - Se sim, imprima que a pessoa � maior de idade.
 
  // $idadeUm = 16;
  // $idadeDois = 18;
  // $idadeTres = 20;

  // if($idadeUm >= 18) {
  //   echo "A pessoa � maior de idade <br>";
  // } 

  // if($idadeDois >= 18) {
  //   echo "A pessoa � maior de idade <br>";
  // }

  // if($idadeTres >= 18) {
  //   echo "A pessoa � maior de idade <br>";
  // } 

  // Exerc�cio 18

  // - Crie algumas vari�veis com tipos de dados diferentes: string, int e boolean, por exemplo.
  // - Cheque se a vari�vel � um inteiro.
  // - Se sim, imprima que a vari�vel � um inteiro.
  // - Caso contr�rio, imprima que a vari�vel n�o � um inteiro.

  // $exemploUm = "Tony Stark";
  // $exemploDois = 45;
  // $exemploTres = true;

  // if(is_int($exemploUm)) {
  //   echo "A vari�vel � um inteiro <br>";
  // } else {
  //   echo "A vari�vel n�o � um inteiro <br>";
  // } 

  // Exerc�cio 25

  // - Crie vari�veis com n�meros e outras com string.
  // - Fa�a um if checando se � um n�mero.
  // - Caso seja, atribua a multiplica��o deste n�mero por 2 em outra vari�vel.
  // - Crie um outro if, que checa se o novo n�mero � maior que 100.
  // - Se sim, imprima uma mensagem.

  // $a = 10;
  // $b = "Ipa";
  // $c = 20;
  // $d = "Tony";

  // if(is_int($a)) {
  //   $resultado = $a * 2;
  // } if($resultado > 100) {
  //   echo "O n�mero � maior que 100 <br>";
  // }

// Else if

  // if(10 > 5) {
  //   echo "Entrou no if <br>";
  // } else if(10 > 6) {
  //   echo "Entrou no else if <br>";
  // }

  // Exerc�cio 26

  // - Crie uma vari�vel que recebe uma velocidade de um carro.
  // - Depois crie uma estrutura if que verifica essa velocidade.
  // - Se a velocidade for menor que 40, imprima que o motorista est� na velocidade correta.
  // - Se igual a 40, imprima uma mensagem para o motorista tomar cuidado.
  // - Se for maior de 40, imprima uma mensagem de multa.

  // $velocidade = 50;

  // if($velocidade < 40) {
  //   echo "Voc� est� na velocidade correta <br>";
  // } else if($velocidade == 40) {
  //   echo "Cuidado! <br>";
  // } else {
  //   echo "Voc� foi multado! <br>";
  // }

// Switch

  $x = 0;

  switch($x) {
    case 0:
      echo "O valor de x � 0 <br>";
      break;
    case 1:
      echo "O valor de x � 1 <br>";
      break;
    case 2:
      echo "O valor de x � 2 <br>";
      break;
    default:
      echo "O valor de x � diferente de 0, 1 e 2 <br>";
  }

  $y = "Tony";

  switch($y) {
    case "Tony":
      echo "O nome � Tony <br>";
      break;
    case "Ipa":
      echo "O nome � Ipa <br>";
      break;
    default:
      echo "O nome n�o foi encontrado";
  }

