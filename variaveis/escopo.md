# Escopo

- Como em outras linguagens, em PHP temos escopo de variáveis:

  - Local: variável declarada em uma função
  - Global: variáveis declaradas fora de funções
  - Static: variável declarada dentro da função, porém o su valor permanece salvo entre chamadas da função
  - Parâmetros de função: variáveis passdas para uma função, podendo ser utilizadas ao longo da mesma

## Escopo Local

- A variável local tem seu escopo definido dentro de uma função.
- Ela não é acessível fora da mesma.
- O seu valor sempre é resetado quando a função é finalizada.


## Escopo Global

- A principal característica da variável global é ser declarada fora de funções.
- Por comportamento padrão, não são acessíveis dentro de funções.
- Precisamos usar a palavra global para isso.
- Essa função da variável global não ser acessível dentro de funções previne muitos problemas sno software.