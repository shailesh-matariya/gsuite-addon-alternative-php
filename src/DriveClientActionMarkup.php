<?php

namespace ShaileshMatariya\Gsuite\Addon;

class DriveClientActionMarkup extends GoogleModel
{
    /** @var RequestFileScope */
    public $request_file_scope;

    /**
     * @return RequestFileScope
     */
    public function getRequestFileScope(): RequestFileScope
    {
        return $this->request_file_scope;
    }

    /**
     * @param RequestFileScope $request_file_scope
     *
     * @return DriveClientActionMarkup
     */
    public function setRequestFileScope(RequestFileScope $request_file_scope): self
    {
        $this->request_file_scope = $request_file_scope;

        return $this;
    }
}
