<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * 　同一Userが削除できること
     *
     * @param User $user
     * @param User $user_model
     * @return void
     */
    public function edit(User $user, User $user_model)
    {
        return $user->id == $user_model->id;
    }
}