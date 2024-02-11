<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\Update;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(Task $task) {
        $users = User::all();
        $updates = Update::all();
        return view('tasks.show', compact('task', 'users', 'updates'));
    }
}
