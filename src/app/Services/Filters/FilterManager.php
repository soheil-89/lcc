<?php

namespace App\Services\Filters;



use App\Notifications\AdminNotification;
use Illuminate\Support\Facades\Notification;


class FilterManager
{
    public function applyFilter(FilterStrategyInterface $filter, $model, $value)
    {
        try {
            return $filter->apply($model, $value);
        } catch (\Exception $exception) {
            $this->notifyAdmin($exception);
            return $model;
        }
    }


    private function notifyAdmin(\Exception $exception)
    {
        $mobile= config('app.admin_mobile');
        $email = config('app.admin_email');

        // Mock SMS service
        $this->sendSMS($mobile, $exception->getMessage());

        // Send email to admin
        Notification::send($email, new AdminNotification($exception->getMessage()));
    }

    private function sendSMS($mobile, $message)
    {
        // Mock SMS service
        // You can implement a real SMS service if needed
        // For now, just log the SMS details
        \Log::info("SMS sent to $mobile: $message");
    }
}

