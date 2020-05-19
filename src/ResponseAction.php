<?php

namespace ShaileshMatariya\Gsuite\Addon\Actions;

use Google_Model;
use ShaileshMatariya\Gsuite\Addon\Navigation;
use ShaileshMatariya\Gsuite\Addon\Notification;
use ShaileshMatariya\Gsuite\Addon\OpenLink;

class ResponseAction extends Google_Model
{
    /** @var Navigation[] */
    public $navigations;

    /** @var OpenLink */
    public $link;

    /** @var Notification */
    public $notification;

    /**
     * @return Navigation[]
     */
    public function getNavigations(): array
    {
        return $this->navigations;
    }

    /**
     * @param Navigation $navigation
     *
     * @return ResponseAction
     */
    public function addNavigation(Navigation $navigation): ResponseAction
    {
        $this->navigations[] = $navigation;

        return $this;
    }

    /**
     * @return OpenLink
     */
    public function getLink(): OpenLink
    {
        return $this->link;
    }

    /**
     * @param OpenLink $link
     *
     * @return ResponseAction
     */
    public function setLink(OpenLink $link): ResponseAction
    {
        $this->link = $link;

        return $this;
    }

    /**
     * @return Notification
     */
    public function getNotification(): Notification
    {
        return $this->notification;
    }

    /**
     * @param Notification $notification
     *
     * @return ResponseAction
     */
    public function setNotification(Notification $notification): ResponseAction
    {
        $this->notification = $notification;

        return $this;
    }
}
