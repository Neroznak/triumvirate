<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Task;

class DestroyController extends Controller
{
    public function __invoke(Task $task) {
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
