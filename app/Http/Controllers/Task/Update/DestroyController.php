<?php

namespace App\Http\Controllers\Task\Update;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use App\Models\Update;

class DestroyController extends Controller
{
    public function __invoke(Task $task, Update $update) {
        $update->delete();
        return redirect()->route('tasks.show', $task->id);
    }
}
