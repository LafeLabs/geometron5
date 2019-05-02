<?php

$branchname = $_GET["filename"];//get url
mkdir($branchname);
mkdir($branchname."/javascript");
mkdir($branchname."/icons");
mkdir($branchname."/php");
mkdir($branchname."/symbolfeed");
mkdir($branchname."/uploadimages");

$files = scandir(getcwd());
$jsfiles = scandir(getcwd()."/javascript");
$iconfiles = scandir(getcwd()."/icons");
$phpfiles = scandir(getcwd()."/php");

$htmlfiles = [];
foreach($files as $value){
    if(substr($value,-5) == ".html" || substr($value,-3) == ".md"){
        array_push($htmlfiles,$value);
    }
}

foreach($htmlfiles as $value){
    copy($value,$branchname."/".$value);
}

foreach($jsfiles as $value){
    if($value{0} != "."){
        copy("javascript/".$value,$branchname."/javascript/".$value);
    }
}

foreach($iconfiles as $value){
    if($value{0} != "."){
        copy("icons/".$value,$branchname."/icons/".$value);
    }
}

foreach($phpfiles as $value){
  if($value{0} != "."){
    copy("php/".$value,$branchname."/php/".$value);
  }
}
foreach($phpfiles as $value){
  if($value{0} != "."){
    copy("php/".$value,$branchname."/".explode(".",$value)[0].".php");
  }
}

?>