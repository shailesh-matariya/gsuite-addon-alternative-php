<?php

namespace ShaileshMatariya\Gsuite\Addon;

class ImageButton extends Button
{
    /** @var string */
    public $alt_text;

    /** @var string */
    public $icon;

    /** @var string */
    public $url;

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
     * @return ImageButton
     */
    public function setAltText(string $alt_text): ImageButton
    {
        $this->alt_text = $alt_text;

        return $this;
    }

    /**
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     *
     * @return ImageButton
     */
    public function setIcon(string $icon): ImageButton
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @return string
     */
    public function getIconUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return ImageButton
     */
    public function setIconUrl(string $url): ImageButton
    {
        $this->url = $url;

        return $this;
    }
}
