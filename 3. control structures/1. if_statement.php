<?php
$age = 19;

//if statement example
if($age > 18){
    echo "You are eligible for driving license";
}

echo "<br>";

//elseif statement example
if($age<13){
    echo "You are a kid";
}elseif($age<18){
    echo "You are a teenager";
}else{
    echo "You are an adult";
}

?>