<?php


namespace ShaileshMatariya\Gsuite\Addon\Utils;


use ShaileshMatariya\Gsuite\Addon\Actions\Action;
use ShaileshMatariya\Gsuite\Addon\Actions\AuthorizationAction;
use ShaileshMatariya\Gsuite\Addon\Image;
use ShaileshMatariya\Gsuite\Addon\OpenLink;

class CommonAction extends \Google_Model
{
    /** @var string */
    public $composed_email_type;

    /** @var AuthorizationAction | Action */
    public $action;

    /** @var OpenLink */
    public $open_link;

    /**
     * @return AuthorizationAction
     */
    public function getAuthorizationAction(): AuthorizationAction
    {
        return $this->action;
    }

    /**
     * @param AuthorizationAction $action
     *
     * @return self
     */
    public function setAuthorizationAction(AuthorizationAction $action): self
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return AuthorizationAction
     */
    public function getComposeAction(): AuthorizationAction
    {
        return $this->action;
    }

    /**
     * @return string
     */
    public function getComposedEmailType(): string
    {
        return $this->composed_email_type;
    }

    /**
     * @param AuthorizationAction $action
     * @param $composedEmailType
     *
     * @return self
     */
    public function setComposeAction(AuthorizationAction $action, $composedEmailType): self
    {
        $this->action = $action;
        $this->composed_email_type = $composedEmailType;

        return $this;
    }

    /**
     * @return Action
     */
    public function getOnClickAction(): Action
    {
        return $this->action;
    }

    /**
     * @param Action $action
     *
     * @return self
     */
    public function setOnClickAction(Action $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return Action
     */
    public function getOnClickOpenLinkAction(): Action
    {
        return $this->action;
    }

    /**
     * @param Action $action
     *
     * @return self
     */
    public function setOnClickOpenLinkAction(Action $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return OpenLink
     */
    public function getOpenLink(): OpenLink
    {
        return $this->open_link;
    }

    /**
     * @param OpenLink $open_link
     *
     * @return self
     */
    public function setOpenLink(OpenLink $open_link): self
    {
        $this->open_link = $open_link;

        return $this;
    }
}
