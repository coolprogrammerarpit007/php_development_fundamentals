<?php

class Car
{

    # properties in php
    private $brand;
    private $color;
    private $vehicleType = "Four Vehicle";


    # constructors in php

    public function __construct($brand,$color="Royal White")
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    # Getter and Setters
    public function getBrand()
    {
        return $this->brand;
    }
    public function setBrand($new_brand)
    {
        $this->brand = $new_brand;
    }

    #Method

    public function getCarInfo()
    {
        return "Car Brand: " . $this->brand . " Car Color: " . $this->color;
    }

}


$car1 = new Car("Mercedez","Black");
$car2 = new Car("Tesla Model-Y","Silver");

echo $car1->getCarInfo();
// print_r($car1);
// print_r($car2);
