<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Jenssegers\Date\Date;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Date::setlocale(config('app.locale'));
    }
}
