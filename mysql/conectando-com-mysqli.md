# Concectando com mysqli

- Conectar o MySQL com o mysqli é muito simples
- Precisamos utilizar a função mysqli_connect
- Passar os parâmetros de: host, usuário, senha e banco de dados
- Com a conexão feita, podemos utilizar as queries
- Exemplo:
            $conn = new mysqli("host", "user", "pass", "db");
            $conn = new mysqli("localhost", "root", "", "cursophp");

            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "cursophp";

            $conn = new mysqli($host, $user, $pass, $db);