<?php

namespace ShaileshMatariya\Gsuite\Addon;

class DateTimePicker extends GoogleModel
{
    /** @var string */
    public $name;

    /** @var string */
    public $label;

    /** @var string "enum": ["DATE_AND_TIME", "DATE_ONLY", "TIME_ONLY"] */
    public $type;

    /** @var int */
    public $value_ms_epoch;

    /** @var int */
    public $timezone_offset_date;

    /** @var Action */
    public $on_change_action;

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
     * @return DateTimePicker
     */
    public function setName(string $name): self
    {
        $this->name = $name;

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
     * @return DateTimePicker
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

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
     * @return DateTimePicker
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return int
     */
    public function getValueMsEpoch(): int
    {
        return $this->value_ms_epoch;
    }

    /**
     * @param int $value_ms_epoch
     *
     * @return DateTimePicker
     */
    public function setValueMsEpoch(int $value_ms_epoch): self
    {
        $this->value_ms_epoch = $value_ms_epoch;

        return $this;
    }

    /**
     * @return int
     */
    public function getTimezoneOffsetDate(): int
    {
        return $this->timezone_offset_date;
    }

    /**
     * @param int $timezone_offset_date
     *
     * @return DateTimePicker
     */
    public function setTimezoneOffsetDate(int $timezone_offset_date): self
    {
        $this->timezone_offset_date = $timezone_offset_date;

        return $this;
    }

    /**
     * @return Action
     */
    public function getOnChangeAction(): Action
    {
        return $this->on_change_action;
    }

    /**
     * @param Action $on_change_action
     *
     * @return DateTimePicker
     */
    public function setOnChangeAction(Action $on_change_action): self
    {
        $this->on_change_action = $on_change_action;

        return $this;
    }
}
