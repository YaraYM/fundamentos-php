# Fun��o mktime

- A fun��o mktime recebe em seus par�metros: hora, minuto, segundo, m�s, dia e ano
- Assim, podemos criar uma data a partir dessa informa��o
- Exemplo:
            $date = mktime(01,18,00,03,12,2000);
            echo date('d/m/y', $date);