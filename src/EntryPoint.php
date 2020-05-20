<?php

namespace ShaileshMatariya\Gsuite\Addon;

class EntryPoint extends GoogleModel
{
    /** @var string */
    public $type;

    /** @var string */
    public $uri;

    /** @var string */
    public $label;

    /** @var string */
    public $meeting_code;

    /** @var string */
    public $access_code;

    /** @var string */
    public $passcode;

    /** @var string */
    public $password;

    /** @var string */
    public $pin;

    /** @var string */
    public $region_code;

    /** @var string[] */
    public $feature;

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
     * "enum": ["VIDEO", "PHONE", "MORE", "SIP"]
     *
     * @return EntryPoint
     */
    public function setType(string $type): EntryPoint
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     *
     * @return EntryPoint
     */
    public function setUri(string $uri): EntryPoint
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return EntryPoint
     */
    public function setLabel(string $label): EntryPoint
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return string
     */
    public function getMeetingCode(): string
    {
        return $this->meeting_code;
    }

    /**
     * @param string $meeting_code
     *
     * @return EntryPoint
     */
    public function setMeetingCode(string $meeting_code): EntryPoint
    {
        $this->meeting_code = $meeting_code;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccessCode(): string
    {
        return $this->access_code;
    }

    /**
     * @param string $access_code
     *
     * @return EntryPoint
     */
    public function setAccessCode(string $access_code): EntryPoint
    {
        $this->access_code = $access_code;

        return $this;
    }

    /**
     * @return string
     */
    public function getPasscode(): string
    {
        return $this->passcode;
    }

    /**
     * @param string $passcode
     *
     * @return EntryPoint
     */
    public function setPasscode(string $passcode): EntryPoint
    {
        $this->passcode = $passcode;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return EntryPoint
     */
    public function setPassword(string $password): EntryPoint
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getPin(): string
    {
        return $this->pin;
    }

    /**
     * @param string $pin
     *
     * @return EntryPoint
     */
    public function setPin(string $pin): EntryPoint
    {
        $this->pin = $pin;

        return $this;
    }

    /**
     * @return string
     */
    public function getRegionCode(): string
    {
        return $this->region_code;
    }

    /**
     * @param string $region_code
     *
     * @return EntryPoint
     */
    public function setRegionCode(string $region_code): EntryPoint
    {
        $this->region_code = $region_code;

        return $this;
    }

    /**
     * @return Feature[]
     */
    public function getFeature(): array
    {
        return $this->feature;
    }

    /**
     * @param string[] $feature
     *
     * @return EntryPoint
     */
    public function setFeatures(array $feature): EntryPoint
    {
        $this->feature = $feature;

        return $this;
    }

    /**
     * @param string $feature
     *
     * "enum": ["TOLL","TOLL_FREE"]
     *
     * @return EntryPoint
     */
    public function addFeature($feature): EntryPoint
    {
        $this->feature[] = $feature;

        return $this;
    }
}
