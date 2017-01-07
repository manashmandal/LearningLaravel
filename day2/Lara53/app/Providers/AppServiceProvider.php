<?php

namespace App\Providers;

use View;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $age = Carbon::createFromDate(1995, 9, 2)->age;

        View::share('age', $age);
        //
        View::share('myname', 'manash');
        //View::share('auth', Auth::user());
        View::composer('*', function($view){
            $view->with('auth', Auth::user());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
