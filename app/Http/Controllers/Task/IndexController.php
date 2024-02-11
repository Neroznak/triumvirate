<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke() {
        $tasks = Task::orderBy('deadline', 'asc')->get();
        $users = User::all();
        $projects = Project::all();



        return view('tasks.index', compact('tasks', 'users', 'projects'));
    }
}
