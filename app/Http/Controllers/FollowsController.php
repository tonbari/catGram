<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class FollowsController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function store(User $user)
    {
        return auth()->user()->following()->toggle($user->profile);
    }
}
