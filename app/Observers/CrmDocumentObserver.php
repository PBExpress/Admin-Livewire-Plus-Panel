<?php

namespace App\Observers;

use App\Models\CrmDocument;
use App\Models\User;
use App\Notifications\DataChangeEmailNotification;
use Notification;

class CrmDocumentObserver
{
    public function created(CrmDocument $crmDocument): void
    {
        $payload = [
            'action' => 'created',
            'model'  => sprintf('%s#%s', get_class($crmDocument), $crmDocument->id),
            'reason' => auth()->user(),
        ];

        $admins = User::admins()->get();

        Notification::send($admins, new DataChangeEmailNotification($payload));
    }

    public function updated(CrmDocument $crmDocument): void
    {
        $payload = [
            'action' => 'updated',
            'model'  => sprintf('%s#%s', get_class($crmDocument), $crmDocument->id),
            'reason' => auth()->user(),
        ];

        $admins = User::admins()->get();

        Notification::send($admins, new DataChangeEmailNotification($payload));
    }

    public function deleted(CrmDocument $crmDocument): void
    {
        $payload = [
            'action' => 'deleted',
            'model'  => sprintf('%s#%s', get_class($crmDocument), $crmDocument->id),
            'reason' => auth()->user(),
        ];

        $admins = User::admins()->get();

        Notification::send($admins, new DataChangeEmailNotification($payload));
    }
}
