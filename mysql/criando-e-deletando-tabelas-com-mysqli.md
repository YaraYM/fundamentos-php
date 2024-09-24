# Criando e deletando tabelas com mysqli

- Para criar e deletar tabelas, vamos utilizar as mesmas queries de SQL puro, porém com o auxílio do método query
- DROP TABLE para deletar tabelas
- CREATE TABLE para criar tabelas
- Lembre de fechar a conexão!

- Exemplo: 
           
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "cursophp";

            $conn = new mysqli($host, $user, $pass, $db);

            $q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100));

            $conn->query($q);

            $conn->close();

            $r = "DROP TABLE teste";

            $conn->query($r);
          
            $conn->close();