<?php

namespace App\Http\Controllers\Project\Work;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Machine;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use App\Models\Work;

class IndexController extends Controller
{
    public function __invoke(Project $project) {
        $works = Work::all();
        return view('projects.works.index', compact('works', 'project'));
    }
}
