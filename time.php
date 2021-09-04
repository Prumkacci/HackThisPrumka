<?php

$cas1 = date("His");
$cas2 = date("His") + 61;
echo $cas1 . "<br/>";
echo $cas2. "<br/>";
$cas = $cas2 -$cas1;
echo $cas . "<br/>";
date_default_timezone_set('UTC');
echo date("His", $cas)



?>