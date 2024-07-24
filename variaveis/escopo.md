# Escopo

- Como em outras linguagens, em PHP temos escopo de vari�veis:

  - Local: vari�vel declarada em uma fun��o
  - Global: vari�veis declaradas fora de fun��es
  - Static: vari�vel declarada dentro da fun��o, por�m o su valor permanece salvo entre chamadas da fun��o
  - Par�metros de fun��o: vari�veis passdas para uma fun��o, podendo ser utilizadas ao longo da mesma

## Escopo Local

- A vari�vel local tem seu escopo definido dentro de uma fun��o.
- Ela n�o � acess�vel fora da mesma.
- O seu valor sempre � resetado quando a fun��o � finalizada.


## Escopo Global

- A principal caracter�stica da vari�vel global � ser declarada fora de fun��es.
- Por comportamento padr�o, n�o s�o acess�veis dentro de fun��es.
- Precisamos usar a palavra global para isso.
- Essa fun��o da vari�vel global n�o ser acess�vel dentro de fun��es previne muitos problemas sno software.