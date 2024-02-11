<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;

class IndexController extends Controller
{
    public function __invoke() {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }
}
