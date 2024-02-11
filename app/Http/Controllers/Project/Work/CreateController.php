<?php

namespace App\Http\Controllers\Project\Work;

use App\Http\Controllers\Controller;
use App\Models\Project;

class CreateController extends Controller
{
    public function __invoke(Project $project) {
        return view('projects.works.create', compact('project'));
    }
}
