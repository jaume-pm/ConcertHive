<?php

namespace App\Providers;


use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

    Gate::define('manage-users', [UserPolicy::class, 'manageUsers']);
    Gate::define('manage-my-concerts', [UserPolicy::class, 'manageMyConcerts']);
    Gate::define('attend-concerts', [UserPolicy::class, 'attendConcerts']);
    }
}
