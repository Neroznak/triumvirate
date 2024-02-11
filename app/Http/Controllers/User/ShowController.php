<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(User $user) {
        return view('users.show', compact('user'));
    }
}
