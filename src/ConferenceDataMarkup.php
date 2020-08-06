<?php

namespace ShaileshMatariya\Gsuite\Addon;

class ConferenceDataMarkup extends GoogleModel
{
    /** @var string */
    public $conference_id;

    /** @var EntryPoint[] */
    public $entry_point;

    /** @var Parameter[] */
    public $parameter;

    /** @var Error */
    public $error;

    /** @var string */
    public $notes;

    /**
     * @return string
     */
    public function getConferenceId(): string
    {
        return $this->conference_id;
    }

    /**
     * @param string $conference_id
     *
     * @return ConferenceDataMarkup
     */
    public function setConferenceId(string $conference_id): self
    {
        $this->conference_id = $conference_id;

        return $this;
    }

    /**
     * @return EntryPoint[]
     */
    public function getEntryPoint(): array
    {
        return $this->entry_point;
    }

    /**
     * @param EntryPoint[] $entry_point
     *
     * @return ConferenceDataMarkup
     */
    public function setEntryPoint(array $entry_point): self
    {
        $this->entry_point = $entry_point;

        return $this;
    }

    /**
     * @param EntryPoint $entry_point
     *
     * @return ConferenceDataMarkup
     */
    public function addEntryPoint(EntryPoint $entry_point): self
    {
        $this->entry_point[] = $entry_point;

        return $this;
    }

    /**
     * @return Parameter[]
     */
    public function getParameter(): array
    {
        return $this->parameter;
    }

    /**
     * @param Parameter[] $parameter
     *
     * @return ConferenceDataMarkup
     */
    public function setParameter(array $parameter): self
    {
        $this->parameter = $parameter;

        return $this;
    }

    /**
     * @param Parameter $parameter
     *
     * @return ConferenceDataMarkup
     */
    public function addParameter(Parameter $parameter): self
    {
        $this->parameter[] = $parameter;

        return $this;
    }

    /**
     * @return Error
     */
    public function getError(): Error
    {
        return $this->error;
    }

    /**
     * @param Error $error
     *
     * @return ConferenceDataMarkup
     */
    public function setError(Error $error): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return string
     */
    public function getNotes(): string
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     *
     * @return ConferenceDataMarkup
     */
    public function setNotes(string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }
}
