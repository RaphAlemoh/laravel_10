<?php

namespace App\Providers;

use App\Models\User;
use Laravel\Pennant\Feature;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        //ui-design is the new feature to implement
        Feature::define('ui-design', function (User $user){
            //we can specify the user that can see the new ui design feature
            //for this feature a customer can view the ui design
            return $user->isCustomer();

        });
    }
}
