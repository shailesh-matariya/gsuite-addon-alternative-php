<?php

namespace ShaileshMatariya\Gsuite\Addon;

class Card extends GoogleModel
{
    /** @var string */
    public $name;

    /** @var CardHeader */
    public $header;

    /** @var CardAction */
    public $card_actions;

    /** @var string */
    public $display_style;

    /** @var Section[] */
    public $sections;

    /** @var CardFixedFooter */
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
     * @return Card
     */
    public function setName(string $name): Card
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
     * @return Card
     */
    public function setHeader(CardHeader $header): Card
    {
        $this->header = $header;

        return $this;
    }

    /**
     * @return Section[]
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * @param Section $section
     *
     * @return Card
     */
    public function addSection(Section $section): Card
    {
        $this->sections[] = $section;

        return $this;
    }

    /**
     * @return CardAction
     */
    public function getCardActions(): CardAction
    {
        return $this->card_actions;
    }

    /**
     * @param CardAction $card_actions
     *
     * @return Card
     */
    public function setCardActions(CardAction $card_actions): Card
    {
        $this->card_actions = $card_actions;

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
     * @return Card
     */
    public function setDisplayStyle(string $display_style): Card
    {
        $this->display_style = $display_style;

        return $this;
    }

    /**
     * @return CardFixedFooter
     */
    public function getFixedFooter(): CardFixedFooter
    {
        return $this->fixed_footer;
    }

    /**
     * @param CardFixedFooter $fixed_footer
     *
     * @return Card
     */
    public function setFixedFooter(CardFixedFooter $fixed_footer): Card
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
     * @return Card
     */
    public function dfsetPeekCardHeader(CardHeader $peek_card_header): Card
    {
        $this->peek_card_header = $peek_card_header;

        return $this;
    }
}
