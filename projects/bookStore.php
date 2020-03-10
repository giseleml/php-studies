<?

class Book {
      var $price;
      var $title;

      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo "\n" . "$" . $this->price;
      }
      
      function setTitle($par){
         $this->title = $par;
      }
      
      function getTitle(){
         echo $this->title;
      }
   }

$peterPan = new Book;
$peterPan->setPrice(5);
$peterPan->setTitle("Peter Pan");

echo "Latest purchase: <br>";
$peterPan->getTitle() . $peterPan->getPrice();

?>
