# Checando a conex�o

- Para verificar se houve algum erro na conex�o, podemos utilizar a propriedade connect_errno
- Para verificar o erro, podemos utilizar a propriedade connect_error()
- Podemos inserir a checagem em um if e mostrar a mensagem de erro com um echo
- Exemplo:
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "cursophp";

            $conn = new mysqli($host, $user, $pass, $db);

            if($conn->connect_errno) {
              echo "Erro na conex�o! <br>";
              // echo "Erro: " . mysqli_connect_error();
              echo "Erro: " . $conn->connect_error;
            }