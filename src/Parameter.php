<?php

namespace ShaileshMatariya\Gsuite\Addon;

class Parameter extends GoogleModel
{
    /** @var string */
    public $key;

    /** @var string */
    public $value;

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     *
     * @return Parameter
     */
    public function setKey(string $key): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return Parameter
     */
    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
