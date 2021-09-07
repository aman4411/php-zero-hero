<?php

class Car{

    function moveWheels(){
        echo 'Wheels are moving';
    }

    function startEngine(){
        echo 'Engine is started';
    }
}

$carObject = new Car();      //created object of car class
$carObject->startEngine();   //call method of car classs

$bmw = new Car();            //created another object of car class
$bmw->moveWheels();          //call method from another object

?>