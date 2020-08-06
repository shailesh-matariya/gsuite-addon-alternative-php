<?php

namespace ShaileshMatariya\Gsuite\Addon;

class EditAttendeesActionMarkup extends GoogleModel
{
    /** @var string[] */
    public $add_attendee_emails;

    /**
     * @return string[]
     */
    public function getAddAttendeeEmails(): array
    {
        return $this->add_attendee_emails;
    }

    /**
     * @param string[] $add_attendee_emails
     *
     * @return EditAttendeesActionMarkup
     */
    public function setAddAttendeeEmails(array $add_attendee_emails): self
    {
        $this->add_attendee_emails = $add_attendee_emails;

        return $this;
    }

    /**
     * @param string $add_attendee_email
     *
     * @return EditAttendeesActionMarkup
     */
    public function addAttendeeEmail(string $add_attendee_email): self
    {
        $this->add_attendee_emails[] = $add_attendee_email;

        return $this;
    }
}
