<?php
declare(strict_types=1);

class Beverage
{
    public string $color;
    public float $price;
    public string $temperature;
    
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

$cola = new Beverage('black', 2);
//echo $cola->temperature . PHP_EOL;
echo $cola->getInfo() . PHP_EOL;

class Beer extends Beverage
{
    public string $name;
    public float $alcoholpercentage;

    public function __construct(string $name, float $alcoholpercentage, string $color, float $price, string $temperature = "cold")
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;

    }

    /*
    public function getAlcoholpercentage(): float
    {
        return $this->alcoholpercentage;
    }
*/

}

$duvel = new Beer('Duvel', 8.5, 'blond', 3.5);
//echo $duvel->getAlcoholpercentage() . "<br>";
//echo $duvel->alcoholpercentage . "<br>";
//echo $duvel->color . "<br>";
echo "<br>";
echo $duvel->getInfo() . "<br>";

