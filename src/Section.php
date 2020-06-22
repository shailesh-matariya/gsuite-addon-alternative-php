<?php

namespace ShaileshMatariya\Gsuite\Addon;

class Section extends GoogleModel
{
    /** @var Widget[] required */
    public $widgets;

    /** @var bool */
    public $collapsible;

    /** @var string */
    public $header;

    /** @var int */
    public $uncollapsible_widgets_count;

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
     * @return Section
     */
    public function addWidget(Widget $widget): self
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
     * @return Section
     */
    public function setCollapsible(bool $collapsible): self
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
     * @return Section
     */
    public function setHeader(string $header): self
    {
        $this->header = $header;

        return $this;
    }

    /**
     * @return int
     */
    public function getUncollapsibleWidgetsCount(): int
    {
        return $this->uncollapsible_widgets_count;
    }

    /**
     * @param int $uncollapsible_widgets_count
     *
     * @return Section
     */
    public function setUncollapsibleWidgetsCount(int $uncollapsible_widgets_count): self
    {
        $this->uncollapsible_widgets_count = $uncollapsible_widgets_count;

        return $this;
    }
}
