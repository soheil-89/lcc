<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class AdminNotification extends Notification
{
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('The introduction to the notification.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    public function toSMS($notifiable)
    {
        // Implementation for sending SMS notification...
    }

    public function via($notifiable)
    {
        return ['mail', 'sms'];
    }

    public function toArray($notifiable)
    {
        return [
            // Additional data to be stored in the notification
        ];
    }
}
