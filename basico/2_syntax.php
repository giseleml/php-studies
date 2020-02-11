--- Syntax ---

Um script PHP pode ser colocado em qualquer lugar no documento,
usando as tags: 

<?php 

echo "Hello World!";

?>

Um código PHP normalmente tem tags HTML também.

OBS.: Todos os comandos terminam com ponto em vírgula em PHP. Não olhe agora, JavaScript!
OBS2.: Por outro lado, palavras-chave não são case-sentivie. ECHO, echo ou EcHo são executados sem problemas.
Já nomes de variáveis são case-sensitive.

--- Comentários ---

Single line: // e #
Multiple-line: /* */

--- Variáveis ---

Em PHP as variáveis são declaradas começando com um sifrão e seguida do nome. 

<?php 

$txt = "Hello world!";
$x = 5;
$y = 10.5;

?>

Seu nome deve começar com letra ou underline, não podendo iniciar com números. E relembrando, são case-sensitive. 