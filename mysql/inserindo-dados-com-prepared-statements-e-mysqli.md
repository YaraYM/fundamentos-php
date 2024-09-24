# Inserindo dados com prepared statements e mysqli

- Para inserir dados com prepared statements, vamos seguir a ideia da aula anterior
- prepare > bind_param > execute
- Como teremos uma vari�vel para guardar estes tr�s passos, tamb�m devemos fechar a conex�o desta vari�vel
- Ela � comumente chamada de statement (declara��o)
- Lembre-se de fechar a conex�o

- Exemplo: 
           
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "cursophp";

            $conn = new mysqli($host, $user, $pass, $db);

            $nome = "Suporte de microfone";
            $descricao = "O suporte � novo e foi fabricado na China";

            $stmt = $conn->prepare("INSERT INTO items (nome, descricao) VALUES (?, ?)");

            $stmt->bind_param("ss", $nome, $descricao); // s = string, i = integer, d = double

            $stmt->execute();