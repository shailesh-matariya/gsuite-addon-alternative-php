<?php

namespace ShaileshMatariya\Gsuite\Addon;

class OpenLink extends GoogleModel
{
    /** @var string  "enum": ["NOTHING","RELOAD"] */
    public $on_close;

    /** @var string  "enum": [ "FULL_SIZE", "OVERLAY" ] */
    public $open_as;

    /** @var string */
    public $url;

    /**
     * @return string
     */
    public function getOnClose(): string
    {
        return $this->on_close;
    }

    /**
     * @param string $on_close
     *
     * @return OpenLink
     */
    public function setOnClose(string $on_close): OpenLink
    {
        $this->on_close = $on_close;

        return $this;
    }

    /**
     * @return string
     */
    public function getOpenAs(): string
    {
        return $this->open_as;
    }

    /**
     * @param string $open_as
     *
     * @return OpenLink
     */
    public function setOpenAs(string $open_as): OpenLink
    {
        $this->open_as = $open_as;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return OpenLink
     */
    public function setUrl(string $url): OpenLink
    {
        $this->url = $url;

        return $this;
    }
}
