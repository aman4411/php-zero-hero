<?php
   //constants example
   //constants are the variables which are created once & whose values cannot be changed.

   //example 1
   define("PIE",3.14);                   //old way to create constants in php
   // ! PIE = 100;                       This line will throw an error as constants cannot be changed.
   echo PIE;

   echo '<br>';

   //example 2
   const NAME = 'Aman';                  //new way of creating constants in Php.
   const ANOTHER_CONST = NAME . 'Mehta';
   echo NAME . ANOTHER_CONST;

   echo '<br>';

   //example 3 
   const ARR = [1,2,3,4,5];             //we can assign array or another constant values to a constant.
   echo ARR[1];
?>