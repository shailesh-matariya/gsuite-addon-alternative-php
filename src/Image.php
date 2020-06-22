<?php

namespace ShaileshMatariya\Gsuite\Addon;

class Image extends GoogleModel
{
    /** @var string */
    public $alt_text;

    /** @var string */
    public $image_url;

    /** @var OnClick */
    public $on_click;

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
    public function setAltText(string $alt_text): self
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
    public function setImageUrl(string $url): self
    {
        $this->image_url = $url;

        return $this;
    }

    /**
     * @return OnClick
     */
    public function getOnClick(): OnClick
    {
        return $this->on_click;
    }

    /**
     * @param OnClick $on_click
     *
     * @return Image
     */
    public function setOnClick(OnClick $on_click): self
    {
        $this->on_click = $on_click;

        return $this;
    }
}
