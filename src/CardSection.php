<?php


namespace ShaileshMatariya\Gsuite\Addon;


class CardSection extends \Google_Model
{
    /** @var Widget[] */
    public $widgets;

    /** @var boolean */
    public $collapsible;

    /** @var string */
    public $header;

    /** @var int */
    public $numUncollapsibleWidgets;

    /**
     * @return Widget[]
     */
    public function getWidget()
    {
        return $this->widgets;
    }

    /**
     * @param Widget $widget
     *
     * @return CardSection
     */
    public function addWidget(Widget $widget): CardSection
    {
        $this->widgets[] = $widget;

        return $this;
    }

    /**
     * @return bool
     */
    public function getCollapsible(): bool
    {
        return $this->collapsible;
    }

    /**
     * @param bool $collapsible
     *
     * @return CardSection
     */
    public function setCollapsible(bool $collapsible): CardSection
    {
        $this->collapsible = $collapsible;

        return $this;
    }

    /**
     * @return string
     */
    public function getHeader(): string
    {
        return $this->header;
    }

    /**
     * @param string $header
     *
     * @return CardSection
     */
    public function setHeader(string $header): CardSection
    {
        $this->header = $header;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumUncollapsibleWidgets(): int
    {
        return $this->numUncollapsibleWidgets;
    }

    /**
     * @param int $numUncollapsibleWidgets
     *
     * @return CardSection
     */
    public function setNumUncollapsibleWidgets(int $numUncollapsibleWidgets): CardSection
    {
        $this->numUncollapsibleWidgets = $numUncollapsibleWidgets;

        return $this;
    }
}
