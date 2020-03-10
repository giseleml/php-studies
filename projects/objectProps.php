<?
class Animal {
	
	function makeSound($name, $sound) {
		echo "The " . $name . " goes " . $sound . " <br>";
	}
	
}

$dog = new Animal;
$dog->makeSound("dog", "woooof");

$bird = new Animal;
$bird->makeSound("bird", "tweet tweet");

$cat = new Animal;
$cat->makeSound("cat", "meow");

echo "<br>";

$cat->{'hair'} = 'fur';
echo "Cat hair is fab! Its also called " . $cat->hair .  " <br>";

$bird->{'hair'} = 'feather';
echo "Birds are majestic because of their colorful " . $bird->hair .  " <br>";

?>
