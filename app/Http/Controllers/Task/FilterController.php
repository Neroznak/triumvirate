<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;

class FilterController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'performer' => '',]);
        if (is_null($data['performer'])) {
            $tasks = Task::orderBy('deadline', 'asc')->get();
        } else {
            $tasks = Task::orderBy('deadline', 'asc')->where('performer', $data['performer'])->get();
        }
        $users = User::all();
        $projects = Project::all();
        return view('tasks.index', compact('tasks', 'users', 'projects'));
    }
}
