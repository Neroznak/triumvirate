<?php

namespace App\Http\Controllers\Task\Update;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;

class CreateController extends Controller
{
    public function __invoke(Task $task) {
        $users = User::all();
        return view('tasks.updates.create',compact(['users', 'task']));
    }
}
