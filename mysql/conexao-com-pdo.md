# conex�o com PDO

- A conex�o com PDO � um pouco diferente do mysqli, mas vamos informar basicamente os mesmos par�metros, que s�o: banco de dados, host, nome do banco, usu�rio e senha
- Exemplo:
            $conn = new PDO("mysql:host=localhost;dbname=teste", $user, $pass);

            