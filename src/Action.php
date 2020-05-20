<?php

namespace ShaileshMatariya\Gsuite\Addon;

class Action extends GoogleModel
{
    /** @var string */
    protected $function;

    /**
     * @return string
     */
    public function getFunction(): string
    {
        return $this->function;
    }

    /**
     * @param string $function
     *
     * @return Action
     */
    public function setFunction(string $function): Action
    {
        $this->function = $function;

        return $this;
    }
}
