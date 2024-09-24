# Criando usuários

- Podemos criar usuários no banco e depois utilizá-los para conectar e realizar as queries
- Além de criar, precisamos adicionar os privilégios
- Exemplo:
            CRATE USER 
              'usuario'@'localhost' 
            IDENTIFIED BY 
              'senha'
            GRANT ALL PRIVILEGES ON 
              *.* TO 'usuario'@'localhost'
            FLUSH PRIVILEGES

