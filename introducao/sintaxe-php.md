# A sintaxe do PHP

- O PHP vai interpretar um bloco de código em nosso arquivo apenas se ele estiver entre as tags de PHP.
- A abertura é: <?php
- O fechamento é: ?> (obs.: opcional se tiver só código PHP)
- Coloque ; a cada instrução.
- Todo o código dentro destas tags será executado pelo PHP e, após isso, será impresso na tela.

# Short tags

- Existe um recurso chamada short tags:
  <?= $nome ?>
- É uma forma interessante de imprimir dados, pois há um echo implícito, deixando a parte do front-end, onde mistura-se o HTML e o PHP, mais legível.
- Porém, nas versões mais recentes do PHP, o uso vem sendo desencorajado e, provavelmente, o recurso será removido.
- A boa notícia é que é muit fácil resolver o problema; sempre que você se deparar com um erro referente às short tags, utilize a seguinte sintaxe:
  <?php echo $nome; ?>
