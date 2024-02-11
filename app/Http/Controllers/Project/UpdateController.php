<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(Project $project) {
        $data = request()->validate([
            'title' => 'required|string',
            'address' => 'required|string',
            'customer' => 'string',
            'deadline' => 'required|string',
            'status' => 'required|string',
            'response' => 'required|string',
            'income' => '',
            'contract' => '',
        ]);
        $project->update($data);
        return redirect()->route('projects.show',$project);
    }
}
