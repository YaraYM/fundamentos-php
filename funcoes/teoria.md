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