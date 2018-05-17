<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Carbon\Carbon;
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
        //
        $year=1987;
        $month=12;
        $day=25;
        $age = Carbon::createFromDate($year, $month, $day)->age;
        View::share('age',$age);
        View::share('myname','Wong');

        View::share('auth',Auth::user());
        View::composer('*',function($view){
            $view->with('auth',Auth::user());
        }
        );
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
