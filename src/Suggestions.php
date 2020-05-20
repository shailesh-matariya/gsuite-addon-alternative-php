<?php

namespace ShaileshMatariya\Gsuite\Addon;

class Suggestions extends GoogleModel
{
    /** @var SuggestionItem[] */
    public $suggestions;

    /**
     * @return SuggestionItem[]
     */
    public function getSuggestions(): array
    {
        return $this->suggestions;
    }

    /**
     * @param SuggestionItem $suggestion
     *
     * @return Suggestions
     */
    public function addSuggestion(SuggestionItem $suggestion): Suggestions
    {
        $this->suggestions[] = $suggestion;

        return $this;
    }

    /**
     * @param SuggestionItem[] $suggestions
     *
     * @return Suggestions
     */
    public function addSuggestions(array $suggestions): Suggestions
    {
        $this->suggestions = array_merge($this->$suggestions, $suggestions);

        return $this;
    }

    /**
     * @param SuggestionItem[] $suggestions
     *
     * @return Suggestions
     */
    public function setSuggestions(array $suggestions): Suggestions
    {
        $this->suggestions = $suggestions;

        return $this;
    }
}
