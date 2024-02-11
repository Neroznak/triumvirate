<?php

namespace App\Http\Controllers\Project\Work;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Machine;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use App\Models\Work;

class DestroyController extends Controller
{
    public function __invoke(Project $project, Work $work) {
        $work->delete();
        return redirect()->route('projects.works.index', $project->id);
    }
}
