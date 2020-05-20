<?php

namespace ShaileshMatariya\Gsuite\Addon;

class SelectionInput extends GoogleModel
{
    /** @var string */
    public $name;

    /** @var string */
    public $label;

    /** @var string "enum": [ "CHECK_BOX", "RADIO_BUTTON", "SWITCH", "DROPDOWN"] */
    public $type;

    /** @var SelectionItem[] */
    public $items;

    /** @var Action */
    public $on_change_action;

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
     * @return SelectionInput
     */
    public function setName(string $name): SelectionInput
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
     * @return SelectionInput
     */
    public function setLabel(string $label): SelectionInput
    {
        $this->label = $label;

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
     * @return SelectionInput
     */
    public function setType(string $type): SelectionInput
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return SelectionItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param SelectionItem[] $items
     *
     * @return SelectionInput
     */
    public function setItems(array $items): SelectionInput
    {
        $this->items = $items;

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
     * @return SelectionInput
     */
    public function setOnChangeAction(Action $on_change_action): SelectionInput
    {
        $this->on_change_action = $on_change_action;

        return $this;
    }
}
