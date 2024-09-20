# Sobre as sessions

- Com session podemos criar uma vari�vel que persiste em diferentes p�ginas e tamb�m perdura por v�rias visitas ao mesmo site
- A session utiliza recursos de cookies para seu funcionamento e, se o recurso estiver desabilitado, propaga a sess�o via URL
- Sessions s�o utilizadas para: autentica��o, carrinho de compras e tudo o que precisa persistir de p�gina em p�gina
- Achava sendo o recurso mais utilizado, comparando-o com o cookie

## Onde s�o salvas as sessions?

- As sessions s�o salvas em arquivos no computador que estamos usando ou no servidor da aplica��o
- O caminho para onde os arquivos s�o salvos fica em php.ini na configura��o session.save_path
- As sessions podem ser salvas em dois formatos: o pr�prio do PHP e tamb�m o Web Distributed Data eXchange (WDDX)