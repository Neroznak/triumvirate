<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;

class UpdateExpenseController extends Controller
{
    public function __invoke(Project $project) {
        $data = request()->validate([
           'expense' => ''
        ]);
        $project->update($data);
        return redirect()->route('projects.show',$project);
    }
}
