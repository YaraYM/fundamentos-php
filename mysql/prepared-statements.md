# Prepared statements teoria

- Prepared statements é quando criamos uma query com placeholders em vez dos valores reais, aumentando a segurança e a performance da requisição
- Neste caso, o fluxo muda um pouco; vamos utilizar o método prepare par preparar a query, o bind_param para resgatar os parâmetros e o execute para rodar a query

