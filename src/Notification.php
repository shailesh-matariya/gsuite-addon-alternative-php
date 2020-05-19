<?php


namespace ShaileshMatariya\Gsuite\Addon;


class Notification extends \Google_Model
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
    public function setText(string $text): Notification
    {
        $this->text = $text;

        return $this;
    }
}
