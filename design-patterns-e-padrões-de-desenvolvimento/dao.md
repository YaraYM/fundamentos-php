# O que é DAO?

- DAO = Data Access Object
- Padrão de código utilizado para persistência de dados
- Utilizado apenas em abordagens orientadas a objetos
- Há uma classe DAO que será responsável pelas interações ao DB
- Agua como um intermediário de aplicação e banco de dados
- Separa a regra de negócio da interação com o banco de dados
- Possibilita também a troca de bancos ou modelo de conexão facilmente

## DAO na teoria

- Trabalharemos com duas classes
- Exemplificando com uma classe de usuário
- UserDAO: manipulação de dados do banco
- User: todas as ações que não envolvem o banco
- Create: user monta um novo usuário com seus campos necessários do banco, UserDAO recebe este objeto e insere o usuário no banco

## Interface do DAO

- Normalmente também é criada uma interface para o DAO
- Esta interface molda a classe DAO, definindo seus métodos
- Desta maneira temos um esqueleto para seguir e implementar na classe que vai manipular o banco de dados
- Os métodos principais da interface são pelo menos os que constituem o CRUD
- A interface pode ser re-implementada em diversos banco, por exemplo