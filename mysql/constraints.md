# Constraints

- Constraints s�o caracter�sticas que podem ser adicionadas na hora da cria��o de uma tabela
- Podemos definir: campos que n�o podem ser nulos, campos �nicos, chaves prim�rias e mais
- O comando fica ap�s o tipo da coluna:
      coluna tipodedado constraint;


## NOT NULL

- Essa constraint n�o permite que o dado adicionado a esta coluna esteja vazio
- Exemplo:
            nome VARCHAR(100) NOT NULL

## UNIQUE

- Garante que todos os valores da coluna que forem adicionados sejam �nicos
- Obs.: podemos unir v�rias constraints
- Exemplo:
            nome VARCHAR(100) UNIQUE;
            email VARCHAR(255) NOT NULL UNIQUE;

## PRIMARY KEY

- As chaves prim�rias devem ter valores �nicos e n�o podem ser nulas
- Geralmente colocadas na coluna de ID
- Uma tabela s� pode ter uma PRIMARY KEY
- Exemplo:
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY;
            