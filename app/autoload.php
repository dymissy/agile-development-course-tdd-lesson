<?php

$files = array_merge(
    [__DIR__ . '/phpunit.php'],
    (array) glob(__DIR__ . '/../src/*.php')
);

foreach($files as $file) {
    require_once realpath($file);
}