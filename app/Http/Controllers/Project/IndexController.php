<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke() {
        $projects = Project::orderBy('deadline', 'asc')->get();
        $tasks = Task::all();
        return view('projects.index', compact('projects', 'tasks'));
    }
}
