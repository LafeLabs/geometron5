<?php


$dnaurl = "https://raw.githubusercontent.com/LafeLabs/geometron4/master/javascript/dna.txt";
$baseurl = explode("javascript/",$dnaurl)[0];
$dnaraw = file_get_contents($dnaurl);
$dna = json_decode($dnaraw);

mkdir("javascript");
mkdir("icons");
mkdir("php");
mkdir("symbolfeed");
mkdir("uploadimages");


foreach($dna->html as $value){
    copy($baseurl.$value,$value);
}

foreach($dna->javascript as $value){
    copy($baseurl."javascript/".$value,"javascript/".$value);
}

foreach($dna->icons as $value){
    copy($baseurl."icons/".$value,"icons/".$value);
}

foreach($dna->php as $value){
    copy($baseurl."php/".$value,"php/".$value);
    copy($baseurl."php/".$value,explode(".",$value)[0].".php");
}

?>