Cookies

- Mecanismo para armazenar e consultar informações no browser do visitante da página. 
- O PHP atribui Cookies usando a função setcookie.

Desvantagem
- Seu uso não é recomendado quando se trata de informações sigilosas, isso porque
os dados dos cookies são armazenados no diretório de arquivos temporários do visitante,
sendo facilmente visualizados por pessoas mal intencionadas.
- A opção 'aceitar cookies' pode ser desativada a qualquer momento pelo visitante.

Para uma transmissão segura de dados é recomendável usar sessões.


Setcookie(“nome_do_cookie”,”seu_valor”,”tempo_de_vida”,”path”,”domínio”,”conexão_s
egura”)


Nome_do_cookie = É o nome que, posteriormente, se tornará a variável e o que o
servirá de referência para indicar o cookie.

Seu_valor = É o valor que a variável possuirá. Esse valor pode ser de todos os
tipos.

Tempo_de_vida = É o tempo, em segundos, que o cookie existirá no computador do
visitante. Uma vez excedido esse prazo o cookie se apaga de modo irrecuperável. Se esse
argumento ficar vazio, o cookie se apagará quando o visitante fechar o browser.

Path = endereço da página que gerou o cookie – automático

Domínio = domínio ao qual pertence o cookie – automático

Conexão_segura = Indica se o cookie deverá ser transmitido somente em uma conexão
segura HTTPS.