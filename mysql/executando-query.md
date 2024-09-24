# Executando uma query

- Para executar uma query, vamos usar o m�todo query
- Ele deve ser utilizado a partir do objeto que fez a conex�o
- Vamos receber um determinado retorno como resultado, que podem ser os dados, caso seja um SELECT, por exemplo
- � importante, ao fim de todas as queries, fechar a conex�o com o m�todo close
- Conex�es abertas gastam recursos do servidor e prejudicam a aplica��o

- Exemplo: 
           
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "cursophp";

            $conn = new mysqli($host, $user, $pass, $db);

            $sql = "SELECT * FROM items";

            $result = $conn->query($sql);

            print_r($result); // mysqli_result Object ([current_field] => 0 [field_count] => 3 [lengths] => 6 [type] => 0)

            $conn->close();