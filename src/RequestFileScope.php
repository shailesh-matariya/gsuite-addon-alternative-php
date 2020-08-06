<?php

namespace ShaileshMatariya\Gsuite\Addon;

class RequestFileScope extends GoogleModel
{
    /** @var string */
    public $item_id;

    /**
     * @return string
     */
    public function getItemId(): string
    {
        return $this->item_id;
    }

    /**
     * @param string $item_id
     *
     * @return RequestFileScope
     */
    public function setItemId(string $item_id): self
    {
        $this->item_id = $item_id;

        return $this;
    }
}
