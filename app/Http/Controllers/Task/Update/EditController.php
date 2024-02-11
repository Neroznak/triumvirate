<?php

namespace App\Http\Controllers\Task\Update;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use App\Models\Update;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(Task $task, Update $update) {
        $users = User::all();
        return view('tasks.updates.edit', compact('task', 'users', 'update', ));
    }
}
