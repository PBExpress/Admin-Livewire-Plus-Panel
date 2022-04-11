<?php

namespace App\Providers;

use App\Listeners\AssignRoleForRegisteredUser;
use App\Models\CrmDocument as CrmDocumentModel;
use App\Models\Task as TaskModel;
use App\Models\User as UserModel;
use App\Observers\CrmDocumentObserver;
use App\Observers\TaskObserver;
use App\Observers\UserObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            AssignRoleForRegisteredUser::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot()
    {
        TaskModel::observe(TaskObserver::class);
        UserModel::observe(UserObserver::class);
        CrmDocumentModel::observe(CrmDocumentObserver::class);
    }
}
