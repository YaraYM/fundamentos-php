# O que s�o fun��es?

- S�o blocos de c�digos que possuem nomes
- Realizam uma a��o e podem ser reaproveitadas (chamadas novamente) ao longo do programa
- Podemos passar par�metros para fun��es, que moldam a sua execu��o
- A cria��o de fun��es reduz a duplicidade de c�digo e tamb�m melhora a manuten��o do mesmo
- O PHP possui diversas fun��es prontas que podemos utilizar

# Chamando fun��es

- Para chamar uma fun��o, basta colocar o seu nome e abrir e fechar par�nteses
- Exemplo: funcaoTeste()
- Algumas  fun��es exigem par�metros
- O ato de chamar uma fun��o tamb�m � conhecido como invocar
- O PHP tem diversas fun��es para utilizarmos no nosso c�digo, por exemplo: strleen, strtoupper, strolower, print_r, var_dump

# Par�metros de fun��o

- Podemos passar par�metros para a fun��o
- Estes par�metros s�o como vari�veis que s�o utilizadas dentro da fun��o para moldar a sua execu��o
- N�o h� n�mero m�ximo de par�metros
- Exemplo:
            function(param1, param2) {
              // c�digo
            }

# Retorno de fun��es

- Normalmente, fun��es retornam algo; para isso, utilizamos a instru��o return
- O objetivo � armazenar o valor de retorno em uma vari�vel e utiliz�-lo posteriormente no c�digo
- Exemplo:
            function x(a, b) {
              return algumaCoisa;
            }

# Relembrando escopo e fun��es

- Nas fun��es temos um escopo espec�fico chamado de local, onde as suas vari�veis s�o exclusivamente delas
- Podemos utilizar as vari�veis globais com a instru��o global
- Al�m disso, h� o static, onde podemos manter um valor ap�s a execu��o de uma fun��o, o que normalmente � resetado

# Par�metros default

- Podemos passar par�metros que j� possuem um valor pr�-determinado
- Ent�o, caso voc� n�o passe este par�metro, o valor default entre em cena
- A fun��o ser� executada normalmente com o valor definido
- Quando uma fun��o tem mais de um par�metro, uma boa pr�tica � inserir os com valores default por �ltimo
- Exemplo:
            function teste($a="padr�o") {
              // c�digo
            }

# Argumentos das fun��es

- No PHP, temos duas fun��es interessantes para aprender mais sobre fun��es
- func_get_arg = Retorna uma lista com os argumentos de uma fun��o
- func_num_args = Retorna o n�mero de argumentos de uma fun��o

# Retornando m�ltiplos valores

- Caso seja necess�rio retornar v�rios valores em uma fun��o, podemos formar um array para retorno e, ent�o, acessar os �ndices de forma isolada com a nova vari�vel que cont�m o retorno
- Exemplo:
            function teste() {
              return ["a", 10, true];
            }

# Depura��o de valores

- Utilizamos duas fun��es para verificar dados formatados: print_r e var_dump
- As duas apresentam os dados de forma semelhante
- Por�m, var_dump exibe de uma forma "human readable"