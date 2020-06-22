<?php

namespace ShaileshMatariya\Gsuite\Addon;

class Error extends GoogleModel
{
    /** @var string "enum": ["AUTHENTICATION", "TEMPORARY", "PERMANENT", "PERMISSION_DENIED", "CONFERENCE_SOLUTION_FORBIDDEN"], */
    public $type;

    /** @var string */
    public $authentication_url;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Error
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthenticationUrl(): string
    {
        return $this->authentication_url;
    }

    /**
     * @param string $authentication_url
     *
     * @return Error
     */
    public function setAuthenticationUrl(string $authentication_url): self
    {
        $this->authentication_url = $authentication_url;

        return $this;
    }
}
