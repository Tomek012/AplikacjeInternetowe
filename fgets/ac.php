<?php
    $myfile = fopen("webdictionary.txt", "r")
        or die("Unable to open file!");
    fwrite($myfile, $txt);
    fclose($myfile);
?>