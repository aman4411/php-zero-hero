<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>
<body>

    <?php
        $numbers = array(1,2,3,4,5);           //older way to define array in php
        $numbersList = [13,22,15,0.5,'Aman'];  //new way of defining array in php

        echo $numbersList[0];
        echo '<br>';
        print_r($numbersList);                 //inbuilt function to print array
    ?>
    
</body>
</html>