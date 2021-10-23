<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Auth\Notifications\ResetPassword;

class MyResetPassword extends ResetPassword
{
    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Notificación de restablecimiento de contraseña')
            ->greeting('Hola')
            ->line('Recibió este correo electrónico porque recibimos una solicitud de restablecimiento de contraseña para su cuenta.')
            ->action('Restablecer la contraseña',  route('password.reset', $this->token))
            ->line('Este enlace de restablecimiento de contraseña caducará en 60 minutos.')
            ->line('Si no solicitó un restablecimiento de contraseña, no es necesario realizar ninguna otra acción.')
            ->salutation('Saludos, Mercado Tzununya');
    }
}
