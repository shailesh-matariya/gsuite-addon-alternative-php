<?php

namespace ShaileshMatariya\Gsuite\Addon;

class ResponseBuilder extends GoogleModel
{
    /** @var Notification */
    public $notification;

    /** @var Navigation */
    public $navigation;

    /** @var ResponseAction */
    public $action;

    /** @var RenderAction */
    public $render_action;

    /**
     * @return ResponseAction
     */
    public function getAction(): ResponseAction
    {
        return $this->action;
    }

    /**
     * @param ResponseAction $action
     *
     * @return ResponseBuilder
     */
    public function setAction(ResponseAction $action): self
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return RenderAction
     */
    public function getRenderAction(): RenderAction
    {
        return $this->render_action;
    }

    /**
     * @param RenderAction $render_action
     *
     * @return ResponseBuilder
     */
    public function setRenderAction(RenderAction $render_action): self
    {
        $this->render_action = $render_action;

        return $this;
    }

    /**
     * @return Navigation
     */
    public function getNavigation(): Navigation
    {
        return $this->navigation;
    }

    /**
     * @param Navigation $navigation
     *
     * @return ResponseBuilder
     */
    public function setNavigation(Navigation $navigation): self
    {
        $this->navigation = $navigation;

        return $this;
    }

    /**
     * @return Notification
     */
    public function getNotification(): Notification
    {
        return $this->notification;
    }

    /**
     * @param Notification $notification
     *
     * @return ResponseBuilder
     */
    public function setNotification(Notification $notification): self
    {
        $this->notification = $notification;

        return $this;
    }
}
