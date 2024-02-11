<?php

namespace App\Http\Controllers\Machine;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Machine;
use App\Models\Task;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(Machine $machine) {
        $data = request()->validate([
            'name' => 'required|string',
        ]);
        $machine->update($data);
        return redirect()->route('machines.index',compact('machine'));
    }
}
