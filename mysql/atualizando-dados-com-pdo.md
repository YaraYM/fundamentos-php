# Atualizando dados com PDO

- Para atualizar dados, a abordagem também é parecida
- Vamos seguir com a sequência: prepare > bind_param > execute
- E então, a query persistirá no banco:
        $stmt = $con->prepare("UPDATE x SET a = ?, b = ? WHERE c = ?");

- Exemplo:
            $host = "localhost";
            $db = "cursophp";
            $user = "root";
            $pass = "";

            $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

            // ASSUNTO DA AULA
            $id = 5;
            $nome = "Teclado Microsoft";
            $descicao = "Este teclado é novo e está na caixa.";

            $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descicao WHERE id = :id");

            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":descricao", $id);

            $stmt->execute();
