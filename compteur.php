<?php

$myFile = fopen('compteur.txt', 'r+');
$pages = fgets($myFile);
$pages += 1;
fseek($myFile, 0);
fputs($myFile, $pages);
fclose($myFile);

echo 'Cette page a été vue '.$pages.' fois';