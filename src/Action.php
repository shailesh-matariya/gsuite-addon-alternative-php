<?php

namespace ShaileshMatariya\Gsuite\Addon;

class Action extends GoogleModel
{
    /** @var string */
    public $function;

    /** @var Parameter[] */
    public $parameters;

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
    public function setFunction(string $function): self
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
    public function setParameters(array $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * @param Parameter $parameter
     *
     * @return Action
     */
    public function addParameter(Parameter $parameter): self
    {
        $this->parameters[] = $parameter;

        return $this;
    }
}
