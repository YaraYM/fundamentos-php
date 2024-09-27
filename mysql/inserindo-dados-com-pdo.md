# Inserindo dados com PDO

- Em PDO, vamos utilizar uma abordagem parecida com o mysqli
- Utilizaremos o método prepare para realizar a query com prepared statements
- Depois, bind_param para estabelecer os valores dos parâmetros
- Por fim, execute fará a execução da query

- Exemplo:
            $stmt = $con->prepare("INSERT INTO x(a, b) VALUES(?, ?)");

            $host = "localhost";
            $db = "cursophp";
            $user = "root";
            $pass = "";

            $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

            // ASSUNTO DA AULA
            $stmt = $con->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

            $stmt->bindParam(":nome", "Suporte monitor");
            $stmt->bindParam(":descricao", "O suporte está novo e na caixa ainda.");

            $stmt->execute();