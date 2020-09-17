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
        return "Color:  " . $this->color . " <br/> Price: " . $this->price ;
    }
}

$cola = new Beverage('black', 2);
$cola->setPrice(3.50);
echo $cola->getInfo() . PHP_EOL;
