<?php

namespace ShaileshMatariya\Gsuite\Addon;

class Navigation extends GoogleModel
{
    /** @var bool */
    public $pop_to_root;

    /** @var bool */
    public $pop;

    /** @var string */
    public $pop_to_card;

    /** @var Card */
    public $push_card;

    /** @var Card */
    public $update_card;

    /**
     * @return bool
     */
    public function getPopToRoot(): bool
    {
        return $this->pop_to_root;
    }

    /**
     * @param bool $pop_to_root
     *
     * @return Navigation
     */
    public function setPopToRoot(bool $pop_to_root): self
    {
        $this->pop_to_root = $pop_to_root;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPop(): bool
    {
        return $this->pop;
    }

    /**
     * @param bool $pop
     *
     * @return Navigation
     */
    public function setPop(bool $pop): self
    {
        $this->pop = $pop;

        return $this;
    }

    /**
     * @return string
     */
    public function getPopToCard(): string
    {
        return $this->pop_to_card;
    }

    /**
     * @param string $pop_to_card
     *
     * @return Navigation
     */
    public function setPopToCard(string $pop_to_card): self
    {
        $this->pop_to_card = $pop_to_card;

        return $this;
    }

    /**
     * @return Card
     */
    public function getPushCard(): Card
    {
        return $this->push_card;
    }

    /**
     * @param Card $push_card
     *
     * @return Navigation
     */
    public function setPushCard(Card $push_card): self
    {
        $this->push_card = $push_card;

        return $this;
    }

    /**
     * @return Card
     */
    public function getUpdateCard(): Card
    {
        return $this->update_card;
    }

    /**
     * @param Card $update_card
     *
     * @return Navigation
     */
    public function setUpdateCard(Card $update_card): self
    {
        $this->update_card = $update_card;

        return $this;
    }
}
