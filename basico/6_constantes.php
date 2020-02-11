CONSTANTES são como variáveis, porém uma vez definidas não podem ser modificadas ou indefinidas (undefined)
durante o script. 

- Ao contrário das variáveis, constantes são automaticamente acessáveis globalmente em todo o script.   
- Para usá-la: define(name, value, case-insensitive)
name = nome da constante
value = valor da constante 
case-insensitive = especifica se ela deve ser case-sensitive ou não. O default é FALSE.

<?php 
define($name, "Gisele", true)
# Tanto $name quanto $nAmE funcionariam pois case-insensitive é TRUE.
?>

Também é possível criar arrays como constantes.

<?php 
define("carros", ["BMW", "Toyota", "Chevete"]);
echo carros[0]
?>