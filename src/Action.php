<?php

namespace ShaileshMatariya\Gsuite\Addon\Actions;

use Google_Model;

class Action extends Google_Model
{
    /** @var string */
    protected $function_name;

    /** @var string */
    protected $load_indicator;

    /** @var object */
    protected $parameters;

    /**
     * @return string
     */
    public function getFunctionName(): string
    {
        return $this->function_name;
    }

    /**
     * @param string $function_name
     *
     * @return Action
     */
    public function setFunctionName(string $function_name): Action
    {
        $this->function_name = $function_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getLoadIndicator(): string
    {
        return $this->load_indicator;
    }

    /**
     * @param string $load_indicator
     *
     * @return Action
     */
    public function setLoadIndicator(string $load_indicator): Action
    {
        $this->load_indicator = $load_indicator;

        return $this;
    }

    /**
     * @return object
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param object $parameters
     *
     * @return Action
     */
    public function setParameters($parameters): Action
    {
        $this->parameters = $parameters;

        return $this;
    }
}
