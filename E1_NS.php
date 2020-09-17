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
        return "Beverage is " . $this->color . " and " . $this->price . ".";
    }
}

$cola = new Beverage('black', 2);
echo $cola->temperature . PHP_EOL;
echo $cola->getInfo() . PHP_EOL;
