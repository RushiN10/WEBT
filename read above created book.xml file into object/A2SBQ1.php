<?php
	$xml=simplexml_load_file("A2SAQ3.xml") or die ("error");
	
	foreach($xml->book as $bookos)
	{
		
		
		echo "<br>book category attribute: ".$bookos->attributes()."<br>";
		echo "<br>book category attribute: ".$bookos->bookno."<br>";
		echo "<br>book category attribute: ".$bookos->bookname."<br>";
		echo "<br>book category attribute: ".$bookos->authorname."<br>";
		echo "<br>book category attribute: ".$bookos->price."<br>";
		echo "<br>book category attribute: ".$bookos->year."<br>";
		
	}	
?>
