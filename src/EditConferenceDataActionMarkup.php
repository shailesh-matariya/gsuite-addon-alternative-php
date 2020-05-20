<?php

namespace ShaileshMatariya\Gsuite\Addon;

class EditConferenceDataActionMarkup extends GoogleModel
{
    /** @var ConferenceDataMarkup */
    public $set_conference_data;

    /**
     * @return ConferenceDataMarkup
     */
    public function getSetConferenceData(): ConferenceDataMarkup
    {
        return $this->set_conference_data;
    }

    /**
     * @param ConferenceDataMarkup $set_conference_data
     *
     * @return EditConferenceDataActionMarkup
     */
    public function setSetConferenceData(ConferenceDataMarkup $set_conference_data): EditConferenceDataActionMarkup
    {
        $this->set_conference_data = $set_conference_data;

        return $this;
    }
}
