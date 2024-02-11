<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;

class EditController extends Controller
{
    public function __invoke(Department $department) {
        return view('departments.edit', compact('department'));
    }
}
