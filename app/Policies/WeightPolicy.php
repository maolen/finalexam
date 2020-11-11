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
}
