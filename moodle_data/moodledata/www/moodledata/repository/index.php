<?php

$suapasta = __DIR__."/suapasta";
$iterator = new RecursiveDirectoryIterator($suapasta);
$recursiveIterator = new RecursiveIteratorIterator($iterator);
foreach ($recursiveIterator as $key => $entry) {
    echo $entry->getFilename();
}

?>
