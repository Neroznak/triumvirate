<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(Project $project) {
        return view('projects.show', compact('project'));
    }
}
