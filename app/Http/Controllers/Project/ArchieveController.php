<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;

class ArchieveController extends Controller
{
    public function __invoke() {
        $projects = Project::all();
        return view('projects.archieve', compact('projects'));
    }
}
