<?php

$fileName = 'example.txt';

//open file using fopen function. If file does not exists then it will create it.
$handle = fopen($fileName,'w');

//close file using fclose function
fclose($handle);
?>