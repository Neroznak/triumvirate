<?php

namespace App\Http\Controllers\Project\Work;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Machine;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use App\Models\Work;

class EditController extends Controller
{
    public function __invoke(Project $project, Work $work) {
        return view('projects.works.edit', compact('work', 'project'));
    }
}
