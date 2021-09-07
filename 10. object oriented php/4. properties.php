<?php 

class Car{
    var $wheels = 2;             //property of a class

    function changeWheels(){
        $this->wheels = 4;        //this refers to current instance of the class.
    }
    
}

$bmw = new Car();
echo $bmw->wheels . '<br>';
$bmw->changeWheels();            //call method to change class property
echo $bmw->wheels . '<br>';

?>