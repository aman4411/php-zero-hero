<?php

class Vehicle{
    public $wheels = 4;                   //has access in complete program
    protected $seats = 6;                 //has access only in parent & child class
    private $engine = 1;                  //has access only in parent class.

    function showPrivateProperty(){
        echo $this->engine . '<br>';      //we are able to access private property in parent class.
    }
}

class Car extends Vehicle{

    function showProtectedProperty(){
        echo $this->seats . '<br>';       //we are able to access protected property in child class.
    }
}

$bmw = new Car();
echo $bmw->wheels . '<br>';              //we are able to access public property outside the class.
echo $bmw->showProtectedProperty();      //access protected property using function in parent or child class.
echo $bmw->showPrivateProperty();        //access private property using function in parent class.

?>