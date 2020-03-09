<?php
function sharedBill($people, $cost) {
	$total;
	
	$total = $cost / $people;
	echo "Each one will pay" . "\n $" . $total;
}

sharedBill(3, 10);

?>
