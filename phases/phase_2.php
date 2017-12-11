<?php
/*
 * Phase 2
 */
class Flag
{
    private $name;
    private $price;
    private $width;
    private $height;
    private $color;

    /**
     * Flag constructor.
     * @param string $name name of the flag
     * @param float $price price of the flag
     * @param float $width width of the flag in m
     * @param float $height height of the flag in m
     * @param string $color color as hex code
     */
    function __construct(string $name, float $price, float $width, float $height, string $color)
    {
        $this->name = $name;;
        $this->price = $price;
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
    }

    /**
     * Calculates the area of the flag
     * @return float area of the flag in m^2
     */
    public function calculateArea(): float
    {
        return $this->width * $this->height;
    }

    function __toString(): string
    {
        $area = $this->calculateArea();
        $rv = <<<EOT
Name: $this->name <br> 
Preis: $this->price <br>
Breite: $this->width <br>
Höhe: $this->height <br>
Fläche: $area <br>
Farbe: <div style="background-color:$this->color; width:50px; height: 50px;"></div>
EOT;

        return $rv;
    }
}

$myFlag = new Flag("England", 24.5, 2.0, 0.5, "#F00");
echo $myFlag;