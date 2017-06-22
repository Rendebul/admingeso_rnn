<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;

use App\ArchivoCarga;

class StoreCsvDataNotification extends Notification
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return $this->data;
    }
}