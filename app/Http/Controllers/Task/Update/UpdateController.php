<?php

namespace App\Http\Controllers\Task\Update;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use App\Models\Update;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(Task $task, Update $update ) {
        $data = request()->validate([
            'title' => 'required|string',
            'status' => 'required|string',
//            'text' => '',
        ]);
        $update->update($data);
        return redirect()->route('tasks.show',  $task->id);
    }
}
