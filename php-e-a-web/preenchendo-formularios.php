<?php

  $usuario = [
    'nome' => 'Lucas',
    'idade' => 32,
    'profiss�o' => 'Desenvolvedor'
  ];

  if($usuario) {

    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profiss�o'];

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="">
    <div>
      <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>">
    </div>
    <div>
      <input type="text" name="idade" placeholder="Digite sua idade" value="<?= $idade ?>">
    </div>
    <div>
      <input type="text" name="profissao" placeholder="Digite sua profiss�o" value="<?= $profissao ?>">
    </div>
    <div>
      <input type="submit" value="Enviar">
    </div>
  </form>
</body>
</html>