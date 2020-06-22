<?php

namespace ShaileshMatariya\Gsuite\Addon;

class Notification extends GoogleModel
{
    /** @var string */
    public $text;

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
     * @return Notification
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }
}
