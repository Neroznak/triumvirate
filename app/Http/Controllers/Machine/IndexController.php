<?php

namespace App\Http\Controllers\Machine;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Machine;
use App\Models\Task;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke() {
        $machines = Machine::all();
        return view('machines.index', compact('machines'));
    }
}
