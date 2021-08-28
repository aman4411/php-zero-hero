<?php
   //function parameters example

   function greeting($name){
       echo "Welcome $name";
   }

   greeting('Aman');

   echo '<br>';
   
   function calculate($num1, $num2){
       $sum = $num1 + $num2;
       echo "Addition of $num1 & $num2 = $sum";
   }

   calculate(5,10);
?>