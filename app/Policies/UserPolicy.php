<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {

    }

    public function manageUsers(User $user)
    {
        return $user->isAdmin();
    }

    public function attendConcerts(User $user)
    {
        return $user->isUser();
    }

    public function manageMyConcerts(User $user)
    {
        return $user->isArtist();
    }

}
