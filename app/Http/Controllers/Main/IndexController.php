<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Machine;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke() {
        $projects = Project::all();
        $tasks = Task::all();
        $machines = Machine::all();
        $users = User::all();
        return view('main.index', compact(['projects','users','tasks','machines']));
    }
}
