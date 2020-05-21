<?php

namespace ShaileshMatariya\Gsuite\Addon;

class Color extends GoogleModel
{
    /** @var float */
    public $red;

    /** @var float */
    public $green;

    /** @var float */
    public $blue;

    /** @var float The alpha value of the color as a value in the interval [0, 1]. 1 is sloid color and 0 is transparent */
    public $alpha;

    /**
     * @return float
     */
    public function getRed(): float
    {
        return $this->red;
    }

    /**
     * @param float $red
     *
     * @return Color
     */
    public function setRed(float $red): Color
    {
        $this->red = $red;

        return $this;
    }

    /**
     * @return float
     */
    public function getGreen(): float
    {
        return $this->green;
    }

    /**
     * @param float $green
     *
     * @return Color
     */
    public function setGreen(float $green): Color
    {
        $this->green = $green;

        return $this;
    }

    /**
     * @return float
     */
    public function getBlue(): float
    {
        return $this->blue;
    }

    /**
     * @param float $blue
     *
     * @return Color
     */
    public function setBlue(float $blue): Color
    {
        $this->blue = $blue;

        return $this;
    }

    /**
     * @return float
     */
    public function getAlpha(): float
    {
        return $this->alpha;
    }

    /**
     * @param float $alpha
     *
     * @return Color
     */
    public function setAlpha(float $alpha): Color
    {
        $this->alpha = $alpha;

        return $this;
    }
}
