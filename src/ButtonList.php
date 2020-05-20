<?php

namespace ShaileshMatariya\Gsuite\Addon;

class ButtonList extends GoogleModel
{
    /** @var Button[] */
    public $buttons;

    /**
     * @return Button[]
     */
    public function getButtons(): array
    {
        return $this->buttons;
    }

    /**
     * @param Button[] $buttons
     *
     * @return ButtonList
     */
    public function setButtons(array $buttons): ButtonList
    {
        $this->buttons = $buttons;

        return $this;
    }

    /**
     * @param Button $button
     *
     * @return ButtonList
     */
    public function addButton(Button $button): ButtonList
    {
        $this->buttons[] = $button;

        return $this;
    }
}
