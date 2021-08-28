<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<?php
    header('Content-type: text/html; charset=utf-8');
    $vystup = "";
    putenv('LANG=cs_CZ.UTF-8');
    exec('cal '. $_POST["kalendar"], $vystup);
    echo "<pre>";
    echo implode("<br>",$vystup);
    echo "</pre>";


?>