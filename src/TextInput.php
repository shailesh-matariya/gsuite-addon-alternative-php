<?php

namespace ShaileshMatariya\Gsuite\Addon;

class TextInput extends GoogleModel
{
    /** @var string */
    public $name;

    /** @var string */
    public $label;

    /** @var string */
    public $hint_text;

    /** @var string */
    public $value;

    /** @var string  "enum": ["SINGLE_LINE", "MULTIPLE_LINE"], */
    public $type;

    /** @var Action */
    public $on_change_action;

    /** @var Suggestions */
    public $initial_suggestions;

    /** @var Action  The refresh function which returns suggestions based on the user's input text. */
    public $auto_complete_action;

    /** @var boolean */
    public $multiple_suggestions;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return TextInput
     */
    public function setName(string $name): TextInput
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return TextInput
     */
    public function setLabel(string $label): TextInput
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return string
     */
    public function getHintText(): string
    {
        return $this->hint_text;
    }

    /**
     * @param string $hint_text
     *
     * @return TextInput
     */
    public function setHintText(string $hint_text): TextInput
    {
        $this->hint_text = $hint_text;

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
     * @return TextInput
     */
    public function setValue(string $value): TextInput
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return TextInput
     */
    public function setType(string $type): TextInput
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Action
     */
    public function getOnChangeAction(): Action
    {
        return $this->on_change_action;
    }

    /**
     * @param Action $on_change_action
     *
     * @return TextInput
     */
    public function setOnChangeAction(Action $on_change_action): TextInput
    {
        $this->on_change_action = $on_change_action;

        return $this;
    }

    /**
     * @return Suggestions
     */
    public function getInitialSuggestions(): Suggestions
    {
        return $this->initial_suggestions;
    }

    /**
     * @param Suggestions $initial_suggestions
     *
     * @return TextInput
     */
    public function setInitialSuggestions(Suggestions $initial_suggestions): TextInput
    {
        $this->initial_suggestions = $initial_suggestions;

        return $this;
    }

    /**
     * @return Action
     */
    public function getAutoCompleteAction(): Action
    {
        return $this->auto_complete_action;
    }

    /**
     * @param Action $auto_complete_action
     *
     * @return TextInput
     */
    public function setAutoCompleteAction(Action $auto_complete_action): TextInput
    {
        $this->auto_complete_action = $auto_complete_action;

        return $this;
    }

    /**
     * @return bool
     */
    public function isMultipleSuggestions(): bool
    {
        return $this->multiple_suggestions;
    }

    /**
     * @param bool $multiple_suggestions
     *
     * @return TextInput
     */
    public function setMultipleSuggestions(bool $multiple_suggestions): TextInput
    {
        $this->multiple_suggestions = $multiple_suggestions;

        return $this;
    }
}
