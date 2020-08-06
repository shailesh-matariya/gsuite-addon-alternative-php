<?php

namespace ShaileshMatariya\Gsuite\Addon;

class Widget extends GoogleModel
{
    /** @var Image */
    public $image;

    /** @var ButtonList */
    public $button_list;

    /** @var TextParagraph */
    public $text_paragraph;

    /** @var DecoratedText */
    public $decorated_text;

    /** @var TextInput */
    public $text_input;

    /** @var SelectionInput */
    public $selection_input;

    /** @var DateTimePicker */
    public $date_time_picker;

    /** @var string "enum": [ "START", "CENTER", "END" ] */
    public $horizontal_alignment;

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
    public function setImage(Image $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @param TextParagraph $text_paragraph
     *
     * @return Widget
     */
    public function setTextParagraph(TextParagraph $text_paragraph): self
    {
        $this->text_paragraph = $text_paragraph;

        return $this;
    }

    /**
     * @return DecoratedText
     */
    public function getDecoratedText(): DecoratedText
    {
        return $this->decorated_text;
    }

    /**
     * @param DecoratedText $decorated_text
     *
     * @return Widget
     */
    public function setDecoratedText(DecoratedText $decorated_text): self
    {
        $this->decorated_text = $decorated_text;

        return $this;
    }

    /**
     * @return ButtonList
     */
    public function getButtonList(): ButtonList
    {
        return $this->button_list;
    }

    /**
     * @param ButtonList $button_list
     *
     * @return Widget
     */
    public function setButtonList(ButtonList $button_list): self
    {
        $this->button_list = $button_list;

        return $this;
    }

    /**
     * @return TextInput
     */
    public function getTextInput(): TextInput
    {
        return $this->text_input;
    }

    /**
     * @param TextInput $text_input
     *
     * @return Widget
     */
    public function setTextInput(TextInput $text_input): self
    {
        $this->text_input = $text_input;

        return $this;
    }

    /**
     * @return SelectionInput
     */
    public function getSelectionInput(): SelectionInput
    {
        return $this->selection_input;
    }

    /**
     * @param SelectionInput $selection_input
     *
     * @return Widget
     */
    public function setSelectionInput(SelectionInput $selection_input): self
    {
        $this->selection_input = $selection_input;

        return $this;
    }

    /**
     * @return DateTimePicker
     */
    public function getDateTimePicker(): DateTimePicker
    {
        return $this->date_time_picker;
    }

    /**
     * @param DateTimePicker $date_time_picker
     *
     * @return Widget
     */
    public function setDateTimePicker(DateTimePicker $date_time_picker): self
    {
        $this->date_time_picker = $date_time_picker;

        return $this;
    }

    /**
     * @return string
     */
    public function getHorizontalAlignment(): string
    {
        return $this->horizontal_alignment;
    }

    /**
     * @param string $horizontal_alignment
     *
     * @return Widget
     */
    public function setHorizontalAlignment(string $horizontal_alignment): self
    {
        $this->horizontal_alignment = $horizontal_alignment;

        return $this;
    }
}
