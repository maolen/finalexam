<?php

namespace App\Providers;

use App\Charts\WeightChart;
use ConsoleTVs\Charts\Registrar as Charts;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(Charts $charts)
    {
        $charts->register(
            [
                WeightChart::class
            ]
        );
    }
}
