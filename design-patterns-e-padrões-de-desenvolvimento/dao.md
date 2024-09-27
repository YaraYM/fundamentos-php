# O que � DAO?

- DAO = Data Access Object
- Padr�o de c�digo utilizado para persist�ncia de dados
- Utilizado apenas em abordagens orientadas a objetos
- H� uma classe DAO que ser� respons�vel pelas intera��es ao DB
- Agua como um intermedi�rio de aplica��o e banco de dados
- Separa a regra de neg�cio da intera��o com o banco de dados
- Possibilita tamb�m a troca de bancos ou modelo de conex�o facilmente

## DAO na teoria

- Trabalharemos com duas classes
- Exemplificando com uma classe de usu�rio
- UserDAO: manipula��o de dados do banco
- User: todas as a��es que n�o envolvem o banco
- Create: user monta um novo usu�rio com seus campos necess�rios do banco, UserDAO recebe este objeto e insere o usu�rio no banco

## Interface do DAO

- Normalmente tamb�m � criada uma interface para o DAO
- Esta interface molda a classe DAO, definindo seus m�todos
- Desta maneira temos um esqueleto para seguir e implementar na classe que vai manipular o banco de dados
- Os m�todos principais da interface s�o pelo menos os que constituem o CRUD
- A interface pode ser re-implementada em diversos banco, por exemplo