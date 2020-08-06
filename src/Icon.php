<?php

namespace ShaileshMatariya\Gsuite\Addon;

/** @link  https://developers.google.com/apps-script/reference/card-service/icon */
class Icon extends GoogleModel
{
    const NONE = 'NONE';
    const AIRPLANE = 'AIRPLANE';
    const BOOKMARK = 'BOOKMARK';
    const BUS = 'BUS';
    const CAR = 'CAR';
    const CLOCK = 'CLOCK';
    const CONFIRMATION_NUMBER_ICON = 'CONFIRMATION_NUMBER_ICON';
    const DOLLAR = 'DOLLAR';
    const DESCRIPTION = 'DESCRIPTION';
    const EMAIL = 'EMAIL';
    const EVENT_PERFORMER = 'EVENT_PERFORMER';
    const EVENT_SEAT = 'EVENT_SEAT';
    const FLIGHT_ARRIVAL = 'FLIGHT_ARRIVAL';
    const FLIGHT_DEPARTURE = 'FLIGHT_DEPARTURE';
    const HOTEL = 'HOTEL';
    const HOTEL_ROOM_TYPE = 'HOTEL_ROOM_TYPE';
    const INVITE = 'INVITE';
    const MAP_PIN = 'MAP_PIN';
    const MEMBERSHIP = 'MEMBERSHIP';
    const MULTIPLE_PEOPLE = 'MULTIPLE_PEOPLE';
    const OFFER = 'OFFER';
    const PERSON = 'PERSON';
    const PHONE = 'PHONE';
    const RESTAURANT_ICON = 'RESTAURANT_ICON';
    const SHOPPING_CART = 'SHOPPING_CART';
    const STAR = 'STAR';
    const STORE = 'STORE';
    const TICKET = 'TICKET';
    const TRAIN = 'TRAIN';
    const VIDEO_CAMERA = 'VIDEO_CAMERA';
    const VIDEO_PLAY = 'VIDEO_PLAY';

    /** @var string */
    public $known_icon;

    /** @var string */
    public $icon_url;

    /** @var string */
    public $alt_text;

    /**
     * @return string
     */
    public function getKnownIcon(): string
    {
        return $this->known_icon;
    }

    /**
     * @param string $known_icon
     *
     * @return Icon
     */
    public function setKnownIcon(string $known_icon): self
    {
        $this->known_icon = $known_icon;

        return $this;
    }

    /**
     * @return string
     */
    public function getIconUrl(): string
    {
        return $this->icon_url;
    }

    /**
     * @param string $icon_url
     *
     * @return Icon
     */
    public function setIconUrl(string $icon_url): self
    {
        $this->icon_url = $icon_url;

        return $this;
    }

    /**
     * @return string
     */
    public function getAltText(): string
    {
        return $this->alt_text;
    }

    /**
     * @param string $alt_text
     *
     * @return Icon
     */
    public function setAltText(string $alt_text): self
    {
        $this->alt_text = $alt_text;

        return $this;
    }
}
