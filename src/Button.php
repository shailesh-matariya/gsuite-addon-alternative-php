<?php

namespace ShaileshMatariya\Gsuite\Addon;

class Button extends GoogleModel
{
    /** @var string */
    public $text;

    /** @var Icon */
    public $icon;

    /** @var Color */
    public $color;

    /** @var OnClick */
    public $on_click;

    /** @var boolean */
    public $disabled;

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
     * @return Button
     */
    public function setText(string $text): Button
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return Icon
     */
    public function getIcon(): Icon
    {
        return $this->icon;
    }

    /**
     * @param Icon $icon
     *
     * @return Button
     */
    public function setIcon(Icon $icon): Button
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @return Color
     */
    public function getColor(): Color
    {
        return $this->color;
    }

    /**
     * @param Color $color
     *
     * @return Button
     */
    public function setColor(Color $color): Button
    {
        $this->color = $color;

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
     * @return Button
     */
    public function setOnClick(OnClick $on_click): Button
    {
        $this->on_click = $on_click;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDisabled(): bool
    {
        return $this->disabled;
    }

    /**
     * @param bool $disabled
     *
     * @return Button
     */
    public function setDisabled(bool $disabled): Button
    {
        $this->disabled = $disabled;

        return $this;
    }
}
