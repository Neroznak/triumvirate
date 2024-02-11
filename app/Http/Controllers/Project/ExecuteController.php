<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;

class ExecuteController extends Controller
{
    public function __invoke(Project $project) {
        $tasks = Task::all();
        $users = User::all();
        return view('projects.executions.index', compact('project','tasks', 'users'));
    }
}
