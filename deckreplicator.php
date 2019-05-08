<?php


$deckurl = "https://raw.githubusercontent.com/LafeLabs/geometron5/master/data/deck.txt";
$baseurl = explode("data/",$deckurl)[0];
$deckraw = file_get_contents($deckurl);
$deck = json_decode($deckraw);

foreach($deck as $value){
    
    mkdir($value->name);
    copy($value->replicator,$value->name."/replicator.php");
    
}


?>