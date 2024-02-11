<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Task;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(User $user) {
        return view('users.edit', compact('user'));
    }
}
