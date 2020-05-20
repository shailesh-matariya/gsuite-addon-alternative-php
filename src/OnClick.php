<?php

namespace ShaileshMatariya\Gsuite\Addon;

class OnClick extends GoogleModel
{
    /** @var Action */
    public $action;

    /** @var OpenLink */
    public $open_link;

    /** @var Action */
    public $open_dynamic_link_action;

    /** @var Card */
    public $card;

    /**
     * @return Action
     */
    public function getAction(): Action
    {
        return $this->action;
    }

    /**
     * @param Action $action
     *
     * @return OnClick
     */
    public function setAction(Action $action): OnClick
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return Action
     */
    public function getOpenDynamicLinkAction(): Action
    {
        return $this->open_dynamic_link_action;
    }

    /**
     * @param Action $open_dynamic_link_action
     *
     * @return OnClick
     */
    public function setOpenDynamicLinkAction(Action $open_dynamic_link_action): OnClick
    {
        $this->open_dynamic_link_action = $open_dynamic_link_action;

        return $this;
    }

    /**
     * @return Card
     */
    public function getCard(): Card
    {
        return $this->card;
    }

    /**
     * @param Card $card
     *
     * @return OnClick
     */
    public function setCard(Card $card): OnClick
    {
        $this->card = $card;

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
     * @return OnClick
     */
    public function setOpenLink(OpenLink $open_link): OnClick
    {
        $this->open_link = $open_link;

        return $this;
}
}
