# O que são funções?

- São blocos de códigos que possuem nomes
- Realizam uma ação e podem ser reaproveitadas (chamadas novamente) ao longo do programa
- Podemos passar parâmetros para funções, que moldam a sua execução
- A criação de funções reduz a duplicidade de código e também melhora a manutenção do mesmo
- O PHP possui diversas funções prontas que podemos utilizar

# Chamando funções

- Para chamar uma função, basta colocar o seu nome e abrir e fechar parênteses
- Exemplo: funcaoTeste()
- Algumas  funções exigem parâmetros
- O ato de chamar uma função também é conhecido como invocar
- O PHP tem diversas funções para utilizarmos no nosso código, por exemplo: strleen, strtoupper, strolower, print_r, var_dump

# Parâmetros de função

- Podemos passar parâmetros para a função
- Estes parâmetros são como variáveis que são utilizadas dentro da função para moldar a sua execução
- Não há número máximo de parâmetros
- Exemplo:
            function(param1, param2) {
              // código
            }

# Retorno de funções

- Normalmente, funções retornam algo; para isso, utilizamos a instrução return
- O objetivo é armazenar o valor de retorno em uma variável e utilizá-lo posteriormente no código
- Exemplo:
            function x(a, b) {
              return algumaCoisa;
            }

# Relembrando escopo e funções

- Nas funções temos um escopo específico chamado de local, onde as suas variáveis são exclusivamente delas
- Podemos utilizar as variáveis globais com a instrução global
- Além disso, há o static, onde podemos manter um valor após a execução de uma função, o que normalmente é resetado

# Parâmetros default

- Podemos passar parâmetros que já possuem um valor pré-determinado
- Então, caso você não passe este parâmetro, o valor default entre em cena
- A função será executada normalmente com o valor definido
- Quando uma função tem mais de um parâmetro, uma boa prática é inserir os com valores default por último
- Exemplo:
            function teste($a="padrão") {
              // código
            }

# Argumentos das funções

- No PHP, temos duas funções interessantes para aprender mais sobre funções
- func_get_arg = Retorna uma lista com os argumentos de uma função
- func_num_args = Retorna o número de argumentos de uma função

# Retornando múltiplos valores

- Caso seja necessário retornar vários valores em uma função, podemos formar um array para retorno e, então, acessar os índices de forma isolada com a nova variável que contém o retorno
- Exemplo:
            function teste() {
              return ["a", 10, true];
            }

# Depuração de valores

- Utilizamos duas funções para verificar dados formatados: print_r e var_dump
- As duas apresentam os dados de forma semelhante
- Porém, var_dump exibe de uma forma "human readable"