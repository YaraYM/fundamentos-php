# Inserindo dados com prepared statements e mysqli

- Para inserir dados com prepared statements, vamos seguir a ideia da aula anterior
- prepare > bind_param > execute
- Como teremos uma variável para guardar estes três passos, também devemos fechar a conexão desta variável
- Ela é comumente chamada de statement (declaração)
- Lembre-se de fechar a conexão

- Exemplo: 
           
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "cursophp";

            $conn = new mysqli($host, $user, $pass, $db);

            $nome = "Suporte de microfone";
            $descricao = "O suporte é novo e foi fabricado na China";

            $stmt = $conn->prepare("INSERT INTO items (nome, descricao) VALUES (?, ?)");

            $stmt->bind_param("ss", $nome, $descricao); // s = string, i = integer, d = double

            $stmt->execute();