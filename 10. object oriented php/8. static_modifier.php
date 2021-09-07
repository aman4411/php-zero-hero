<?php

class Car{

    static $wheels = 4;                   //created static property

    static function changeWheels(){       //created static function
        Car::$wheels = 6;
    }
}

$bmw = new Car();

//echo $bmw->wheels;                       // will throw error. static property cannot be accessed using object

echo Car::$wheels . '<br>';                // correct way of accessing static property using class name.
Car::changeWheels();                       // correct way of calling static methods.
echo Car::$wheels;

?>