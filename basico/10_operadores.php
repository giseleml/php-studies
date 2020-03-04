. Contatenação  

DOUBLE ARROW: Operador usado em arrays para atribuir valores. 

<?
    $myArray = array(
        0 => 'Big',
        1 => 'Small',
        2 => 'Up',
        3 => 'Down'
    );
?>

ARROW: Operador usado em objetos para acessar métodos e propriedades. Significa que o que está 
do lado direito do operador é membro do objeto instanciado na variável do lado esquerdo do operador. 

<?
    # Nova instância do objeto MyObject 
    $obj = new MyObject();

    # Coloca a propriedade 'Fred' no objeto thisProperty
    $obj->thisProperty = 'Fred';

    # Chama o método de getProperty que está no objeto getProperty
    $obj->getProperty();
?> 
=