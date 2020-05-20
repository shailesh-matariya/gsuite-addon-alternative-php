<?php

namespace ShaileshMatariya\Gsuite\Addon;

class SubmitFormResponse
{
    /** @var RenderAction */
    public $render_actions;

    /** @var boolean */
    public $state_changed;

    /**
     * @return RenderAction
     */
    public function getRenderActions(): RenderAction
    {
        return $this->render_actions;
    }

    /**
     * @param RenderAction $render_actions
     *
     * @return SubmitFormResponse
     */
    public function setRenderActions(RenderAction $render_actions): SubmitFormResponse
    {
        $this->render_actions = $render_actions;

        return $this;
    }

    /**
     * @return bool
     */
    public function getStateChanged(): bool
    {
        return $this->state_changed;
    }

    /**
     * @param bool $state_changed
     *
     * @return SubmitFormResponse
     */
    public function setStateChanged(bool $state_changed): SubmitFormResponse
    {
        $this->state_changed = $state_changed;

        return $this;
    }
}
