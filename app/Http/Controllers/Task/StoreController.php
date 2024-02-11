<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;


class StoreController extends Controller
{
    public function __invoke(User $user)
    {

        $data = request()->validate([
            'title' => 'required|string',
            'comment' => 'required|string',
            'deadline' => 'required|date',
            'performer' => 'required|string',
        ]);
        $data['tasked'] = auth()->id();
        Task::firstOrCreate($data);
        return redirect()->route('tasks.index');
    }
}
