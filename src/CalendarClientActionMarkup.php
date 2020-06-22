<?php

namespace ShaileshMatariya\Gsuite\Addon;

class CalendarClientActionMarkup extends GoogleModel
{
    /** @var EditAttendeesActionMarkup */
    public $edit_attendees_action_markup;

    /** @var EditConferenceDataActionMarkup */
    public $edit_conference_data_action_markup;

    /**
     * @return EditAttendeesActionMarkup
     */
    public function getEditAttendeesActionMarkup(): EditAttendeesActionMarkup
    {
        return $this->edit_attendees_action_markup;
    }

    /**
     * @param EditAttendeesActionMarkup $edit_attendees_action_markup
     *
     * @return CalendarClientActionMarkup
     */
    public function setEditAttendeesActionMarkup(EditAttendeesActionMarkup $edit_attendees_action_markup): self
    {
        $this->edit_attendees_action_markup = $edit_attendees_action_markup;

        return $this;
    }

    /**
     * @return EditConferenceDataActionMarkup
     */
    public function getEditConferenceDataActionMarkup(): EditConferenceDataActionMarkup
    {
        return $this->edit_conference_data_action_markup;
    }

    /**
     * @param EditConferenceDataActionMarkup $edit_conference_data_action_markup
     *
     * @return CalendarClientActionMarkup
     */
    public function setEditConferenceDataActionMarkup(EditConferenceDataActionMarkup $edit_conference_data_action_markup): self
    {
        $this->edit_conference_data_action_markup = $edit_conference_data_action_markup;

        return $this;
    }
}
