# Selecionando dados com mysqli

- Para resgatar dados com o mysqli, vamos utilizar a mesma query do SQL puro e novamente o m�todo query
- A instru��o para inserir dados � a SELECT
- Vamos inserir o m�todo query em uma vari�vel, que � onde receberemos os resultados
- Com o m�todo fetch_assoc, transformamos o resultados em um array

- Exemplo: 
           
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "cursophp";

            $conn = new mysqli($host, $user, $pass, $db);

            $q = "SELECT * FROM items";

            $result = $conn->query($q);

            $conn->close();

            // UM RESULTADO
            $item = $result->fetch_assoc();

            // TODOS OS RESULTADOS
            $itens = $result->fetch_assoc();

            print_r($itens);
