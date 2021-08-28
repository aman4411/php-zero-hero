<?php
  //inbuilt string functions in php.
  //! Link to find all inbuilt string functions in php - php.net/ref.strings

  $string = 'Aman Mehta';

  //strlen
  echo strlen($string);    //prints length of string
  echo '<br>';

  //strtoupper
  echo strtoupper($string);  //prints string in uppercase
  echo '<br>';

  //strtolower
  echo strtolower($string);  //prints string in lower case
  echo '<br>';

  //explode
  $splitString = explode(' ',$string);  //splits string based on seperator & returns an array
  echo $splitString[0];
  echo '<br>';
  echo $splitString[1];
  echo '<br>';

  //implode or join
  $arr = [1,2,3,4,5];
  $commaSeperated = implode(',',$arr);        //joins all elements of array into a single string 
  $commaSeperatedUsingJoin = join(',',$arr);
  echo $commaSeperated . '<br>';
  echo $commaSeperatedUsingJoin . '<br>';
?>