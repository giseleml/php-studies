<?php
function printDevs() {
	$people = array("Gisele", "Bill Gates", "Steve Jobs");
	$i  = 0;
	for ($i; $i < count($people); $i++) {
		echo "Programadores: " . $people[$i] . "<br>";
	}
}

printDevs();

?>
