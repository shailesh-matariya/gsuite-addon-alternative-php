<?php

namespace ShaileshMatariya\Gsuite\Addon;

class Color extends GoogleModel
{
    /** @var integer */
    public $red;

    /** @var integer */
    public $green;

    /** @var integer */
    public $blue;

    /** @var integer The alpha value of the color as a value in the interval [0, 1]. 1 is sloid color and 0 is transparent */
    public $alpha;

    /**
     * @return int
     */
    public function getRed(): int
    {
        return $this->red;
    }

    /**
     * @param int $red
     *
     * @return Color
     */
    public function setRed(int $red): Color
    {
        $this->red = $red;

        return $this;
    }

    /**
     * @return int
     */
    public function getGreen(): int
    {
        return $this->green;
    }

    /**
     * @param int $green
     *
     * @return Color
     */
    public function setGreen(int $green): Color
    {
        $this->green = $green;

        return $this;
    }

    /**
     * @return int
     */
    public function getBlue(): int
    {
        return $this->blue;
    }

    /**
     * @param int $blue
     *
     * @return Color
     */
    public function setBlue(int $blue): Color
    {
        $this->blue = $blue;

        return $this;
    }

    /**
     * @return int
     */
    public function getAlpha(): int
    {
        return $this->alpha;
    }

    /**
     * @param int $alpha
     *
     * @return Color
     */
    public function setAlpha(int $alpha): Color
    {
        $this->alpha = $alpha;

        return $this;
    }
}
