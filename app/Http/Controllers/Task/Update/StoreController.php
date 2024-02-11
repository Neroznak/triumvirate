<?php

namespace App\Http\Controllers\Task\Update;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use App\Models\Update;


class StoreController extends Controller
{
    public function __invoke (Task $task)
    {
        $data = request()->validate([
            'title' => 'required|string',
            'status' => 'required|string',
//            'text' => '',
        ]);
        $data['task_id'] = $task->id;
        $data['performer'] = auth()->id();
        Update::firstOrCreate($data);
        return redirect()->route('tasks.show', $task->id);
    }
}
