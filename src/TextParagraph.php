<?php

namespace ShaileshMatariya\Gsuite\Addon;

/** @id /properties/text_paragraph */
class TextParagraph extends GoogleModel
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
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }
}
