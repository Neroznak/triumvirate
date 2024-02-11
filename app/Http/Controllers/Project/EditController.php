<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Department;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(Project $project) {
        $companies = Company::all();
        return view('projects.edit', compact('project', 'companies'));
    }
}
