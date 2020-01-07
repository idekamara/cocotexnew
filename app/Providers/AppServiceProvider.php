<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
   

   public function register()
    {
        Gate::define('admin',function(User $user)
        {
            return $user->isAdmin();
        });
        Gate::define('moderator',function(User $user)
        {
            return $user->isModerator();
        });
        Gate::define('user',function(User $user)
        {
            return $user->isUser();
        });
    }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
