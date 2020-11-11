<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeightFormRequest;
use App\Models\Weight;
use Illuminate\Support\Facades\DB;

class WeightController extends Controller
{
    public function index()
    {

        return view(
            'weights.index',
            [
                'title' => 'Добро пожаловать на сайт контроля веса'
            ]
        );
    }

    public function create()
    {
        $this->authorize('create', Weight::class);
        return view(
            'weights.form',
            [
                'title' => 'Внесите свои показатели'
            ]
        );
    }

    public function store(WeightFormRequest $request)
    {
        $this->authorize('create', Weight::class);

        auth()->user()
            ->weights()
            ->create($request->validated());

        return back()->with('success', 'Сохранено');
    }

    function stat()
    {
        return view('weight.stat');
    }
}
