# Resgatando apenas uma linha

- Para os selects que precisamos de apenas um dado retornado, podemos utilizar o fetch_row
- Este m�todo pode ser inserido deois de obter o resultado, ou seja, ap�s o get_result

- Exemplo: 
           
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "cursophp";

            $conn = new mysqli($host, $user, $pass, $db);

            $id = 6;

            $stmt = $conn->prepare("SELECT * FROM itens WHERE id = :id");

            $stmt->bind_param("i", $id);

            $stmt->execute();

            $result = $stmt->get_result();

            $item = $result->fetch_row();

            print_r($item);

            $conn->close();