<?php

namespace ShaileshMatariya\Gsuite\Addon;

class SelectionItem extends GoogleModel
{
    /** @var string */
    public $text;

    /** @var string */
    public $value;

    /** @var boolean */
    public $selected;

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
     * @return SelectionItem
     */
    public function setText(string $text): SelectionItem
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return SelectionItem
     */
    public function setValue(string $value): SelectionItem
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSelected(): bool
    {
        return $this->selected;
    }

    /**
     * @param bool $selected
     *
     * @return SelectionItem
     */
    public function setSelected(bool $selected): SelectionItem
    {
        $this->selected = $selected;

        return $this;
    }
}
