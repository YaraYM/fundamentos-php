# Inserindo dados com mysqli

- Para inserir dados com o mysqli, vamos utilizar a mesma query do SQL puro e novamente o m�todo query
- A instru��o para inserir dados � a INSERT INTO
- Devemos passar a tabela, colunas e valores

- Exemplo: 
           
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "cursophp";

            $conn = new mysqli($host, $user, $pass, $db);

            $table = "itens";
            $nome - "X�cara";
            $descricao = "� uma x�cara usada de cor rosa";

            $q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

            $conn->query($q);

            $conn->close();