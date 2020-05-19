<?php


namespace ShaileshMatariya\Gsuite\Addon;


class Suggestions extends \Google_Model
{
    /** @var string[]*/
    public $suggestions;

    /**
     * @return string[]
     */
    public function getSuggestions(): array
    {
        return $this->suggestions;
    }

    /**
     * @param string $suggestion
     *
     * @return Suggestions
     */
    public function addSuggestion(string $suggestion): Suggestions
    {
        $this->suggestions[] = $suggestion;

        return $this;
    }

    /**
     * @param string[] $suggestions
     *
     * @return Suggestions
     */
    public function addSuggestions(array $suggestions): Suggestions
    {
        $this->suggestions = array_merge($this->$suggestions, $suggestions);

        return $this;
    }
}
