<?php
	$doc = new DOMDocument("1.0", "UTF-8");
	$doc->formatOutput = true;
	
	$bookinfo= $doc->createElement("BookInfo");
	$doc->appendChild($bookinfo);
	
	$book= $doc->createElement("book");
	$bookinfo->appendChild($book);

	$bookno= $doc->createElement("bookno","1");
	$book->appendChild($bookno);

	$bookname= $doc->createElement("bookname","JAVA");
	$book->appendChild($bookname);
	
	$authorname= $doc->createElement("authorname","Balguru Swami");
	$book->appendChild($authorname);
		
	$price= $doc->createElement("price","250");
	$book->appendChild($price);

	$year= $doc->createElement("year","2006");
	$book->appendChild($year);



	$book2= $doc->createElement("book");
	$bookinfo->appendChild($book2);

	$bookno= $doc->createElement("bookno","2");
	$book2->appendChild($bookno);

	$bookname= $doc->createElement("bookname","C");
	$book2->appendChild($bookname);
	
	$authorname= $doc->createElement("authorname","Denis Ritchie");
	$book2->appendChild($authorname);
		
	$price= $doc->createElement("price","500");
	$book2->appendChild($price);

	$year= $doc->createElement("year","1971");
	$book2->appendChild($year);


	$doc->save("A2SAQ3.xml");

	echo "<h4>A2SAQ3.xml created<h4>";


	
	
	

	

?>

