<?php


namespace ShaileshMatariya\Gsuite\Addon;


class ButtonSet extends \Google_Model
{
    /** @var Button */
    public $button;

    /**
     * @return Button
     */
    public function getButton(): Button
    {
        return $this->button;
    }

    /**
     * @param Button $button
     *
     * @return ButtonSet
     */
    public function addButton(Button $button): ButtonSet
    {
        $this->button = $button;

        return $this;
    }
}
