<?php
declare(strict_types=1);

class Beverage
{
    protected string $color;
    protected float $price;
    protected string $temperature;

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
    protected string $name;
    protected float $alcoholpercentage;

    public function __construct(string $name, float $alcoholpercentage, string $color, float $price, string $temperature = "cold")
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }
}

$duvel = new Beer('Duvel', 8.5, 'blond', 3.50);
echo "<br>";
echo $duvel->getInfo() . "<br>";

