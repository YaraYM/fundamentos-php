# Atualizando dados com prepared

- Para atualizar dados, vamos seguir os mesmos passos de INSERT e SELECT
- Na hora de inserir o SET para atualizar os campos, vamos inserir os prepared statements
- Sequ�ncia: prepare > bind_param > execute

- Exemplo: 
           
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "cursophp";

            $conn = new mysqli($host, $user, $pass, $db);

            $id = 11;

            $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

            $nome = "Sof�";
            $descricao = "Sof� semi novo, com madeira de demoli��o";

            $stmt->bind_param("ssi", $nome, $descricao, $id);

            $stmt->execute();

            if($stmt->error) {
              echo "Erro: " . $stmt->error; 
            }