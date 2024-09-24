# Inserindo dados com mysqli

- Para inserir dados com o mysqli, vamos utilizar a mesma query do SQL puro e novamente o método query
- A instrução para inserir dados é a INSERT INTO
- Devemos passar a tabela, colunas e valores

- Exemplo: 
           
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "cursophp";

            $conn = new mysqli($host, $user, $pass, $db);

            $table = "itens";
            $nome - "Xícara";
            $descricao = "É uma xícara usada de cor rosa";

            $q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

            $conn->query($q);

            $conn->close();