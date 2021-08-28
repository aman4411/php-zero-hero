<?php
   //inbuilt array functions in php
   //! Link for all inbuilt array functions in php - php.net/manual/en/ref.array.php

   $list = [2,1,5,3,4];

   //max
   echo max($list) . '<br>';     //prints maximum value in array

   //min
   echo min($list) . '<br>';     //prints minimum value in array

   //sort
   sort($list);                  //sorts an array

   //rsort
   rsort($list);                 //sorts in descending order

   //print_r
   print_r($list);               //prints array
   echo '<br>';

   //count or sizeof
   echo count($list) . '<br>';   //prints length of array
   echo sizeof($list) . '<br>';  

?>