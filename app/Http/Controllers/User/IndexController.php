<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Task;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke() {
        $users = User::all();
        return view('users.index', compact('users'));
    }
}
