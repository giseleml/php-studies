--- FUNÇÕES PARA MANIPULAÇÃO DE STRINGS ---

    strlen() => Retorna o tamanho da string

<?php 
echo strlen("Hello World!"); # Output: 12
?>


    str_word_count() => Conta o número de palavras em uma string

<?php 
echo str_word_count("Hello World!"); # Output: 2
?>


    strrev() => Inverte uma string

<?php
echo strrev("Hello World!"); # Output: !dlrow olleH
?>


    strpos() => Pesquisa um texto específico em uma string. Se for encontrado, a função retorna a posição do caractere. Caso contrário retorna FALSE.

<?php
echo strpos("Hello world!", "world"); # Output: 6
?>


    str_replace() => Substitui caracteres da string 

<?php 
echo str_replace("world", "Dolly", "Hello world!"); # Output: Hello Dolly!
?>


