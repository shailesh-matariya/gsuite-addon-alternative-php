<?php

namespace ShaileshMatariya\Gsuite\Addon;

class Calendar extends GoogleModel
{
    /** @var EditAttendeesActionMarkup */
    public $edit_attendees_action_markup;

    /** @var EditConferenceDataActionMarkup */
    public $edit_conference_data_action_markup;

    /** @var CalendarClientActionMarkup */
    public $calendar_client_action_markup;

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
     * @return Calendar
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
     * @return Calendar
     */
    public function setEditConferenceDataActionMarkup(EditConferenceDataActionMarkup $edit_conference_data_action_markup): self
    {
        $this->edit_conference_data_action_markup = $edit_conference_data_action_markup;

        return $this;
    }

    /**
     * @return CalendarClientActionMarkup
     */
    public function getCalendarClientActionMarkup(): CalendarClientActionMarkup
    {
        return $this->calendar_client_action_markup;
    }

    /**
     * @param CalendarClientActionMarkup $calendar_client_action_markup
     *
     * @return Calendar
     */
    public function setCalendarClientActionMarkup(CalendarClientActionMarkup $calendar_client_action_markup): self
    {
        $this->calendar_client_action_markup = $calendar_client_action_markup;

        return $this;
    }
}
