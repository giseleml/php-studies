<?php
function printDevs() {
	$people = array("Gisele", "Bill Gates", "Steve Jobs");
	
	sort($people);
	
	$i  = 0;
	echo "Programadores: <br>";
	for ($i; $i < count($people); $i++) {
		echo $people[$i] . "<br>";
	}
}

printDevs();

?>
