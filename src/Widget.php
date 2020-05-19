<?php


namespace ShaileshMatariya\Gsuite\Addon;


class Widget extends \Google_Model
{
    /** @var Image */
    public $image;

    /** @var Button */
    public $button;

    /** @var TextParagraph */
    public $text_paragraph;

    /** @var KeyValue */
    public $key_value;

    /**
     * @return Image
     */
    public function getImage(): Image
    {
        return $this->image;
    }

    /**
     * @param Image $image
     *
     * @return Widget
     */
    public function setImage(Image $image): Widget
    {
        $this->image = $image;

        return $this;
    }

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
     * @return Widget
     */
    public function setButton(Button $button): Widget
    {
        $this->button = $button;

        return $this;
    }

    /**
     * @param TextParagraph $text_paragraph
     *
     * @return Widget
     */
    public function setTextParagraph(TextParagraph $text_paragraph): Widget
    {
        $this->text_paragraph = $text_paragraph;

        return $this;
    }

    /**
     * @return KeyValue
     */
    public function getKeyValue(): KeyValue
    {
        return $this->key_value;
    }

    /**
     * @param KeyValue $key_value
     *
     * @return Widget
     */
    public function setKeyValue(KeyValue $key_value): Widget
    {
        $this->key_value = $key_value;

        return $this;
    }
}
