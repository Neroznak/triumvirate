<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;


class ProjectStoreController extends Controller
{
    public function __invoke(User $user, Project $project)
    {

        $data = request()->validate([
            'title' => 'required|string',
            'comment' => 'required|string',
            'deadline' => 'required|date',
            'performer' => 'required|string',
        ]);
//        dd($project->id);
        $data['project_id'] = $project->id;
        $data['tasked'] = auth()->id();
        Task::firstOrCreate($data);
        return redirect()->route('projects.execute', $project->id);
    }
}
