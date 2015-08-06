<?php
class Car
{
    private $make_model;
    private $price;
    private $miles;
    private $car_image;
    function __construct($make, $price1, $miles1, $pic)
    {
      $this->make_model = $make;
      $this->price = $price1;
      $this->miles = $miles1;
      $this->car_image = $pic;
    }
    function setMake($newMake)
    {
      $this->make_model = $newMake;
    }
    function getMake()
    {
      return $this->make_model;
    }
    function setPrice ($newPrice)
    {
      $this->price = $newPrice;
    }
    function getPrice()
    {
      return $this->price;
    }
    function setMiles($newMiles)
    {
      $this->miles = $newMiles;
    }
    function getMiles()
    {
      return $this->miles;
    }
    function setImage($newImage)
    {
      $this->car_image = $newImage;
    }
    function getImage()
    {
      return $this->car_image;
    }
}
?>
