--- ESCOPO ---

Em PHP há três escopos: local, global e estático.

> GLOBAL 
Uma variável declarada fora de uma função tem escopo global e só pode ser acessada FORA de uma função.

<?php 
$x = 5; // global

function myTest() {
    echo "<p> Variável X dentro da função é: $x </p>"
}

myTest()

echo "<p> Variável X fora da função é: $x </p>"

# Output 1: 
# Output 2: 5

?>

> LOCAL
A variável declarada dentro de uma função tem escopo local e só pode ser acessada dentro da função.

<?php 
function myTest() {
    $x = 5; //local 
    echo "O valor da variável X é: $x"

}

myTest()
echo "O valor da variável X é: $x"

# Output 1: 5
# Output 2: (erro)


?>

--- GLOBAL KEYWORD ---
A palavra-chave global pode ser usada para acessar uma variável global dentro de uma função.
Para isso deve-se usá-la antes da variável que está dentro da função.

<?php
$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest()
echo $x; # Output: 15
?>

Variáveis globais também podem ser acessadas pelo array $GLOBALS[index], onde index = nome da variável
Esse array é acessável dentro de funções e pode ser usado para atualizar variáveis globais diretamente.


> Static
Normalmente, quando uma função é cumprida/executada, todas as suas variáveis são deletadas. Porém às vezes
queremos que uma variável local não seja deletada. Para isso usamos a palavra-chave static ao declarar a variável.

<?php 
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest(); # Output 1: 0
myTest(); # Output 2: 1
myTest(); # Output 3: 2

?>
