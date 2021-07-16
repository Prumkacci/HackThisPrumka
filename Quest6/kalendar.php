<?php
    $vystup = "";
    exec('cal '. $_POST["kalendar"], $vystup);
    echo    "<pre>";
    echo implode("<br>",$vystup);
    echo "</pre>";


?>