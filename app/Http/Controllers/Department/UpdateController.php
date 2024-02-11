<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;

class UpdateController extends Controller
{
    public function __invoke(Department $department) {
        $data = request()->validate([
            'name' => 'string',
        ]);
        $department->update($data);
        return redirect()->route('departments.index',compact('department'));
    }
}
