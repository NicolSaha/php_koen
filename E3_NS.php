<?php
declare(strict_types=1);

class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;
    
    public function __construct(string $color, float $price, string $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price; 
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return "Beverage is coloured " . $this->color . " and costs € " . $this->price . ".";
    }
}

class Beer extends Beverage
{
    private string $name;
    private float $alcoholpercentage;

    public function __construct(string $name, float $alcoholpercentage, string $color, float $price, string $temperature = "cold")
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function setColor (string $color): void {
        $this -> color = $color;
    }

    public function getColor(): string
    {
        return $this-> color;
    }

    /*
    public function setPrice (float $price): void {
        $this -> price = $price;
    }

    public function getPrice(): float
    {
        return $this-> price;
    } */

    private function beerInfo(): string {
        return 'Name: ' . $this ->name . '<br/> Alcohol %: ' . $this->alcoholpercentage  . '<br/>Color: ' . $this->getColor();
    }

    public function displayBeerInfo(): string {
        return $this -> beerInfo();
    }

}

$duvel = new Beer('Duvel', 8.5, 'blond', 3.50);
$duvel->setColor('light') . "<br>";
$duvel->getColor() . "<br>";
echo $duvel->displayBeerInfo() . "<br>";

