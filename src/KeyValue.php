<?php

namespace ShaileshMatariya\Gsuite\Addon;

use ShaileshMatariya\Gsuite\Addon\Utils\CommonAction;

class KeyValue extends CommonAction
{
    /** @var string bottom label */
    public $bottom_label;

    /** @var string */
    public $content;

    /** @var Button */
    public $button;

    /** @var string */
    public $icon;

    /** @var string */
    public $alt_text;

    /** @var string */
    public $url;

    /** @var boolean */
    public $multiline;

    /** @var string top label */
    public $top_label;

    /** @var SwitchControl */
    public $switch_to_set;

    /**
     * @return string
     */
    public function getBottomLabel(): string
    {
        return $this->bottom_label;
    }

    /**
     * @param string $bottom_label
     *
     * @return KeyValue
     */
    public function setBottomLabel(string $bottom_label): KeyValue
    {
        $this->bottom_label = $bottom_label;

        return $this;
    }

    /**
     * @return Button
     */
    public function getButton(): Button
    {
        return $this->button;
    }

    /**
     * @param Button $button
     *
     * @return KeyValue
     */
    public function setButton(Button $button): KeyValue
    {
        $this->button = $button;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $text
     *
     * @return KeyValue
     */
    public function setContent(string $text): KeyValue
    {
        $this->content = $text;

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
     * @return KeyValue
     */
    public function setIcon(string $icon): KeyValue
    {
        $this->icon = $icon;

        return $this;
    }

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
     * @return KeyValue
     */
    public function setAltText(string $alt_text): KeyValue
    {
        $this->alt_text = $alt_text;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return KeyValue
     */
    public function setUrl(string $url): KeyValue
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @param bool $multiline
     *
     * @return KeyValue
     */
    public function setMultiline(bool $multiline): KeyValue
    {
        $this->multiline = $multiline;

        return $this;
    }

    /**
     * @return string
     */
    public function getTopLabel(): string
    {
        return $this->top_label;
    }

    /**
     * @param string $top_label
     *
     * @return KeyValue
     */
    public function setTopLabel(string $top_label): KeyValue
    {
        $this->top_label = $top_label;

        return $this;
    }

    /**
     * @return SwitchControl
     */
    public function getSwitchToSet(): SwitchControl
    {
        return $this->switch_to_set;
    }

    /**
     * @param SwitchControl $switch_to_set
     *
     * @return KeyValue
     */
    public function setSwitchToSet(SwitchControl $switch_to_set): KeyValue
    {
        $this->switch_to_set = $switch_to_set;

        return $this;
    }
}
