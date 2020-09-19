<?php
declare(strict_types=1);


class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;

    private const BARNAME = 'Het Vervolg';

    private static int $timesServed = 0;


    public function __construct(string $color, float $price, string $temperature = 'Cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
        self::$timesServed++;
    }

    public function getTimesServed () {
        return  '<br/> Total number of drinks served: ' . self::$timesServed;
    }

    public function getBarName() {
        return self::BARNAME;
    }

    public function getInfo(): string
    {
        return "Colour:  " . $this->color . "<br/> Price: € " . $this->price . "<br/> Barname:  " . $this->getBarName() . "<br/> Temperature: " . $this->temperature;
    }

}


class Beer extends Beverage
{
    private string $name;
    private float $alcoholpercentage;

    private const COUNTRY = 'Belgium';

    public function __construct(string $name, float $alcoholpercentage, string $color, float $price, string $temperature = "Cold")
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getBeerCountry() {
        return self::COUNTRY;
    }

    private function beerInfo(): string {
        return 'Name: ' . $this ->name . '<br/> Alcohol %: ' . $this->alcoholpercentage  . '<br/>Country: ' . $this->getBeerCountry()  ;
    }

    public function displayBeerInfo(): string {
        return $this -> beerInfo();
    }



}

$duvel = new Beer('Duvel', 8.5, 'blond', 3.50, $temperature = "cold");
$beer = new Beer('Beer', 0.0, 'beercolor', 0.0, $temperature = "cold");


echo $duvel->getInfo() . "<br>";
echo $duvel->displayBeerInfo() . "<br>";
echo "<br>";
echo $beer->getInfo() . "<br>";
echo $beer->displayBeerInfo() . "<br>";
echo $duvel->getTimesServed();
