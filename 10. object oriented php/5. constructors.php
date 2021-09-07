<?php

class Car{
    var $model = 'Default Model';

    //! Note : PHP lacks support for declaring multiple constructors of different numbers of parameters for a class unlike languages such as Java.

    //create parameterised constructor
    function __construct($model){
        $this->model = $model;
    }

    function printCarModel(){
        echo $this->model . '<br>';
    }
}

$bmw = new Car('BMW');
$audi = new Car('Audi');

$bmw->printCarModel();
$audi->printCarModel();

?>