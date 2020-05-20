<?php

namespace ShaileshMatariya\Gsuite\Addon;

class CardHeader extends GoogleModel
{
    /** @var string */
    public $image_alt_text;

    /** @var string */
    public $image_url;

    /** @var string */
    public $subtitle;

    /** @var string */
    public $title;

    /** @var string  "enum": [ "SQUARE", "CIRCLE" ],  */
    public $image_type;

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
    public function getImageType(): string
    {
        return $this->image_type;
    }

    /**
     * @param string $image_type
     *
     * @return CardHeader
     */
    public function setImageType(string $image_type): CardHeader
    {
        $this->image_type = $image_type;

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
