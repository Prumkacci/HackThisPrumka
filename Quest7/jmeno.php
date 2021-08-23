<?php
    function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
    }

    function writeStringToFile($file, $string){
        $f=fopen("$file", "wb");
        $file="\xEF\xBB\xBF".$file; // this is what makes the magic
        fputs($f, $string);
        fclose($f);
    }
    $jmeno = $_POST[jmeno];
    $name = generateRandomString() . ".shtml";
    $obsah = "<meta charset=\"utf-8\">Tvoje jméno je " . $jmeno . " a jeho délka je: ". strlen($jmeno); 
    writeStringToFile("tmp/$name", $obsah);
    echo"Soubor by vytvořen <a href='tmp/$name' target=_self>klikni</a> pro zobrazení.";
?>