<?php

namespace ShaileshMatariya\Gsuite\Addon;

class SuggestionItem extends GoogleModel
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
     * @return SuggestionItem
     */
    public function setText(string $text): SuggestionItem
    {
        $this->text = $text;

        return $this;
    }
}
