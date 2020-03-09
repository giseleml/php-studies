ARQUIVOS: ABERTURA

fopen() - esse método da mais opções do que a função readfile()

O primeiro parâmetro contém o nome do arquivo à ser aberto
O segundo parâmetro especifica qual modo o arquivo deve ser aberto. 

r - abre o arquivo só para leitura (do começo do arquivo)
w - abre o arquivo só para escrever (apaga o conteúdo do arquivo OU cria um novo se não existir e o ponteiro começa no início do arquivo)
a - abre o arquivo só para escrever (o conteúdo existente é preservado e o ponteiro começa do fim do arquivo)
x - cria um novo arquivo só para escrever (retorna false e um erro se o arquivo já existe)
r+ - abre arquivo para ler/escrever (do começo do arquivo)
w+ - abre arquivo para ler/escrever (apaga o conteúdo do arquivo, e começa do início) 
a+ - abre arquivo para ler/escrever (o conteúdo existente é preservado, começa do fim do arquivo)
x+ - Cria novo arquivo para ler/escrever (retorna falso se já existe)

Diferenças:

w e a = criam novo arquivo se não existir
x = se o arquivo já existe, retorna um erro 

ABRIR ARQUIVO 
fread() 

O primeiro parâmetro contém o nome do arquivo à ser lido 
O segundo parâmetro especifica o número máximo de bytes para serem lidos

FECHAR ARQUIVO 
fclose()

Requer o nome do arquivo que deve ser fechada
