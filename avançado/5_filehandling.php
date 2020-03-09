ARQUIVOS

O PHP possui várias funções para criar, ler, upload e editar arquivos;

LEITURA 

readfile() - lê um arquivo e escreve-o no buffer output. 

Exemplo:

Suponhamos que tenhamos um arquivo de texto nomeado "webdictionary.txt" no servidor.

Conteúdo dele: 
" AJAX = Asynchronous JavaScript and XML
    CSS = Cascading Style Sheets
    HTML = Hyper Text Markup Language
    PHP = PHP Hypertext Preprocessor
    SQL = Structured Query Language
    SVG = Scalable Vector Graphics
    XML = EXtensible Markup Language"

O código PHP lê o arquivlo e escreve no buffer que segue; A função readfile() retorna o número de bytes lidos com sucesso.

<?php
echo readfile("webdictionary.txt");
?>

Função útil se tudo o que vocÊ quer fazer é abrir um arquivo e ler seu conteúdo. 



