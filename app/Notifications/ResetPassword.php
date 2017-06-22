<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends Notification
{
    use Queueable;

    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = url('/');

        return (new MailMessage)
            ->subject('[Sistema] Recuperar contraseña')
            ->greeting('Estimado usuario')
            ->line('Estas recibiendo este email debido a que recibimos una solicitud para resetar la contraseña de tu cuenta. Haz click en el boton de abajo para resetear tu contraseña:')
            ->action('Resetear contraseña', url('password/reset', $this->token).'?email='.urlencode($notifiable->email))
            ->line('Si tu no solicitaste un reseteo de contraseña, ninguna acción es requerida');
    }
}
