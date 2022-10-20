<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;
use App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Carbon::setUTF8(true);
        Carbon::setLocale(App::getLocale());
        //Carbon::setLocale($this->app->getLocale());
        Schema::defaultStringLength(191);

        /*if ($this->app->environment('production')) {
            \URL::forceScheme('https');
        }*/

        Paginator::useBootstrap();
    }
}
