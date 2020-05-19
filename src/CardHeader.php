<?php

namespace ShaileshMatariya\Gsuite\Addon;

use Google_Model;
use ShaileshMatariya\Gsuite\Addon\Utils\ImageStyle;

class CardHeader extends Google_Model
{
    /** @var string */
    public $image_alt_text;

    /** @var string */
    public $image_url;

    /** @var string */
    public $subtitle;

    /** @var string */
    public $title;

    /** @var ImageStyle */
    public $image_style;

    /**
     * @return string
     */
    public function getImageAltText(): string
    {
        return $this->image_alt_text;
    }

    /**
     * @param string $image_alt_text
     *
     * @return CardHeader
     */
    public function setImageAltText(string $image_alt_text): CardHeader
    {
        $this->image_alt_text = $image_alt_text;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageStyle(): string
    {
        return $this->image_style;
    }

    /**
     * @param string $image_style
     *
     * @return CardHeader
     */
    public function setImageStyle(string $image_style): CardHeader
    {
        $this->image_style = $image_style;

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
     * @param string $image_url
     *
     * @return CardHeader
     */
    public function setImageUrl(string $image_url): CardHeader
    {
        $this->image_url = $image_url;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubtitle(): string
    {
        return $this->subtitle;
    }

    /**
     * @param string $subtitle
     *
     * @return CardHeader
     */
    public function setSubtitle(string $subtitle): CardHeader
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return CardHeader
     */
    public function setTitle(string $title): CardHeader
    {
        $this->title = $title;

        return $this;
    }
}
