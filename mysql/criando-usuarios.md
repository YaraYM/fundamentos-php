# Criando usu�rios

- Podemos criar usu�rios no banco e depois utiliz�-los para conectar e realizar as queries
- Al�m de criar, precisamos adicionar os privil�gios
- Exemplo:
            CRATE USER 
              'usuario'@'localhost' 
            IDENTIFIED BY 
              'senha'
            GRANT ALL PRIVILEGES ON 
              *.* TO 'usuario'@'localhost'
            FLUSH PRIVILEGES

