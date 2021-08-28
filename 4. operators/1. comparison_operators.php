<?php
   /* Comparison Operators 
      <    less than
      >    greater than
      <=   less than equals to
      >=   greater than equals to
      <>   less than or greater than
      ==   equals
      != not equals
      ===  identical (matches data type also)
      !== not identical
    */

    if(4 < 5 ){
        echo "4 is less than 5" . '<br>';
    }

    if(4 == "4"){
        echo "4 is equals to '4'" . '<br>';
    }

    if(4 === '4'){
        echo "4 is identical to '4'";
    }else{
        echo "4 is not identical to '4'" . '<br>';
    }
?>