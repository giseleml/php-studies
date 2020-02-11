--- DATA TYPES ---

- String: Nenhuma novidade, uma sequência de caracteres fechados por aspas duplas ou simples.
- Integer: Números não decimais, podendo ser positivo ou negativo. 
- Float (ou double): Número decimal ou exponencial. 
- Boolean: True ou False.
- Array: array("Amarelo", "Verde", "Rosa")
- Objeto: Guarda informação e como ela deve ser processada. Em PHP ele deve ser declarado de forma explícita.
Primeiro se declara como classe de um objeto, usando a palavra-chave class.

--- OBJETO ---
<?php
class Carro {
    function Carro() {
        $this->modelo = "VW";
    }
}

$fusquinha = new Car(); # Cria um objeto

echo $fusquinha-> modelo; # Mostra as propriedades do objeto
?>

OBS.: Classe é uma estrutura que pode conter propriedades e métodos.

- NULL: Variável que não teve nenhum valor atribuido à ela.
- Resource: Funções e recursos externos ao PHP.



------------
<?php 
$x = 5;
var_dump($x) #Função que retorna tipo e valor

# Output: int(5)
?>
