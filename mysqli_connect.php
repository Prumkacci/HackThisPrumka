<?php
$link = mysqli_connect('server', 'login', 'password', 'dbname');

if (!$link) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

$link->query('SET NAMES utf8');
?>