<?php

$fileName = 'example.txt';

//open file using fopen function. If file does not exists then it will create it.
if($handle = fopen($fileName,'w')){

    //write to the opened file using fwrite function
    fwrite($handle, 'Hello, My name is Aman & I am learning file handling in Php.');

    //close file using fclose function
    fclose($handle);

}else{
echo 'The application is not able to access the file';
}


?>