<?php

namespace ShaileshMatariya\Gsuite\Addon;

use ShaileshMatariya\Gsuite\Addon\Utils\CommonAction;

class TextButton extends CommonAction
{
    /** @var string */
    public $background_color;

    /** @var string */
    public $text;

    /** @var string */
    public $text_button_style;

    /** @var boolean */
    public $disabled;

    /**
     * @return string
     */
    public function getBackgroundColor(): string
    {
        return $this->background_color;
    }

    /**
     * @param string $background_color
     *
     * @return self
     */
    public function setBackgroundColor(string $background_color): self
    {
        $this->background_color = $background_color;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDisabled(): bool
    {
        return $this->disabled;
    }

    /**
     * @param bool $disabled
     *
     * @return self
     */
    public function setDisabled(bool $disabled): self
    {
        $this->disabled = $disabled;

        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getTextButtonStyle(): string
    {
        return $this->text_button_style;
    }

    /**
     * @param string $text_button_style
     *
     * @return self
     */
    public function setTextButtonStyle(string $text_button_style): self
    {
        $this->text_button_style = $text_button_style;

        return $this;
    }
}
