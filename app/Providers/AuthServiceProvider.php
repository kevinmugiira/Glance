<?php

namespace App\Providers;

use Illuminate\Auth\Events\Logout;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

//        Auth::extend('logouts', function ($app, $name, array $config) {
//            // Return an instance of Illuminate\Contracts\Auth\Guard...
//
//            return new logout(Auth::createUserProvider($config['sessions']));
//        });

        Auth::viaRequest('logout', function (Request $request) {
            return User::where('token', $request->token)->first();
        });

    }
}
