# A sintaxe do PHP

- O PHP vai interpretar um bloco de c�digo em nosso arquivo apenas se ele estiver entre as tags de PHP.
- A abertura �: <?php
- O fechamento �: ?> (obs.: opcional se tiver s� c�digo PHP)
- Coloque ; a cada instru��o.
- Todo o c�digo dentro destas tags ser� executado pelo PHP e, ap�s isso, ser� impresso na tela.

# Short tags

- Existe um recurso chamada short tags:
  <?= $nome ?>
- � uma forma interessante de imprimir dados, pois h� um echo impl�cito, deixando a parte do front-end, onde mistura-se o HTML e o PHP, mais leg�vel.
- Por�m, nas vers�es mais recentes do PHP, o uso vem sendo desencorajado e, provavelmente, o recurso ser� removido.
- A boa not�cia � que � muit f�cil resolver o problema; sempre que voc� se deparar com um erro referente �s short tags, utilize a seguinte sintaxe:
  <?php echo $nome; ?>
