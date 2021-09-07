<?php

class Car{

    function moveWheels(){
        echo 'Wheels are moving';
    }

    function startEngine(){
        echo 'Engine started';
    }
}

if(method_exists('Car','moveWheels')){
    echo 'Method exists';
}else{
    echo 'Method does not exists';
}
?>