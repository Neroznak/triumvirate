<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Project;
use App\Models\Task;


class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'address' => 'required|string',
            'customer' => 'string',
            'deadline' => 'required|string',
            'response' => 'required|string',
            'contract' => '',

        ]);
        Project::firstOrCreate($data);
        return redirect()->route('projects.index');
    }
}
