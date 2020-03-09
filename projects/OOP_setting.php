class iceCream {

  public $color;
  
  function set_color($color) {
    $this->color = $color;
	echo $this->color;
  }

}

$strawberry = new iceCream;
$grape = new iceCream; 

$strawberry->set_color('pink');
echo "<br>";
$grape->set_color('purple');
