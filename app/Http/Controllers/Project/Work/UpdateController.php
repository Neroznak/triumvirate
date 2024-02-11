<?php

namespace App\Http\Controllers\Project\Work;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Machine;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use App\Models\Work;

class UpdateController extends Controller
{
    public function __invoke(Project $project, Work $work)
    {
        $data = request()->validate([
            'title' => 'required|string',
            'measure' => 'required|string',
            'amount' => 'required',
            'cost' => 'required',
            'comment' => 'required|string',
        ]);
        $data['total'] = $data['amount'] * $data['cost'];
        $data['project_id'] = $project->id;
        $work->update($data);
        return redirect()->route('projects.works.index', $project->id);
    }
}
