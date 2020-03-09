Classe 

- Conjutno de variáveis e funções relacionadas à elas.
- É um TIPO, então não pode ser atribuída à uma variável.  

Vantagens:
- Usufruir o recurso de encapsulamento de informação; Assim o usuário de uma classe não precisa saber
como ela é implementada, bastando conhecer a interface (funções disponívels) para utiliza-la. 

<?
    # Definindo uma Classe
    class primeiraClasse {
        var $variavel1;
        var $variavel2;

        function funcaoInterna() {
            #corpo da função
        }
    }
?>

Objeto

- Variável do tipo Classe.

<?
    # Definindo um Objeto: 
    $novoObjeto = new $primeiraClasse; 

    # Para utilizar as funções definidas na Classe utiliza-se o operador "->" 
    $novoObjeto->funcaoInterna() 

?>


Exemplo:

<?php

class animal {

  function animalSound($sound) {
	  echo $sound;
    }
}

$dog = new animal;
$dog->animalSound("Woof");

echo "<br>";

$cat = new animal;
$cat->animalSound("Meow");

?>