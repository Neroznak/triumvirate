<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\User;

class CreateController extends Controller
{
    public function __invoke() {
        $users = User::all();
        return view('tasks.create',compact('users'));
    }
}
