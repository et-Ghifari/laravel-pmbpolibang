<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use \App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];
    public static $permission = [
        'user' => ['superuser', 'admin', 'user'],
        'admin' => ['superuser', 'admin'],
        'super' => ['superuser'],
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        foreach (self::$permission as $feature => $roles) {
            Gate::define($feature, function (User $user) use ($roles) {
                if (in_array($user->role, $roles)) {
                    return true;
                }
            });
        }
    }
}
