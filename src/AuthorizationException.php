<?php

namespace ShaileshMatariya\Gsuite\Addon\Actions;

use Google_Model;

class AuthorizationException extends Google_Model
{
    /** @var string */
    public $auth_url;

    /** @var string */
    public $callback;

    /** @var string */
    public $name;

    /**
     * @return string
     */
    public function getAuthUrl(): string
    {
        return $this->auth_url;
    }

    /**
     * @param string $auth_url
     *
     * @return AuthorizationException
     */
    public function setAuthUrl(string $auth_url): AuthorizationException
    {
        $this->auth_url = $auth_url;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomUiCallback(): string
    {
        return $this->callback;
    }

    /**
     * @param string $callback
     *
     * @return AuthorizationException
     */
    public function setCustomUiCallback(string $callback): AuthorizationException
    {
        $this->callback = $callback;

        return $this;
    }

    /**
     * @return string
     */
    public function getResourceDisplayName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return AuthorizationException
     */
    public function setResourceDisplayName(string $name): AuthorizationException
    {
        $this->name = $name;

        return $this;
    }

    public function throwException()
    {
        throw new \Exception('Authorization exception.');
    }
}
