<?php
$dom=new DomDocument();
$dom->load("book.xml");
echo"<h2>Name of books</h2>";
$bname=$dom->getElementsByTagName("Bookname");
foreach($bname as $b){
	echo"<b>$b->textContent<b><br><br>";
}

echo"<h2>Name of Author</h2>";
$bname=$dom->getElementsByTagName("Authorname");
foreach($bname as $b){
	echo"<b>$b->textContent<b><br><br>";
}

echo"<h2>Price of Book</h2>";
$bname=$dom->getElementsByTagName("Price");
foreach($bname as $b){
	echo"<b>$b->textContent<b><br><br>";
}

echo"<h2>Year of Book Published</h2>";
$bname=$dom->getElementsByTagName("Year");
foreach($bname as $b){
	echo"<b>$b->textContent<b><br><br>";
}
?>
