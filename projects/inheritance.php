<?php

class Book {
      var $price;
      var $title;

      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
		  echo "<br> Price: " . "$" . $this->price;
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

echo "<br> <br>";

class Novel extends Book {
	var $author;
	
	function showAuthor($author) {
		$this->author = $author;
		echo $this->author;
	}
	
	
}

$romeoJuliet = new Novel;
echo "Favorite Books: <br>"; 
$romeoJuliet->setTitle("Romeo and Juliet <br>");
$romeoJuliet->getTitle();
$romeoJuliet->showAuthor("Author: Shakespeare");

?>
