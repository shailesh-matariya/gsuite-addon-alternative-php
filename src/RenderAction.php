<?php

namespace ShaileshMatariya\Gsuite\Addon;

class RenderAction extends GoogleModel
{
    /** @var ResponseAction */
    public $action;

    /** @var HostAppAction */
    public $host_app_action;

    /** @var string */
    public $schema;

    /**
     * @return ResponseAction
     */
    public function getAction(): ResponseAction
    {
        return $this->action;
    }

    /**
     * @param ResponseAction $action
     *
     * @return self
     */
    public function setAction(ResponseAction $action): self
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return HostAppAction
     */
    public function getHostAppAction(): HostAppAction
    {
        return $this->host_app_action;
    }

    /**
     * @param HostAppAction $host_app_action
     *
     * @return RenderAction
     */
    public function setHostAppAction(HostAppAction $host_app_action): self
    {
        $this->host_app_action = $host_app_action;

        return $this;
    }

    /**
     * @return string
     */
    public function getSchema(): string
    {
        return $this->schema;
    }

    /**
     * @param string $schema
     *
     * @return RenderAction
     */
    public function setSchema(string $schema): self
    {
        $this->schema = $schema;

        return $this;
    }
}
