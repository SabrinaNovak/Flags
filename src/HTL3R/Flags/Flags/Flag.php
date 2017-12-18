<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sabrina
 * Date: 27.11.17
 * Time: 12:39
 */

namespace HTL3R\Flags\Flags;

abstract class Flag implements \HTL3R\Flags\Interfaces\FlagInterface
{
    protected $name;
    protected $price;
    protected $width;
    protected $height;
    protected $color;

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

    /*
     * Getter for protected variables
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function getWidth(): string
    {
        return $this->width;
    }

    public function getHeight(): string
    {
        return $this->height;
    }

    public function getColor(): string
    {
        return $this->color;
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
        $rv = <<<EOT
        Name: $this->name <br> 
        Preis: $this->price <br>
        Breite: $this->width <br>
        Höhe: $this->height <br>
        Farbe: <div style="background-color:$this->color; width:50px; height: 50px;"></div>
EOT;

        return $rv;
    }
}