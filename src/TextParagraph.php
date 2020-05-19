<?php

namespace ShaileshMatariya\Gsuite\Addon;

class TextParagraph extends \Google_Model
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
     * @return TextParagraph
     */
    public function setText(string $text): TextParagraph
    {
        $this->text = $text;

        return $this;
    }
}
