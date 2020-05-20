<?php

namespace ShaileshMatariya\Gsuite\Addon;

class Drive extends GoogleModel
{
    /** @var DriveClientActionMarkup */
    public $drive_client_action_markup;

    /**
     * @return DriveClientActionMarkup
     */
    public function getDriveClientActionMarkup(): DriveClientActionMarkup
    {
        return $this->drive_client_action_markup;
    }

    /**
     * @param DriveClientActionMarkup $drive_client_action_markup
     *
     * @return Drive
     */
    public function setDriveClientActionMarkup(DriveClientActionMarkup $drive_client_action_markup): Drive
    {
        $this->drive_client_action_markup = $drive_client_action_markup;

        return $this;
    }
}
