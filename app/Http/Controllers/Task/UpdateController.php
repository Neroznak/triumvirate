<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Task;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(Task $task) {
        $data = request()->validate([
            'title' => 'required|string',
            'comment' => 'required|string',
            'deadline' => 'required|date',
            'performer' => 'required|string',
            'status' => 'required|string',
        ]);
        $task->update($data);
        $users = User::all();
        return redirect()->route('tasks.show',compact('task', 'users'));
    }
}
