<?php

class Vehicle{
    var $wheels;

    function startEngine(){
        echo 'Engine Started <br>';
    }
}

//created child class of Vehicle
class Car extends Vehicle{

    function __construct(){
        $this->wheels = 4;
    }
} 

//create another child class
class Bike extends Vehicle{
    
    function __construct(){
        $this->wheels = 2;
    }
}

$bmw = new Car();                                 //create object of Car
echo 'Car Wheels : ' . $bmw->wheels . '<br>';     
$bmw->startEngine();                              //call method of parent class

$apache = new Bike();                             //create object of Bike
echo 'Bike Wheels : ' . $apache->wheels . '<br>';
$apache->startEngine();

?>