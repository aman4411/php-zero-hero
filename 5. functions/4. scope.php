<?php
  //example showing golabl & variable scope

  $x = 'outside-x';      //global
  $y = 'outside-y';      //global

  function convert(){
      global $y;         //global keyword is used to refer to global variable.
      $x = 'inside-x';   //local
      $y = 'inside-y';   //global
  }

  echo 'Before Converting : <br>';
  echo $x . '<br>';
  echo $y . '<br>';
  
  convert();

  echo 'After Converting : <br>';
  echo $x . '<br>';
  echo $y . '<br>';

  //! Note - x will not change after the function call because scope of x inside the function is local.
?>