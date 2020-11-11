<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Weight;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WeightChart extends BaseChart
{

    public ?string $name = 'my_chart';

    public ?string $routeName = 'my_chart';
    public function handler(Request $request): Chartisan
    {
        $weights = DB::table('weights')->get();
        $labels = [];
        $count = [];

        foreach ($weights as $weight){
            array_push($labels, $weight->created_at);
            array_push($count, $weight->weight);
        }

        return Chartisan::build()
            ->labels($labels)
            ->dataset('Weight', $count);
    }
}
