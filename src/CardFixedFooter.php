<?php

namespace ShaileshMatariya\Gsuite\Addon;

class CardFixedFooter extends GoogleModel
{
    /** @var Button */
    public $primary_button;

    /** @var Button */
    public $secondary_button;

    /**
     * @return Button
     */
    public function getPrimaryButton(): Button
    {
        return $this->primary_button;
    }

    /**
     * @param Button $primary_button
     *
     * @return CardFixedFooter
     */
    public function setPrimaryButton(Button $primary_button): self
    {
        $this->primary_button = $primary_button;

        return $this;
    }

    /**
     * @return Button
     */
    public function getSecondaryButton(): Button
    {
        return $this->secondary_button;
    }

    /**
     * @param Button $secondary_button
     *
     * @return CardFixedFooter
     */
    public function setSecondaryButton(Button $secondary_button): self
    {
        $this->secondary_button = $secondary_button;

        return $this;
    }
}
