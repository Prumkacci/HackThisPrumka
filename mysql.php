<?php

session_name("users"); 
session_start(); 

$link = mysqli_connect('localhost', 'nov', 'Ondra2580,', 'HackThisPrumka');

if (!$link) {
    echo "Chyba při připijení do db";
}

$sql='SELECT username FROM ukoly WHERE username ="'. $_SESSION['username'] . '"';
if($vysledek = mysqli_query($link,$sql)){
if(mysqli_num_rows($vysledek)>0) {
echo "Už si úkol dokončil.";
}
else{
    $cas = date("His");
    $uzivatel = $_SESSION["username"];
    $sql = "INSERT INTO ukoly (username, Basic1) VALUES ('$uzivatel', $cas)";
    if(mysqli_query($link,$sql)){
        echo "Postup Uložen.";
    }
    else{
        echo mysqli_error($link);
    }
}
}

?>