<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class WelcomeNotification extends Notification
{
    use Queueable;

    public function __construct()
    {
    }

    public function via($notifiable)
    {
        return ['database', 'mail'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'message' => 'Bienvenido al sistema ' . config('app.name'),
            'icon' => 'fa-user'
        ];
    }

    public function toMail($notifiable)
    {
        $url = url('/');

        return (new MailMessage)
            ->subject('[Sistema] Bienvenido al sistema X')
            ->greeting('Bienvenido!')
            ->line('Tu cuenta en el sistema ha sido creado')
            ->line('Desde hoy podrás solicitar productos al ingresar al siguiente link')
            ->action('Sistema x', $url);
    }
}
