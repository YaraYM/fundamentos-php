# Interpolando vari�veis

- Podemos interpolar vari�veis em strings de duas formas: utilizando aspas duplas e colocando a vari�vel e tamb�m com chaves e o nome da vari�vel
- N�o h� diferen�a em ambas as formas
- Exemplos:
            "Interpolando a vari�vel $teste"
            "Interpolando a vari�vel {$teste}"

# Valores de escape

- Podemos utilizar alguns valores que executam fun��es especiais em strings
- Precisamos utilizar aspas duplas
- Exemplos: 
  - \n = nova linha
  - \t = tab
  - \\ = barra invertida
  - \$ = sinal de d�lar

# Fun��o print

- A fun��o print tem a funcionalidade semelhante de echo
- Pode imprimir uma string que foi passada como argumento
- Exemplo:
            print("testando");

# Fun��o printf

- A fun��o printf tem a funcionalidade semelhante a print
- Por�m, podemos imprimir valores de forma din�mica utilizando o s�mbolo %
- %s -> string
- %d -> int
- %f -> float
- Exemplos:
            $nome = "Matheus";
            printf("O nome � %s <br>", $nome); // O nome � Matheus
            $n = 10;
            printf("O n�mero � %d e o outro � %d <br>", $n, 150); // O n�mero � 10 e o outro � 150
            printf("A temperatura atual � %.1f <br>", 12.58); // A temperatura atual � 12.6

# Tamanho da string

- Utilizando a fun��o strlen com uma string como par�metro, vamos receber o tamanho da string, ou seja, a quantidade de caracteres da mesma
- Exemplo:
            $str1 = "Esta string � muito grande";
            $str2 = "Esta n�o";

            echo strlen($str1) . "<br>"; // 27
            echo strlen($str2) . "<br>"; // 9

            $len1 = strlen($str1);
            $len2 = strlen($str2);

            if($len1 > $len2) {
              echo "A string 1 � maior que a string 2";
            } else {
              echo "A string 2 � maior que a string 1";
            }

# Percorrendo uma string

- Podemos percorrer cada um dos caracteres de uma string
- Para isso, vamos utilizar uma estrutura de repeti��o e o m�todo strlen para saber o n�mero de caracteres
- Com isso, podemos iterar pela string completa
- Exemplo:
            $str = "Esta � uma string muito grande, ela tem v�rios caracteres";

            // o loop vai acontecer enquanto $i for menor que o comprimento de $str
            for($i = 0; $i < strlen($str); $i++) {
              echo "$str[$i] <br>";
            }

# Limpando uma string

- Podemos remover os espa�os em branco de uma string com fun��es de PHP
- trim > limpa espa�os antes e deopis da string
- ltrim > Limpa espa�os da parte inicial da string
- rtrim > Limpa espa�os da parte final da string
- Dessa forma, conseguimos remover os espa�os desnecess�rios inseridos pelos usu�rios
- Exemplos:
              $str1 = "     Tony     ";
              echo "Esta � a string 1: $str1. <br>";
              $str1Limpa = trim($str1);
              echo "Esta � a string 1: $str1Limpa. <br>";

# Alterando o case

- Podemos alterar as strings para mai�sculas ou min�sculas com fun��es de PHP
- strtolower > Todas as letras min�sculas
- strtoupper > Todas as letras mai�sculas
- Exemplos:
              $str = "esta string est� em caixa baixa <br>";
              echo strtoupper($str); // ESTA STRING EST� EM CAIXA BAIXA
              $str2 = "E ESTA AQUI EM CAIXA ALTA";
              echo strtolower($str2); // e esta aqui em caixa alta

# Alterando o case de palavras

- Podemos alterar o case apenas das palavras com fun��es de PHP
- ucfirst > Primeira letra da string em mai�scula
- ucwords > Primeira letra de cada palavra em mai�scula
- Exemplos:
              $frase = "testando o case de uma palavra <br>";
              $frase2 = "testando o case de uma palavra <br>";
              echo ucfirst($frase); // Testando o case de uma palavra
              echo ucwords($frase2); // Testando O Case De Uma Palavra

# Removendo tags HTML

- Podemos remover as tags de HTML de uma string com a fun��o strip_tags
- Geralmente usada para salvar dados no banco
- Exemplo:
            $textoHtml = "<p>Testando par�grafo.</p><div>Uma div</div><p>Outro par�grafo</p>";
            $salvarTextoBanco = strip_tags($textoHtml);
            echo $salvarTextoBanco; // Testando par�grafo.Uma divOutro par�grafo

# Resgatando uma parte da string

- Com a fun��o substr, podemos resgatar apenas uma parte da string
- Exemplo:
            $str = "Esta � a minha string";
            $minha = substr($str, 10, 5); // string pai/ �ndice inicial/ comprimento da palavra
            echo $str . "<br>"; // Esta � a minha string
            echo $minha . "<br>"; // minha

            $str2 = "Testando esta string abc";
            $novaString = substr($str2, 8); // omitir comprimento = pegar at� o fim
            echo $novaString . "<br>"; // esta string abc
            $novaString2 = substr($str2, 8, -3); // comprimento negativo = remover do �ltimo �ndice
            echo $novaString2 . "<br>"; // esta string

# String reversa

- Com PHP, podemos inverter uma string usando a fun��o strrev
- Ela recebe a string que ser� invertida como par�metro
- Exemplo: 
            $palavra = "Testando";
            $palavraInvertida = strrev($palavra);
            echo "$palavra <br>"; // Testando
            echo "$palavraInvertida <br>"; // odnatseT

# Repeti��o de string

- Com a fun��o str_repeat, voc� pode repetir n vezes uma determinada string
- O primeiro argumento � a string que ser� repetida
- O segundo � o n�mero de repeti��es
- Exemplo:
            $str = "Teste";
            $strRepetida = str_repeat($str, 5);
            echo "$strRepetida <br>"; // TesteTesteTesteTesteTeste

# String para array

- Podemos converter uma string em array com a fun��o explode
- Passamos primeiro o separador como argumento
- Depois a string que vai ser convertida
- Exemplo:
            $frase = "Testando o explode";
            $fraseArray = explode(" ", $frase);
            print_r($fraseArray); // Array ( [0] => Testando [1] => o [2] => explode )
            echo "<br>"; 
            $frase2 = "Carro, Avi�o, Barco, Navio";
            $frase2Array = explode(",", $frase2);
            print_r($frase2Array); // // Array ( [0] => Carro [1] => Avi�o [2] => Barco [3] => Navio )
            echo "<br>";

            for($i = 0; $i < count($frase2); $i++) {
              echo "$frase2Array[$i] <br>";
            }
            Carro
            Avi�o
            Barco
            Navio

# Array para string

- Podemos converter um array em string com a fun��o implode
- Passamos primeiro o separador como argumento, depois a string que vai ser convertida
- Exemplo: 
            $arr = ["Ma��", "Pera", "Mam�o", "Batata"];
            $str = implode(", ", $arr);
            echo "$str <br>"; // Ma��, Pera, Mam�o, Batata
            $arr2 = ["Avi�o", "Tanque", "Jipe", "Metralhadora"];
            $str2 = implode(" <-> ", $arr2);
            echo "$str2 <br>";

# Encontrando a primeira ocorr�ncia

- Com a fun��o strpos, podemos encontrar algum texto na string
- Se recebermos algum valor significa que o texto foi encontrado, e este valor � o �ndice inicial
- Se for retornado false, o texto n�o est� na string
- Exemplo:
            $str = "Estamos testando o m�todo strpos, com o strops podemos encontrar strings";
            $testeEncontrar = strpos($str, "strpos");
            echo "$testeEncontrar <br>"; // 27
            $testeEncontrar2 = strpos($str, "Java");
            echo "$testeEncontrar2 <br>"; // 

# Encontrando a �ltima ocorr�ncia

- Com a fun��o strrpos, podemos encontrar a �ltima ocorr�ncia de um texto na string
- Se recebermos algum valor significa que o texto foi encontrado, e este valor � o �ndice inicial
- Se for retornado false, o texto n�o est� na string
- Exemplo:
            $str = "Testando encontrando palavra teste, em uma string que tem teste";
            $palavra = strrpos($str, "teste");
            echo "$palavra <br>"; // 57

# Retornando o resto da string

- Com a fun��o strstr, podemos encontrar um texto em uma string
- Se algo for encontrado, a fun��o vai retornar o resto da string ap�s o texto encontrado
- Se n�o encontrar nada, retorna false
- Exemplo:
            $str = "Testando o resto da string pra ver se d� certo";
            $resto = strstr($str, "resto");
            echo "$resto <br>"; // resto da string pra ver se d� certo
            
# Decompor uma URL

- Com a fun��o parse_url, podemos decompor uma URL
- Vamos receber um array com todas as partes que a URL tem
- Alguns elementos que podem ser retornados s�o: protocolo, host, par�metros
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

