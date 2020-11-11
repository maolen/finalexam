<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Weight;
use Illuminate\Auth\Access\HandlesAuthorization;

class WeightPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        return true;
    }

    public function delete(User $user, Weight $weight)
    {
        return $weight->user_id == $user->id;
    }

    public function view(User $user)
    {
        return auth()->user()->id == '2';
    }
}
