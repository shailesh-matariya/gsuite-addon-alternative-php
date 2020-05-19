<?php

namespace ShaileshMatariya\Gsuite\Addon\Actions;

use Google_Model;

class AuthorizationAction extends Google_Model
{
    /** @var string */
    public $authorization_url;

    /**
     * @return string
     */
    public function getAuthorizationUrl(): string
    {
        return $this->authorization_url;
    }

    /**
     * @param string $authorization_url
     */
    public function setAuthorizationUrl(string $authorization_url): void
    {
        $this->authorization_url = $authorization_url;
    }
}
