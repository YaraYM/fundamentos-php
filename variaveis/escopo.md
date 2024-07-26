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

## Vari�vel Est�tica

- A vari�vel est�tica � declarada com a instru��o static.
- O valor da mesma � mantido e alterado a cada execu��o de uma fun��o.
- � interessante este comportamento, pois as vari�veis de escopo local semrpe s�o resetadas.

## Par�metros de fun��o

- Os par�metros de fun��o tamb�m s�o considerados tipos de vari�veis.
- Este recurso nos ajuda a criar fun��es com valores din�micos.
- Podemos alter�-los a acada invoca��o da mesma.
- Podemos passar mais de um par�metro para uma fun��o.