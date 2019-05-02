<?php

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

    $dna = json_decode("{}");
    $dna->html = $htmlfiles;

    $dna->javascript = [];
    foreach($jsfiles as $value){
        if($value{0} != "."){
            array_push($dna->javascript,$value);
        }
    }
    
    $dna->icons = [];
    foreach($iconfiles as $value){
        if($value{0} != "."){
            array_push($dna->icons,$value);
        }
    }
    
    $dna->php = [];
    foreach($phpfiles as $value){
        if($value{0} != "."){
            array_push($dna->php,$value);
        }
    }

    $finalstring = "dna = ".json_encode($dna).";";

    echo json_encode($dna);
    $file = fopen("javascript/dna.js","w");// create new file with this name
    fwrite($file,$finalstring); //write data to file
    fclose($file);  //close file
        $file = fopen("javascript/dna.txt","w");// create new file with this name
    fwrite($file,json_encode($dna)); //write data to file
    fclose($file);  //close file

?>
