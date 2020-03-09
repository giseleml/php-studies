<?
class Conta {
	var $saldo;
	
	function getName($name) {
		echo $name;
	}

	function verSaldo() {
		echo $this->saldo;
	}

	function addCredito($valor) {
		return $this->saldo += $valor;
	}

}


$conta4458789 = new Conta;

echo "Welcome, ";
echo $conta4458789->getName("Jane Doe");

echo "<br>";
echo "This is your balance:";
echo "<br>";

echo "$" . $conta4458789->addCredito(150);
?>