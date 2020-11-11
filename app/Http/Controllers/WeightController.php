<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeightFormRequest;
use App\Models\User;
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


    public function destroy(Weight $weight)
    {
        $this->authorize('delete', $weight);

        $weight->delete();
        return back()->with('success', 'Удалено');
    }

    function byUser(User $user)
    {
        return view(
            'weights.show',
            [
                'title' => 'Данные веса пользователя ' . $user->name,
                'weights' => $user->weights()->paginate(10)
            ]
        );
    }

}
