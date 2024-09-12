# Autoprocessamento de páginas

- Podemos criar uma página que faz o processamento dos dados e também exibe o input de informações
- Para isso, devemos criar um if que checa se o método de requisição ($_SERVER['REQUEST_METHOD']) é GET ou POST
- Depois criar as duas variações para cada uma das possibilidades ou checar se algum parâmetro veio pela requisição e, então, criar as variações