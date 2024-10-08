<?php
class Vehicle {
    public static $vehicleType = "Automobile";

    public $name;
    public $speed;
    public $mileage;

    public function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
    }
}

class Bus extends Vehicle {}
class Car extends Vehicle {}
?>
