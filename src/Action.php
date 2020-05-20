<?php

namespace ShaileshMatariya\Gsuite\Addon;

class Action extends GoogleModel
{
    /** @var string */
    protected $function;

    /** @var Parameter[] */
    protected $parameters;

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

    /**
     * @return Parameter[]
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * @param Parameter[] $parameters
     *
     * @return Action
     */
    public function setParameters(array $parameters): Action
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * @param Parameter $parameter
     *
     * @return Action
     */
    public function addParameter(Parameter $parameter): Action
    {
        $this->parameters[] = $parameter;

        return $this;
    }
}
