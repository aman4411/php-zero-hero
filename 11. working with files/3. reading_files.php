<?php

$fileName = 'example.txt';

//open file using fopen function. If file does not exists then it will create it.
if($handle = fopen($fileName,'r ')){

    //read the opened file using fread function

    //$content = fread($handle, 10);                       //for reading first 10 characters of file
    $fileContent = fread($handle,filesize($fileName));     //for reading all the content in a file.
    
    echo $fileContent;                                     //print file content

    //close file using fclose function
    fclose($handle);

}else{
echo 'The application is not able to access the file';
}


?>