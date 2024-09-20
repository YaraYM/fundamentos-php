# Sobre as sessions

- Com session podemos criar uma variável que persiste em diferentes páginas e também perdura por várias visitas ao mesmo site
- A session utiliza recursos de cookies para seu funcionamento e, se o recurso estiver desabilitado, propaga a sessão via URL
- Sessions são utilizadas para: autenticação, carrinho de compras e tudo o que precisa persistir de página em página
- Achava sendo o recurso mais utilizado, comparando-o com o cookie

## Onde são salvas as sessions?

- As sessions são salvas em arquivos no computador que estamos usando ou no servidor da aplicação
- O caminho para onde os arquivos são salvos fica em php.ini na configuração session.save_path
- As sessions podem ser salvas em dois formatos: o próprio do PHP e também o Web Distributed Data eXchange (WDDX)