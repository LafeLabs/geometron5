<?php

$branchname = $_GET["filename"];//get url


$files = scandir(getcwd()."/".$branchname);
$jsfiles = scandir(getcwd()."/".$branchname."/javascript");
$iconfiles = scandir(getcwd()."/".$branchname."/icons");
$phpfiles = scandir(getcwd()."/".$branchname."/php");
$uploadfiles = scandir(getcwd()."/".$branchname."/uploadimages");
$symbolfiles = scandir(getcwd()."/".$branchname."/symbolfeed");
$cssfiles = scandir(getcwd()."/".$branchname."/css");


foreach($jsfiles as $value){
    unlink($branchname."/javascript/".$value);
}
rmdir($branchname."/javascript");

foreach($iconfiles as $value){
    unlink($branchname."/icons/".$value);
}
rmdir($branchname."/icons");

foreach($phpfiles as $value){
    unlink($branchname."/php/".$value);
}
rmdir($branchname."/php");

foreach($uploadfiles as $value){
    unlink($branchname."/uploadimages/".$value);
}
rmdir($branchname."/uploadimages");

foreach($symbolfiles as $value){
    unlink($branchname."/symbolfeed/".$value);
}
rmdir($branchname."/symbolfeed");

foreach($cssfiles as $value){
    unlink($branchname."/css/".$value);
}
rmdir($branchname."/css");


foreach($files as $value){
    unlink($branchname."/".$value);
}

rmdir($branchname);


?>