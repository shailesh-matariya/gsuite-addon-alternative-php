<?php

namespace ShaileshMatariya\Gsuite\Addon;

use Google_Model;

class CardBuilder extends Google_Model
{
    /** @var string */
    public $name;

    /** @var CardHeader */
    public $header;

    /** @var CardAction */
    public $card_action;

    /** @var string */
    public $display_style;

    /** @var CardSection[] */
    public $sections;

    /** @var FixedFooter */
    public $fixed_footer;

    /** @var CardHeader */
    public $peek_card_header;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return CardBuilder
     */
    public function setName(string $name): CardBuilder
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return CardHeader
     */
    public function getHeader(): CardHeader
    {
        return $this->header;
    }

    /**
     * @param CardHeader $header
     *
     * @return CardBuilder
     */
    public function setHeader(CardHeader $header): CardBuilder
    {
        $this->header = $header;

        return $this;
    }

    /**
     * @return CardSection[]
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * @param CardSection $section
     *
     * @return CardBuilder
     */
    public function addSection(CardSection $section): CardBuilder
    {
        $this->sections[] = $section;

        return $this;
    }

    /**
     * @return CardAction
     */
    public function getCardAction(): CardAction
    {
        return $this->card_action;
    }

    /**
     * @param CardAction $card_action
     *
     * @return CardBuilder
     */
    public function setCardAction(CardAction $card_action): CardBuilder
    {
        $this->card_action = $card_action;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayStyle(): string
    {
        return $this->display_style;
    }

    /**
     * @param string $display_style
     *
     * @return CardBuilder
     */
    public function setDisplayStyle(string $display_style): CardBuilder
    {
        $this->display_style = $display_style;

        return $this;
    }

    /**
     * @return FixedFooter
     */
    public function getFixedFooter(): FixedFooter
    {
        return $this->fixed_footer;
    }

    /**
     * @param FixedFooter $fixed_footer
     *
     * @return CardBuilder
     */
    public function setFixedFooter(FixedFooter $fixed_footer): CardBuilder
    {
        $this->fixed_footer = $fixed_footer;

        return $this;
    }

    /**
     * @return CardHeader
     */
    public function getPeekCardHeader(): CardHeader
    {
        return $this->peek_card_header;
    }

    /**
     * @param CardHeader $peek_card_header
     *
     * @return CardBuilder
     */
    public function dfsetPeekCardHeader(CardHeader $peek_card_header): CardBuilder
    {
        $this->peek_card_header = $peek_card_header;

        return $this;
    }
}
