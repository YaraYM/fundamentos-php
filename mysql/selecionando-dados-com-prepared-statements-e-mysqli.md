# Selecionando dados com prepared

- Para selecionar dados com prepared statements, devemos resgatar os dados com o m�todo fetch_all
- A sequ�ncia ser�: prepare > bind_param > execute > get_result > fetch_all
- Depois devemos fechar a conex�o

- Exemplo: 
           
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "cursophp";

            $conn = new mysqli($host, $user, $pass, $db);

            $id = 4;

            $stmt = $conn->prepare("SELECT * FROM itens WHERE id >?");

            $stmt->bind_param("i", $id);

            $stmt->execute();

            $result = $stmt->get_result();

            $data = $result->fetch_all();

            print_r($data);