# Concectando com mysqli

- Conectar o MySQL com o mysqli � muito simples
- Precisamos utilizar a fun��o mysqli_connect
- Passar os par�metros de: host, usu�rio, senha e banco de dados
- Com a conex�o feita, podemos utilizar as queries
- Exemplo:
            $conn = new mysqli("host", "user", "pass", "db");
            $conn = new mysqli("localhost", "root", "", "cursophp");

            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "cursophp";

            $conn = new mysqli($host, $user, $pass, $db);