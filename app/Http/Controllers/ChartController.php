<?php

namespace App\Http\Controllers;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Jenssegers\Date\Date;

class ChartController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        $weights = $user->weights()->get();
        $dates = [];
        $count = [];

        foreach ($weights as $weight) {
            $date = Date::parse($weight->created_at, config('app.timezone'))->format('j F Y г. H:i');
            array_push($dates, $date);
            array_push($count, $weight->weight . ' кг');
        }

        $chart = (new LarapexChart)
            ->setType('area')
            ->setTitle('Колебания веса')
            ->setGrid(true)
            ->setXAxis($dates)
            ->setDataset(
                [
                    [
                        'name' => 'Вес (кг)',
                        'data' => $count
                    ]
                ]
            );
        return view('weights.chart', compact('chart'));
    }
}
