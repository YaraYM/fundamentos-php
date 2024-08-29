# Interpolando variáveis

- Podemos interpolar variáveis em strings de duas formas: utilizando aspas duplas e colocando a variável e também com chaves e o nome da variável
- Não há diferença em ambas as formas
- Exemplos:
            "Interpolando a variável $teste"
            "Interpolando a variável {$teste}"

# Valores de escape

- Podemos utilizar alguns valores que executam funções especiais em strings
- Precisamos utilizar aspas duplas
- Exemplos: 
  - \n = nova linha
  - \t = tab
  - \\ = barra invertida
  - \$ = sinal de dólar

# Função print

- A função print tem a funcionalidade semelhante de echo
- Pode imprimir uma string que foi passada como argumento
- Exemplo:
            print("testando");

# Função printf

- A função printf tem a funcionalidade semelhante a print
- Porém, podemos imprimir valores de forma dinâmica utilizando o símbolo %
- %s -> string
- %d -> int
- %f -> float
- Exemplos:
            $nome = "Matheus";
            printf("O nome é %s <br>", $nome); // O nome é Matheus
            $n = 10;
            printf("O número é %d e o outro é %d <br>", $n, 150); // O número é 10 e o outro é 150
            printf("A temperatura atual é %.1f <br>", 12.58); // A temperatura atual é 12.6

# Tamanho da string

- Utilizando a função strlen com uma string como parâmetro, vamos receber o tamanho da string, ou seja, a quantidade de caracteres da mesma
- Exemplo:
            $str1 = "Esta string é muito grande";
            $str2 = "Esta não";

            echo strlen($str1) . "<br>"; // 27
            echo strlen($str2) . "<br>"; // 9

            $len1 = strlen($str1);
            $len2 = strlen($str2);

            if($len1 > $len2) {
              echo "A string 1 é maior que a string 2";
            } else {
              echo "A string 2 é maior que a string 1";
            }

# Percorrendo uma string

- Podemos percorrer cada um dos caracteres de uma string
- Para isso, vamos utilizar uma estrutura de repetição e o método strlen para saber o número de caracteres
- Com isso, podemos iterar pela string completa
- Exemplo:
            $str = "Esta é uma string muito grande, ela tem vários caracteres";

            // o loop vai acontecer enquanto $i for menor que o comprimento de $str
            for($i = 0; $i < strlen($str); $i++) {
              echo "$str[$i] <br>";
            }

# Limpando uma string

- Podemos remover os espaços em branco de uma string com funções de PHP
- trim > limpa espaços antes e deopis da string
- ltrim > Limpa espaços da parte inicial da string
- rtrim > Limpa espaços da parte final da string
- Dessa forma, conseguimos remover os espaços desnecessários inseridos pelos usuários
- Exemplos:
              $str1 = "     Tony     ";
              echo "Esta é a string 1: $str1. <br>";
              $str1Limpa = trim($str1);
              echo "Esta é a string 1: $str1Limpa. <br>";

# Alterando o case

- Podemos alterar as strings para maiúsculas ou minúsculas com funções de PHP
- strtolower > Todas as letras minúsculas
- strtoupper > Todas as letras maiúsculas
- Exemplos:
              $str = "esta string está em caixa baixa <br>";
              echo strtoupper($str); // ESTA STRING ESTá EM CAIXA BAIXA
              $str2 = "E ESTA AQUI EM CAIXA ALTA";
              echo strtolower($str2); // e esta aqui em caixa alta

# Alterando o case de palavras

- Podemos alterar o case apenas das palavras com funções de PHP
- ucfirst > Primeira letra da string em maiúscula
- ucwords > Primeira letra de cada palavra em maiúscula
- Exemplos:
              $frase = "testando o case de uma palavra <br>";
              $frase2 = "testando o case de uma palavra <br>";
              echo ucfirst($frase); // Testando o case de uma palavra
              echo ucwords($frase2); // Testando O Case De Uma Palavra

# Removendo tags HTML

- Podemos remover as tags de HTML de uma string com a função strip_tags
- Geralmente usada para salvar dados no banco
- Exemplo:
            $textoHtml = "<p>Testando parágrafo.</p><div>Uma div</div><p>Outro parágrafo</p>";
            $salvarTextoBanco = strip_tags($textoHtml);
            echo $salvarTextoBanco; // Testando parágrafo.Uma divOutro parágrafo

# Resgatando uma parte da string

- Com a função substr, podemos resgatar apenas uma parte da string
- Exemplo:
            $str = "Esta é a minha string";
            $minha = substr($str, 10, 5); // string pai/ índice inicial/ comprimento da palavra
            echo $str . "<br>"; // Esta é a minha string
            echo $minha . "<br>"; // minha

            $str2 = "Testando esta string abc";
            $novaString = substr($str2, 8); // omitir comprimento = pegar até o fim
            echo $novaString . "<br>"; // esta string abc
            $novaString2 = substr($str2, 8, -3); // comprimento negativo = remover do último índice
            echo $novaString2 . "<br>"; // esta string

# String reversa

- Com PHP, podemos inverter uma string usando a função strrev
- Ela recebe a string que será invertida como parâmetro
- Exemplo: 
            $palavra = "Testando";
            $palavraInvertida = strrev($palavra);
            echo "$palavra <br>"; // Testando
            echo "$palavraInvertida <br>"; // odnatseT

# Repetição de string

- Com a função str_repeat, você pode repetir n vezes uma determinada string
- O primeiro argumento é a string que será repetida
- O segundo é o número de repetições
- Exemplo:
            $str = "Teste";
            $strRepetida = str_repeat($str, 5);
            echo "$strRepetida <br>"; // TesteTesteTesteTesteTeste

# String para array

- Podemos converter uma string em array com a função explode
- Passamos primeiro o separador como argumento
- Depois a string que vai ser convertida
- Exemplo:
            $frase = "Testando o explode";
            $fraseArray = explode(" ", $frase);
            print_r($fraseArray); // Array ( [0] => Testando [1] => o [2] => explode )
            echo "<br>"; 
            $frase2 = "Carro, Avião, Barco, Navio";
            $frase2Array = explode(",", $frase2);
            print_r($frase2Array); // // Array ( [0] => Carro [1] => Avião [2] => Barco [3] => Navio )
            echo "<br>";

            for($i = 0; $i < count($frase2); $i++) {
              echo "$frase2Array[$i] <br>";
            }
            Carro
            Avião
            Barco
            Navio

# Array para string

- Podemos converter um array em string com a função implode
- Passamos primeiro o separador como argumento, depois a string que vai ser convertida
- Exemplo: 
            $arr = ["Maçã", "Pera", "Mamão", "Batata"];
            $str = implode(", ", $arr);
            echo "$str <br>"; // Maçã, Pera, Mamão, Batata
            $arr2 = ["Avião", "Tanque", "Jipe", "Metralhadora"];
            $str2 = implode(" <-> ", $arr2);
            echo "$str2 <br>";

# Encontrando a primeira ocorrência

- Com a função strpos, podemos encontrar algum texto na string
- Se recebermos algum valor significa que o texto foi encontrado, e este valor é o índice inicial
- Se for retornado false, o texto não está na string
- Exemplo:
            $str = "Estamos testando o método strpos, com o strops podemos encontrar strings";
            $testeEncontrar = strpos($str, "strpos");
            echo "$testeEncontrar <br>"; // 27
            $testeEncontrar2 = strpos($str, "Java");
            echo "$testeEncontrar2 <br>"; // 

# Encontrando a última ocorrência

- Com a função strrpos, podemos encontrar a última ocorrência de um texto na string
- Se recebermos algum valor significa que o texto foi encontrado, e este valor é o índice inicial
- Se for retornado false, o texto não está na string
- Exemplo:
            $str = "Testando encontrando palavra teste, em uma string que tem teste";
            $palavra = strrpos($str, "teste");
            echo "$palavra <br>"; // 57

# Retornando o resto da string

- Com a função strstr, podemos encontrar um texto em uma string
- Se algo for encontrado, a função vai retornar o resto da string após o texto encontrado
- Se não encontrar nada, retorna false
- Exemplo:
            $str = "Testando o resto da string pra ver se dá certo";
            $resto = strstr($str, "resto");
            echo "$resto <br>"; // resto da string pra ver se dá certo
            
# Decompor uma URL

- Com a função parse_url, podemos decompor uma URL
- Vamos receber um array com todas as partes que a URL tem
- Alguns elementos que podem ser retornados são: protocolo, host, parâmetros
- Exemplo:
            $url = "https://www.google.com";
            $arrayUrl = parse_url($url);
            print_r($arrayUrl); // Array ([scheme] => https [host] => www.google.com)
            echo "<br>";
            echo $arrayUrl["host"]; // www.google.com
            echo "<br>";
            $url2 = "http://www.horadecodar.com.br/?busca=php";
            $arrayUrl2 = parse_url($url2); 
            print_r($arrayUrl2); // Array ([scheme] => http [host] => www.horadecodar.com.br [path] => /[query] => busca=php)
            echo "<br>";

