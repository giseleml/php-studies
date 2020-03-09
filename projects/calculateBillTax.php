<?php 
class CostumerBill {
	var $total = 0;
	var $cost = 0;
	
	function costumerName($costumerName) {
		echo $costumerName; 	
	}
	
	function taxTotal($cost) {
		$this->total = $cost + (0.10 * $cost);
		echo $this->total;
	}
	
}

$johnDoe = new CostumerBill;

echo $johnDoe->costumerName("John Doe") . ", your total value is:";
echo "<br>";
echo $johnDoe->taxTotal(150);
?>
