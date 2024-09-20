# Constraints

- Constraints são características que podem ser adicionadas na hora da criação de uma tabela
- Podemos definir: campos que não podem ser nulos, campos únicos, chaves primárias e mais
- O comando fica após o tipo da coluna:
      coluna tipodedado constraint;


## NOT NULL

- Essa constraint não permite que o dado adicionado a esta coluna esteja vazio
- Exemplo:
            nome VARCHAR(100) NOT NULL

## UNIQUE

- Garante que todos os valores da coluna que forem adicionados sejam únicos
- Obs.: podemos unir várias constraints
- Exemplo:
            nome VARCHAR(100) UNIQUE;
            email VARCHAR(255) NOT NULL UNIQUE;

## PRIMARY KEY

- As chaves primárias devem ter valores únicos e não podem ser nulas
- Geralmente colocadas na coluna de ID
- Uma tabela só pode ter uma PRIMARY KEY
- Exemplo:
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY;
            