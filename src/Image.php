<?php

namespace ShaileshMatariya\Gsuite\Addon;

use ShaileshMatariya\Gsuite\Addon\Utils\CommonAction;

class Image extends CommonAction
{
    /** @var string */
    public $alt_text;

    /** @var string */
    public $image_url;

    /**
     * @return string
     */
    public function getAltText(): string
    {
        return $this->alt_text;
    }

    /**
     * @param string $alt_text
     *
     * @return Image
     */
    public function setAltText(string $alt_text): Image
    {
        $this->alt_text = $alt_text;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->image_url;
    }

    /**
     * @param string $url
     *
     * @return Image
     */
    public function setImageUrl(string $url): Image
    {
        $this->image_url = $url;

        return $this;
    }
}
