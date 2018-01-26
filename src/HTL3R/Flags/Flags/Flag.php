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
    protected $langcode;

    /**
     * Flag constructor.
     * @param string $name
     * @param float $price
     * @param float $width
     * @param float $height
     * @param string $color
     * @param string $langcode
     */
    function __construct(string $name, float $price, float $width, float $height, string $color, string $langcode)
    {
        $this->name = $name;
        $this->price = $price;
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
        $this->langcode = $langcode;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getLangcode(): string
    {
        return $this->langcode;
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
        Price: $this->price <br>
        Width: $this->width <br>
        Height: $this->height <br>
        Color: <div style="background-color:$this->color; width:50px; height: 50px;"></div><br>
        Language Code: $this->langcode
EOT;

        return $rv;
    }
}