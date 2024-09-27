# Inserindo dados com PDO

- Em PDO, vamos utilizar uma abordagem parecida com o mysqli
- Utilizaremos o m�todo prepare para realizar a query com prepared statements
- Depois, bind_param para estabelecer os valores dos par�metros
- Por fim, execute far� a execu��o da query

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
            $stmt->bindParam(":descricao", "O suporte est� novo e na caixa ainda.");

            $stmt->execute();