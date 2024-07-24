# Variável por referência

- Podemos criar uma variável com referência a outra.
- O símbolo é =&
- Se mudamos a variável de referência, a referenciada muda o valor, e o contrário também gera a mudança.

      $x = 2;
      $y =& $x;