<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sabrina
 * Date: 27.11.17
 * Time: 12:42
 */

namespace HTL3R\Flags\Flags;

use HTL3R\Flags\Interfaces\FlagInterface as FlagInterface;
// für Flag nicht notwendig, da sich die Dateien im gleichen Namespace befinden

class TriangleFlag extends Flag implements FlagInterface
{
    /**
     * TriangleFlag constructor.
     * @param $name
     * @param $price
     * @param $width
     * @param $height
     * @param $color
     * @param $langcode
     */
    public function __construct($name, $price, $width, $height, $color, $langcode)
    {
        parent::__construct($name, $price, $width, $height, $color, $langcode);
    }

    /**
     * Calculates the area of the flag
     * @return float area of the flag in m^2
     */
    public function calculateArea(): float
    {
        return ($this->width * $this->height) / 2;
    }
}