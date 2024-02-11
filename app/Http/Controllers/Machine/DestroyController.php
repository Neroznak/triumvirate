<?php

namespace App\Http\Controllers\Machine;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Machine;
use App\Models\Task;
use App\Models\User;

class DestroyController extends Controller
{
    public function __invoke(Machine $machine) {
        $machine->delete();
        return redirect()->route('machines.index');
    }
}
