<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sabrina
 * Date: 27.11.17
 * Time: 12:41
 */

namespace HTL3R\Flags\Flags;

use HTL3R\Flags\Interfaces\FlagInterface as FlagInterface;


class RectangleFlag extends Flag implements FlagInterface
{
    public function __construct($name, $price, $width, $height, $color)
    {
        parent::__construct($name, $price, $width, $height, $color);
    }

    /**
     * Calculates the area of the flag
     * @return float area of the flag in m^2
     */
    public function calculateArea(): float
    {
        return $this->width * $this->height;
    }
}