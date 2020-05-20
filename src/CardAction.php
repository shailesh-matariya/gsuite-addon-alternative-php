<?php

namespace ShaileshMatariya\Gsuite\Addon;

class CardAction extends GoogleModel
{
    /** @var string */
    public $action_label;

    /** @var OnClick */
    public $on_click;

    /**
     * @return string
     */
    public function getActionLabel(): string
    {
        return $this->action_label;
    }

    /**
     * @param string $action_label
     *
     * @return CardAction
     */
    public function setActionLabel(string $action_label): CardAction
    {
        $this->action_label = $action_label;

        return $this;
    }

    /**
     * @return OnClick
     */
    public function getOnClick(): OnClick
    {
        return $this->on_click;
    }

    /**
     * @param OnClick $on_click
     *
     * @return CardAction
     */
    public function setOnClick(OnClick $on_click): CardAction
    {
        $this->on_click = $on_click;

        return $this;
    }
}
