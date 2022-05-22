<?php
$xmlstr = '<?xml version="1.0" encoding="UTF-8" ?>';
$sxe = new SimpleXMLElement("<Movie_Store></Movie_Store>");

$item1 = $sxe->addChild('Movie');
$item1->addAttribute('Category','Action');
$item1->addChild('MovieTitle','Shershaah');
$item1->addChild('ActorName', 'Siddharth Malhotra');
$item1->addChild('ReleaseYear', 2021);

$item2 = $sxe->addChild('Movie');
$item2->addAttribute('Category','Romcom');
$item2->addChild('MovieTitle','Shiddat');
$item2->addChild('ActorName', 'Sunny Kaushal');
$item2->addChild('ReleaseYear', 2020);

$item3 = $sxe->addChild('Movie');
$item3->addAttribute('Category','Horror');
$item3->addChild('MovieTitle','Stree');
$item3->addChild('ActorName', 'Rajkumar rao');
$item3->addChild('ReleaseYear', 2015);

$item4 = $sxe->addChild('Movie');
$item4->addAttribute('Category','Horror');
$item4->addChild('MovieTitle','Raaz');
$item4->addChild('ActorName', 'Emram hasmi');
$item4->addChild('ReleaseYear', 2016);

$item5 = $sxe->addChild('Movie');
$item5->addAttribute('Category','Action');
$item5->addChild('MovieTitle','KashmirFiles');
$item5->addChild('ActorName', 'Krishna');
$item5->addChild('ReleaseYear', 2022);

$item6 = $sxe->addChild('Movie');
$item6->addAttribute('Category','Action');
$item6->addChild('MovieTitle','War');
$item6->addChild('ActorName', 'hritik roshan');
$item6->addChild('ReleaseYear', 2021);
$sxe->asXML('movies.xml');

?>

