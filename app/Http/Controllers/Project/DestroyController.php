<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;


class DestroyController extends Controller
{
    public function __invoke(Project $project) {
        $project->delete();
        return redirect()->route('projects.index');
    }
}
