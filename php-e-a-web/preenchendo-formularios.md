# Preenchimento de formul�rio

- Podemos preencher o formul�rio com dados que vieram da requisi��o
- Isso acontece bastante em resultados de busca ou edi��es de registros
- Podemos checar se o dado foi enviado e recebido para a p�gina e utilizar o echo para exibir no atributo value do input
- Exemplo:
            <input type="text" value="<?php echo $nome; ?>">