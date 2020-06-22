<?php

namespace ShaileshMatariya\Gsuite\Addon;

class Suggestions extends GoogleModel
{
    /** @var SuggestionItem[] */
    public $items;

    /**
     * @return SuggestionItem[]
     */
    public function getSuggestions(): array
    {
        return $this->items;
    }

    /**
     * @param SuggestionItem $suggestion
     *
     * @return Suggestions
     */
    public function addSuggestion(SuggestionItem $suggestion): self
    {
        $this->items[] = $suggestion;

        return $this;
    }

    /**
     * @param SuggestionItem[] $suggestions
     *
     * @return Suggestions
     */
    public function addSuggestions(array $suggestions): self
    {
        $this->items = array_merge($this->$suggestions, $suggestions);

        return $this;
    }

    /**
     * @param SuggestionItem[] $suggestions
     *
     * @return Suggestions
     */
    public function setSuggestions(array $suggestions): self
    {
        $this->items = $suggestions;

        return $this;
    }
}
