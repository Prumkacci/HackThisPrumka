<?php
$link = mysqli_connect('localhost', 'nov', 'Ondra2580,', 'HackThisPrumka');

if (!$link) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

$link->query('SET NAMES utf8');
?>