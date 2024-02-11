<?php

namespace App\Http\Controllers\Project\Work;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Machine;
use App\Models\Project;
use App\Models\Task;
use App\Models\Work;


class StoreController extends Controller
{
    public function __invoke(Project $project)
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
        Work::firstOrCreate($data);
        return redirect()->route('projects.works.index', $project->id);
    }
}
