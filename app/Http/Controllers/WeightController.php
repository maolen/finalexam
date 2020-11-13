<?php

namespace App\Http\Controllers;

use App\Http\Requests\DateRequest;
use App\Http\Requests\WeightFormRequest;
use App\Models\Weight;

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

    function getDates(DateRequest $request)
    {
        $from = $request->get('date_from');
        $to = $request->get('date_to');

        $data = auth()->user()->weights()->whereBetween('created_at', [$from, $to])->paginate(10);

        return view(
            'weights.search',
            [
                'title' => $from,
                'weights' => $data
            ]
        );
    }


    public function destroy(Weight $weight)
    {
        $this->authorize('delete', $weight);

        $weight->delete();
        return back()->with('success', 'Удалено');
    }

    function byUser()
    {
        $user = auth()->user();
        return view(
            'weights.show',
            [
                'title' => 'Данные веса пользователя ' . $user->name,
                'weights' => $user->weights()->paginate(10)
            ]
        );
    }

}
