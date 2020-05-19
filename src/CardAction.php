<?php

namespace ShaileshMatariya\Gsuite\Addon;

use Google_Model;
use ShaileshMatariya\Gsuite\Addon\Actions\Action;
use ShaileshMatariya\Gsuite\Addon\Actions\AuthorizationAction;

class CardAction extends Google_Model
{
    /** @var AuthorizationAction */
    public $action;

    /**
     * @param AuthorizationAction $action
     *
     * @return CardAction
     */
    public function setAuthorizationAction(AuthorizationAction $action): CardAction
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return AuthorizationAction
     */
    public function getAuthorizationAction(): AuthorizationAction
    {
        return $this->action;
    }

    /**
     * @param Action $action
     *
     * @return CardAction
     */
    public function setOnClickAction(Action $action): CardAction
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @param Action $action
     *
     * @return CardAction
     */
    public function setOnClickOpenLinkAction(Action $action): CardAction
    {
        $this->action = $action;

        return $this;
    }
}
