<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\User;

class ProjectCreateController extends Controller
{
    public function __invoke(Project $project) {
        $users = User::all();
//        dd($project->id);
        return view('tasks.create',compact('users', 'project'));
    }
}
