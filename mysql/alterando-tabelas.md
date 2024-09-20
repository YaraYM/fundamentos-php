# Alterando tabelas

- Podemos alterar uma tabela j� criada com algumas opera��es: adicionar coluna, remover coluna, modificar coluna
- Normalmente, o banco n�o costuma mudar ap�s a sua cria��o, a opera��o mais prov�vel � a adi��o de colunas
- Comandos de alterar tabelas come�am com:
            ALTER TABLE nome
            ADD/DROP COLUMN/MODIFY COLUMN nome

- Exemplos:

            ALTER TABLE carros
            ADD motor INT;

            ALTER TABLE carros
            DROP ano_fabricacao;

            ALTER TABLE carros
            MODIFY COLUMN descricao VARCHAR(500);